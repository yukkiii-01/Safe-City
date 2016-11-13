<?php
class conexion {
   static function conectar(){
       $root='root';
       $password='root';
       $host='localhost';
       $dbname='safecity';
       $conexion=new PDO("mysql:host=$host;dbname=$dbname;",$root,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
   
       return $conexion;
   }
}