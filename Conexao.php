<?php

class Conexao{
    private static $instance;

    public static function getConn(){

        if(!isset(self::$instance)):
            self::$instance = new PDO
            (
                "pgsql:host=localhost;dbname=postgres", 
                "postgres", 
                "admin", 
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        else:
        
        endif;
    }
}

?>