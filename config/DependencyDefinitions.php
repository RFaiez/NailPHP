<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Domain\User\Entity\User;
use Domain\User\Repository\UserRepository;

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/../src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

return [
    EntityManager::class => DI\factory([EntityManager::class, 'create'])
        ->parameter('connection', DI\get('db.params'))
        ->parameter('config', DI\get('doctrine.config')),
        'db.params' => [
            'driver'   => 'pdo_mysql',
            'user'     => $_ENV['DB_USERNAME'],
            'password' => $_ENV['DB_PASSWORD'],
            'dbname'   => $_ENV['DB_NAME'],
            'host'     => $_ENV['DB_HOST']
        ],
        'doctrine.config' => $config,
    UserRepository::class => function(DI\Container $container){
        return $container->get(EntityManager::class)->getRepository(User::class);
    }

];