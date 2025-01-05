<?php
namespace Keneil\PhpHttpServer;
trait Log{
    public static function Info($message){
        $file=fopen("./error/Error.txt",'a');
     fwrite( $file,"INFO".date("m-d-Y").$message.'/n');
     fclose($file);
    }

    public static function debug($message){
    $file=fopen("./error/Error.txt",'a');
     fwrite( $file,"DEBUG ".date("m-d-Y").$message.'/n');
     fclose($file);
    }
}