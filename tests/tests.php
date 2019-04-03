<?php

try {
    $exception = new MultiException\Errors();
    $exception->add(new Exception('first'));
    $exception->add(new Exception('second'));
    $exception->add(new Exception('third'));
    if (!$exception->isEmpty()) {
        throw $exception;
    }
} catch (MultiException\Errors $e) {
    foreach ($e->getAll() as $exception) {
        echo $exception->getMessage();
    }
}
