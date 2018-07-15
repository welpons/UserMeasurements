<?php

require __DIR__.'/../vendor/autoload.php';

use App\UserMeasurements\Infrastructure\Messaging\RabbitMQ\Queue;

$receiver = new Queue('guest', 'guest');
$receiver->listen('hello');

