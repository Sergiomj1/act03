<?php

try{

$conexion= new PDO("mysql:host=localhost;dbname=llogersdb","root","linuxlinux");
}catch(PDOExeception $e){
print "!Error!".$e->getMessage(). "<br/>";
die();
}


?>
