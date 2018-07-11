<?php

require 'vendor/autoload.php';

function ServiceHandler() {
    $data = new stdClass();
    $data->Output = "Hello World! this is a DEVOPS Practice Day2, Manager Approved";
    $data->Output = "This is Ravi Kumar Kasturi";
    return json_encode($data);
};

$app = new \Slim\App;

$app->get('/', 'ServiceHandler');
$app->post('/', 'ServiceHandler');

$app->run();
