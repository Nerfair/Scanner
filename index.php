<?php

$container = require __DIR__ . '/app/bootstrap.php';

$container->get('console')->run();