<?php

use Http\App\DefaultController;

$routeCollector->addRoute('GET', '/', $routing->call(DefaultController::class));
$routeCollector->addRoute('GET', '/hello[/{name}]', $routing->call(DefaultController::class, 'index'));