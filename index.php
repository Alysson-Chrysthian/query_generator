<?php

require_once(__DIR__ . '/vendor/autoload.php');

use Alyssoncpc\QueryGenerator\Domain\Router;

require_once(__DIR__ . '/app/Domain/web.php');

$errors = [];

try {
    $data = Router::checkUri();

    if (isset($data['errors']))
        $errors = $data['errors'];
} catch (Exception $exception) {
    http_response_code($exception->getCode());
}
