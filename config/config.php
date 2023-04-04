<?php 
$Chost = "localhost";
$Cuser = "root";
$Cpass = "";
$db = "clientes";

$con =new mysqli($Chost,$Cuser,$Cpass,$db);


if($con->connect_errno) {
        die("ha ocurrido un error");
}


?>