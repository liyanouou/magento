<?php
$api_url_v1 = "http://10.109.253.136/magento/index.php/api/soap/?wsdl";
$username = 'Yue';
$password = '123456';
//���� SOAP
$client = new SoapClient($api_url_v1);
//��ȡ������ Session ID
$session_id = $client->login($username, $password);
//���� API �еķ���
$result = $client->call($session_id, 'cataloginventory_stock_item.list', '911');
var_dump($result);