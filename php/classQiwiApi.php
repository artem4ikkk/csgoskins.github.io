<?php 
class QiwiApi {
    private $_token;
    private $_url;
 
    function __construct($token) {
        $this->_token = $token;
        $this->_url   = 'https://edge.qiwi.com/';
    }

    private function sendRequest($method, array $content = [], $post = false) {
        $ch = curl_init();
        if ($post) {
            curl_setopt($ch, CURLOPT_URL, $this->_url . $method);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($content));
        } else {
            curl_setopt($ch, CURLOPT_URL, $this->_url . $method . '/?' . http_build_query($content));
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->_token
        ]); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result, 1);
    }
	
    public function getBalance() {
        return $this->sendRequest('funding-sources/v1/accounts/current')['accounts'];
    }

    public function sendMoneyToQiwi(Array $params = []) {
        return $this->sendRequest('sinap/terms/99/payments', $params, 1);
    }
}