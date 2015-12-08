<?php
$proxy = new SoapClient('http://10.109.253.136/magento/index.php/api/v2_soap/?wsdl'); // TODO : change url
$sessionId = $proxy->login('Yue', '123456'); // TODO : change login and pwd if necessary

$result = $proxy->catalogCategoryInfo($sessionId, '5');
var_dump($result);

 
