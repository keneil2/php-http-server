<?php
class Soket{
    public const PORT=80;
    public function socketCreation(){
    $sock=socket_create(AF_INET,SOCK_STREAM,SOL_TCP); // creating a socket here

    if(!$sock){
   $errorCode= socket_last_error();
   $error_file=fopen("./error/Error.txt",'a');
    fwrite( $error_file,socket_strerror($errorCode));
    Throw new Exception("Check error file for discrptive message");
    }
    return  $sock;
    }

}