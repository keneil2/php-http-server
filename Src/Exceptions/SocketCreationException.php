<?php 
namespace Keneil\PhpHttpServer\Exceptions;
use Keneil\PhpHttpServer\Log;
class SocketCreationException extends Exception{
    use Log;
 public function __construct($message){
    parent::__construct($message);
    $this->debug($message);
 }
}