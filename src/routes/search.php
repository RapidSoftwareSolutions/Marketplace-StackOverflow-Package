<?php
$app->post('/api/StackOverflow/search', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['searchString']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    //forming request to vendor API
    $query_str = $settings['api_url'] . '/search/excerpts';
    $body = array();
    $body['q'] = $post_data['args']['searchString'];

    if (isset($post_data['args']['sortingOrder']) && (strlen($post_data['args']['sortingOrder'])) > 0) {
        $body['order'] = $post_data['args']['sortingOrder'];
    } else {
        $body['order'] = 'desc';
    }

    if (isset($post_data['args']['sortBy']) && (strlen($post_data['args']['sortBy'])) > 0) {
        $body['sort'] = $post_data['args']['sortBy'];
    } else {
        $body['sort'] = 'activity';
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

    if (isset($post_data['args']['accepted']) && (strlen($post_data['args']['accepted'])) > 0) {
        $body['accepted'] = $post_data['args']['accepted'];
    };
    if (isset($post_data['args']['minAnswers']) && (strlen($post_data['args']['minAnswers'])) > 0) {
        $body['answers'] = $post_data['args']['minAnswers'];
    };
    if (isset($post_data['args']['questionBody']) && (strlen($post_data['args']['questionBody'])) > 0) {
        $body['body'] = $post_data['args']['questionBody'];
    };
    if (isset($post_data['args']['closed']) && (strlen($post_data['args']['closed'])) > 0) {
        $body['closed'] = $post_data['args']['closed'];
    };
    if (isset($post_data['args']['migrated']) && (strlen($post_data['args']['migrated'])) > 0) {
        $body['migrated'] = $post_data['args']['migrated'];
    };
    if (isset($post_data['args']['notice']) && (strlen($post_data['args']['notice'])) > 0) {
        $body['notice'] = $post_data['args']['notice'];
    };
    if (isset($post_data['args']['exceptTags']) && (strlen($post_data['args']['exceptTags'])) > 0) {
        $body['nottagged'] = implode(';', $post_data['args']['exceptTags']);
    };
    if (isset($post_data['args']['withTags']) && (strlen($post_data['args']['withTags'])) > 0) {
        $body['tagged'] = implode(';', $post_data['args']['withTags']);
    };
    if (isset($post_data['args']['questionTitle']) && (strlen($post_data['args']['questionTitle'])) > 0) {
        $body['title'] = $post_data['args']['questionTitle'];
    };
    if (isset($post_data['args']['questionerId']) && (strlen($post_data['args']['questionerId'])) > 0) {
        $body['user'] = $post_data['args']['questionerId'];
    };
    if (isset($post_data['args']['withUrl']) && (strlen($post_data['args']['withUrl'])) > 0) {
        $body['url'] = $post_data['args']['withUrl'];
    };
    if (isset($post_data['args']['minViews']) && (strlen($post_data['args']['minViews'])) > 0) {
        $body['views'] = $post_data['args']['minViews'];
    };
    if (isset($post_data['args']['wiki']) && (strlen($post_data['args']['wiki'])) > 0) {
        $body['wiki'] = $post_data['args']['wiki'];
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