<?php
    class Database{

       private static $dbHost = "127.0.0.1";
       private static $dbName = "u709452983_burgercode";
       private static $dbUser = "u709452983_burger";
       private static $dbUserPassword = "Burger29!";
       private static $connection = null;
       
       public static function connect(){
             try{
                    self::$connection = new PDO ("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword);
                }
            catch(PDOException $e){
                    die ($e->getMessage());
                }
            return self::$connection;
        }

        static function disconnect(){
            self::$connection = null;
        }
    }
   
   Database :: connect();

?>