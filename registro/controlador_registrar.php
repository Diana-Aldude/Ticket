<?php
 include '../config/config.php';

if(!empty($_POST["guardar"])){
if(empty($_POST["cid"]) or empty($_POST["rz"]) or empty($_POST["ruc"])){

    echo'<div class="alert alert-danger" role="alert">UNO DE LOS CAMPOS ESTA VACIO</div>';

}

else
{
    $cid=$_POST["cid"];
    $rz=$_POST["rz"];
    $ruc=$_POST["ruc"];

    $nombre=$_POST["contacto"];
    $numero=$_POST["ncontacto"];
    $email=$_POST["email"];


    $sql=$con->query("insert into empresas(RUC,RAZONSOCIAL)values('$rz','$ruc')");
    $id_empresas=mysqli_insert_id($con);
    if(isset($ruc)){
        
    }
  
    $sqlcid=$con->query("insert into circuitos(cid, id_empresas) VALUES('$cid', '$id_empresas')");
    $sqlcont=$con->query("insert into contactos(nombre, numero, email, id_empresas) VALUES( '$nombre','$numero','$email', '$id_empresas')");

    
    if ($sql==1 or $sqli==0){
        echo '<div class="alert alert-success" role="alert">USUARIO REGISTRADO CORRECTAMENTE </div>';

    }else {
        echo '<div class="alert alert-danger" role="alert"> ERROR AL REGISTRAR</div>';
    }




}

}
?>