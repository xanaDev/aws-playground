<?php

require __DIR__ . '/../vendor/autoload.php';

// load env variables into current context
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

