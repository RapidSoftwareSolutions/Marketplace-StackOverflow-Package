<?php
$app->post('/api/StackOverflow/getSynonymsForTags', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['tagNames']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    //forming request to vendor API
    $tagNames = is_array($post_data['args']['tagNames']) ? implode(';', $post_data['args']['tagNames']) : $post_data['args']['tagNames'];
    $query_str = $settings['api_url'] . 'tags/' . $tagNames . '/synonyms';
    $body = array();

    if (isset($post_data['args']['sortingOrder']) && (strlen($post_data['args']['sortingOrder'])) > 0) {
        $body['order'] = $post_data['args']['sortingOrder'];
    } else {
        $body['order'] = 'desc';
    }

    if (isset($post_data['args']['sortBy']) && (strlen($post_data['args']['sortBy'])) > 0) {
        $body['sort'] = $post_data['args']['sortBy'];
    } else {
        $body['sort'] = 'creation';
    };

    if (isset($post_data['args']['pageNumber']) && (strlen($post_data['args']['pageNumber'])) > 0) {
        $body['page'] = $post_data['args']['pageNumber'];
    };

    if (isset($post_data['args']['pageSize']) && (strlen($post_data['args']['pageSize'])) > 0) {
        $body['pagesize'] = $post_data['args']['pageSize'];
    };

    if (isset($post_data['args']['fromDate']) && (strlen($post_data['args']['fromDate'])) > 0) {
        if (is_numeric($post_data['args']['fromDate'])) {
            $body['fromdate'] = $post_data['args']['fromDate'];
        } else {
            $dateTime = new DateTime($post_data['args']['fromDate']);
            $body['fromdate'] = $dateTime->format('U');
        }
    };

    if (isset($post_data['args']['toDate']) && (strlen($post_data['args']['toDate'])) > 0) {
        if (is_numeric($post_data['args']['toDate'])) {
            $body['todate'] = $post_data['args']['toDate'];
        } else {
            $dateTime = new DateTime($post_data['args']['toDate']);
            $body['todate'] = $dateTime->format('U');
        }
    };

    if (isset($post_data['args']['min']) && (strlen($post_data['args']['min'])) > 0) {
        $body['min'] = $post_data['args']['min'];
    };

    if (isset($post_data['args']['max']) && (strlen($post_data['args']['max'])) > 0) {
        $body['max'] = $post_data['args']['max'];
    };

    $body['site'] = 'stackoverflow';
    //requesting remote API
    $client = new GuzzleHttp\Client();

    try {

        $resp = $client->request('GET', $query_str, [
            'query' => $body
        ]);

        $responseBody = $resp->getBody()->getContents();
        $rawBody = json_decode($resp->getBody());

        $all_data[] = $rawBody;

        if ($response->getStatusCode() == '200') {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($all_data) ? $all_data : json_decode($all_data);
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody();
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    } catch (GuzzleHttp\Exception\BadResponseException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    }


    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});