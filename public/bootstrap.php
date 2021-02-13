<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__."/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/..");
$dotenv->load();

require_once $_ENV['ENV'].".php";


// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/../src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
// $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
// $config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters

$connectionParams = array(
    'dbname' => $_ENV['DB_NAME'],
    'user' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWORD'],
    'host' => $_ENV['DB_HOST'],
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);


// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);




// $evm = new EventManager();
// $order=new OrderEvent($evm);

// echo $evm->dispatchEvent(Events::prePersist);
// echo $evm->dispatchEvent(OrderEvent::PRE_UPDATE);


AnnotationRegistry::registerLoader('class_exists');

// $reflectionClass = new ReflectionClass(User::class);
// $property = $reflectionClass->getProperty('email');

// $reader = new AnnotationReader();
// $x=$reader->getPropertyAnnotations($property);
// $x=$reader->getPropertyAnnotations($reflectionClass, Validate::class);
// var_dump($x);
// $myAnnotation = $reader->getPropertyAnnotation($property, Validate::class);

// echo $myAnnotation->props;


