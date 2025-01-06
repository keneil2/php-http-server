<?php 

use Keneil\PhpHttpServer\Exceptions\SocketCreationException;
use Keneil\PhpHttpServer\Exceptions\SocketListeningException;
Class Server{ 
 protected $port=null;
  protected $host=null;
protected  $socket=null;
    public function __construct($port=80, $host='127.0.0.1'){
       $this->port=$port;

       $this->host=$host;

 $this->createSocket();
    }

  public function createSocket(){
   $this->socket=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
   if($this->socket){
   $error= socket_last_error($this->socket);
    throw new SocketCreationException(socket_strerror($error));
   }
  }

  public function bind(){
   socket_bind($this->socket,$this->host,$this->port);
  }



  public function listen(){
    
     while(true){
        if(socket_listen($this->socket)){
     $error=socket_last_error($this->socket);
     throw new SocketListeningException(socket_strerror($error));
    }
       if(!$client = socket_accept($this->socket)){
         socket_close($client);
         continue;
       }
         
    }
  }


  public function acceptConnection(){
   
   

  }

  
}