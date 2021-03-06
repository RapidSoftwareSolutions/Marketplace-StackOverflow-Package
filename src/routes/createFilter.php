<?php
$app->post('/api/StackOverflow/createFilter', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'clientKey']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    //forming request to vendor API
    $query_str = $settings['api_url'] . 'filters/create';
    $body = array();

    $body['access_token'] = $post_data['args']['accessToken'];
    $body['key'] = $post_data['args']['clientKey'];

    if (isset($post_data['args']['includeList']) && (strlen($post_data['args']['includeList'])) > 0){
        $body['include'] = $post_data['args']['includeList'];
    };
    if (isset($post_data['args']['excludeList']) && (strlen($post_data['args']['excludeList'])) > 0){
        $body['exclude'] = $post_data['args']['excludeList'];
    };
    if (isset($post_data['args']['baseFilter']) && (strlen($post_data['args']['baseFilter'])) > 0){
        $body['base'] = $post_data['args']['baseFilter'];
    };
    if (isset($post_data['args']['unsafe']) && (strlen($post_data['args']['unsafe'])) > 0){
        $body['unsafe'] = $post_data['args']['unsafe'];
    } else {
        $body['unsafe'] = 'false';
    }




    //requesting remote API
    $client = new GuzzleHttp\Client();

    try {

        $resp = $client->request('POST', $query_str, [
            'form_params' => $body
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