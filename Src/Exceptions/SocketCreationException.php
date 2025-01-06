<?php 
namespace Keneil\PhpHttpServer\Exceptions;
use Keneil\PhpHttpServer\Log;
class SocketCreationException extends \Exception{
    
 public function __construct($message){
    parent::__construct($message);
    Log::debug($message);
 }
}