<?php

require __DIR__.'/../vendor/autoload.php';

// Required to load the API key
(new \Dotenv\Dotenv(__DIR__.'/../', '.env.test'))->load();
