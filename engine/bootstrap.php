<?php

use Engine\Core\Router;
use Engine\Helpers\Session;

try {

    require __DIR__ . '/../vendor/autoload.php';

    $session = new Session();
    $session->StartSession();

    $router = Router::getInstance();


    $routs = require ROOT_DIR . '/app/config/route.php';


    $router->add($routs);

    $handler = $router->dispatch();

    if ($handler) {
        // Execute handler
        $router->execute($handler, $router->vars);
    } else {
        // Show not found page
        http_response_code(404);
        echo '404 Not found';
    }


} catch (\Exteption $e) {
    echo $e->getMessage();
}