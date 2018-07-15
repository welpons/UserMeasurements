<?php

namespace App\Consumer;

use PhpAmqpLib\Message\AMQPMessage;

/**
 * Description of OutputConsumer
 *
 * @author felix
 */
class OutputConsumer implements ConsumerInterface
{
    //put your code here
    public function execute(AMQPMessage $message) 
    {
        echo ' [x] Received ', $message->body, "\n";
    }

}

