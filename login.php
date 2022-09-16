<?php 
$usuario=$_POST ["user"];
$contrasenia= $_POST["pass"];

$controluser="eduardo";
$controlpass="juancruz";

if($usuario==$controluser&&$contrasenia==$controlpass){
    header("location:https://www.youtube.com/watch?v=Q-yi3s1xZ9k");
}
else{
    header("location: errorlogin.html");
}
?>