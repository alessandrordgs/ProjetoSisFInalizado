<?php 
  class Database
  {
      protected static $db;
      private function __construct()
      {
          $db_host = "localhost";
          $db_nome = "projetoSiS3";
  
          $db_usuario = "root";  
          $db_senha   = "123456789";
          $db_driver  = "mysql";  
  
    
  
          try {
              self::$db = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
              self::$db->exec('SET NAMES utf8');
          } catch (PDOException $e) {
        
              die();
  
          }
      }
  
      public static function conexao()
      {
          if (!self::$db) {
              new Database();
          }
          return self::$db;
      }
  };
    


?>