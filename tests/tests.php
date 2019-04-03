<?php

try {
    $exception = new \Eryshkov\MultiException\Errors();
    $exception->add(new Exception('first'));
    $exception->add(new Exception('second'));
    $exception->add(new Exception('third'));
    if (!$exception->isEmpty()) {
        throw $exception;
    }
} catch (\Eryshkov\MultiException\Errors $e) {
    foreach ($e->getAll() as $exception) {
        echo $exception->getMessage();
    }
}
