<?php 
namespace Keneil\PhpHttpServer\Exceptions;
use Keneil\PhpHttpServer\Log;
class SocketListeningException extends \Exception{
    public function __construct($message){
        parent::__construct($message);
       Log::debug($message);
     }
}