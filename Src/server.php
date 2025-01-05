<?php 
Class Server{ 
 protected $port=null;
  protected $host=null;
protected  $socket=null;
    public function __construct(){
 $this->createSocket();
    }

  public function createSocket(){
   $this->socket=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
   if($this->socket){
   $error= socket_last_error();
    throw new SocketCreationException(socket_strerror($error));
   }
  }

  public function bind($port){
   
  }
  
}