

<?php
header("Content-type:text/html;charset=utf-8");
/**
$client = new SoapClient("http://10.109.253.136/magento/index.php/api/soap/?wsdl",array('trace' => true));

$session = $client->login('wangqi', 'wangqi');
$result = $client->call($session, 'customer.create', array(array('email' => 'mail@example.org', 'firstname' => 'Dough', 'lastname' => 'Deeks', 'password' => 'password')));


$result = $client->call($session, 'somestuff.method');
$result = $client->call($session, 'somestuff.method', 'arg1');
$result = $client->call($session, 'somestuff.method', array('arg1', 'arg2', 'arg3'));
$result = $client->multiCall($session, array(
     array('somestuff.method'),
     array('somestuff.method', 'arg1'),
     array('somestuff.method', array('arg1', 'arg2'))
));


// If you don't need the session anymore
$client->endSession($session);
*/
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);
$client = new SoapClient("http://10.108.167.206:9765/services/GetWeatherProcessService?wsdl",array('trace' => true));


$result = $client->weatherOperation(array('ip'=>'202.108.22.5'));


var_dump($result);

