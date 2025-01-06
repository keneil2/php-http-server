<?php
namespace Keneil\PhpHttpServer\Exceptions;
use Keneil\PhpHttpServer\Log;
 class SocketBindingException extends \Exception{
   
 public function __construct($message){
    parent::__construct($message);
    Log::debug($message);
 }
}
 