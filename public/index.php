<?php


require_once '../vendor/autoload.php';
require_once 'bootstrap.php';

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions(__DIR__."/../config/DependencyDefinitions.php");
$container = $builder->build();
require_once '../router/Router.php';



