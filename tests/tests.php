<?php

try {
    $exception = new \eryshkov\lib\Errors();
    $exception->add(new Exception('first'));
    $exception->add(new Exception('second'));
    $exception->add(new Exception('third'));
    if (!$exception->isEmpty()) {
        throw $exception;
    }
} catch (\eryshkov\lib\Errors $e) {
    foreach ($e->getAll() as $exception) {
        echo $exception->getMessage();
    }
}
