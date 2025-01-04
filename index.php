<?php 
spl_autoload_register(function($class){
if(!class_exists($class)){
 require($class . ".php");
}
});

$socket=new Soket;

$connection = new Connection;

$socket_addr=$socket->socketCreation();

$connection->establishConnection($socket_addr);

$connection->sendData($socket_addr);

$connection->recivicedData($socket_addr);
$connection->close_socket($socket_addr);