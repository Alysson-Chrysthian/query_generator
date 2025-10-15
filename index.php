<?php

require_once(__DIR__ . '/vendor/autoload.php');

use Alyssoncpc\QueryGenerator\Domain\Router;

require_once(__DIR__ . '/app/Domain/web.php');

try {
    Router::checkUri();
} catch (Exception $exception) {
    http_response_code($exception->getCode());
}
