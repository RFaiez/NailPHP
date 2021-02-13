<?php

use rfaiez\framework_core\Service\Routing;

$routing = $container->get(Routing::class);

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $routeCollector) use ($routing){
    require 'RouteDefinitions.php';
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        throw new Exception("Route not found", 404);
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        throw new Exception("Method not allowed", 405);
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        call_user_func_array(array(new $handler[0], $handler[1]), $vars);
        break;
}