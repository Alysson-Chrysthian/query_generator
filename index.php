<?php

require_once('./vendor/autoload.php');
require_once('./app/Domain/Router.php');
require_once('./app/Domain/web.php');

use Alyssoncpc\QueryGenerator\Domain\Router;

try {
    Router::checkUri();
} catch (Exception $exception) {
    http_response_code($exception->getCode());
}
