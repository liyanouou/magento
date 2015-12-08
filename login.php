<?php
$api_url_v1 = "http://10.109.253.136/magento/index.php/api/soap/?wsdl";
$username = 'Yue';
$password = '123456';
//连接 SOAP
$client = new SoapClient($api_url_v1);
//获取登入后的 Session ID
$session_id = $client->login($username, $password);
//调用 API 中的方法
var_dump($session_id);
 
