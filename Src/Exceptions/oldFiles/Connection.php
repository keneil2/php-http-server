<?php 

class Connection{
    public function establishConnection($socket){
        $ip_address=gethostbyname("www.google.com");
       $status= socket_connect($socket,$ip_address,80);
         echo "connected to google with address: ".$ip_address;
        if(!$status){
       $logs_file=  fopen("logs.txt",'a');
       fwrite($logs_file,"Connection falied");
       $logs_file=  fopen("./error/Error.txt",'a');
       $errorCode= socket_last_error();
       $error_file=fopen("./error/Error.txt",'a');
       fwrite( $error_file,socket_strerror($errorCode));
        }
    }

   
    
    public function sendData($socket){
        $request = "GET / HTTP/1.1\r\n";
        $request .= "Host: www.google.com\r\n";
        $request .= "Connection: close\r\n\r\n";
    if(!socket_send($socket,$request,strlen($request),0)){
      $errorCode=socket_last_error();
      $error_file=fopen("./error/Error.txt",'a');
      fwrite( $error_file,socket_strerror($errorCode));
    };
    echo "Message sent successfully";
    }


   public function Bind($sock){
      socket_bind($sock,"127.0.0.1",8000);
   }
    public function recivicedData($sock){
          
          socket_recv( $sock , $data , 2045 , MSG_WAITALL );
        if($data === FALSE){
            $errorCode=socket_last_error();
            $error_file=fopen("./error/Error.txt",'a');
            fwrite( $error_file,socket_strerror($errorCode));
        }

        // logging message to log file and echoing message
        $log_files=fopen("./log.txt",'a');
        fwrite($log_files,"data: ". $data);
        echo "data: ". $data;
        
    }
    public function close_socket($sock){
        socket_close($sock);
    }
}


