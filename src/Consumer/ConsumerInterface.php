<?php

namespace App\Consumer;

/**
 *
 * @author felix
 */
use PhpAmqpLib\Message\AMQPMessage;

/**
 *
 * @author felix
 */
interface ConsumerInterface 
{
    public function execute(AMQPMessage $message);
}
