<?php 
namespace DB;
require_once("config.php");
use PDO;

class Connection{
    private static $connect;

    public static function getConnection(){
        if(self::$connect == null){
            self::$connect = new PDO("mysql:host=" . MYSQL_HOST . "; dbname=" . MYSQL_DB . "; charset=utf8;", MYSQL_USER, MYSQL_PASSWORD);
            self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$connect;
    }
}