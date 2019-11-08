<?php

include "conection.php";
session_start();

   $user=$_POST['username'];
   $passwd=$_POST['password'];


if(isset($_POST['enter'])){
    if (isset($_POST["checkbox"])){
    setcookie("username",$_POST["username"],time()+365*24*60*60,"/",'localhost',0);
    }

$sql=$conexion->prepare("SELECT username,password,type FROM users WHERE username=:username AND password=:password");
$sql->bindParam(':username', $user);
$sql->bindParam(':password', $passwd);


$result=$sql->execute();
   if($sql->rowCount()==1){
       $arr=$sql->fetchAll();
      //hemos econtrado el usuario
      $_SESSION["type"]=$arr[0]["type"];
      $_SESSION["username"]=$arr[0]["username"];
   	  header('location:sesion.php');

   }

}elseif (isset($_POST['registro'])) {

$sql=$conexion->prepare("SELECT username FROM users WHERE username=:username");
$sql->bindParam(':username', $_POST['username']);
$result=$sql->execute();
if($sql->rowCount()==1){
    header('location:index.php');
}else{
    $type=$_POST["user-type"];
    $sql=$conexion->prepare("INSERT INTO users (username, password, type) VALUES (:username,:password,:type)");
$sql->bindParam(':username',$user);
$sql->bindParam(':password',$passwd);
$sql->bindParam(':type',$type);

$result=$sql->execute();
if($result){
   echo "registro Completado vuelva a atras y logese";
}else{

    echo "Fallo en el registro";
}
}
}
?>
