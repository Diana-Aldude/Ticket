

<?php

include '../config/config.php';

if(isset($_POST['guardar'])){

if(strlen($_POST['cid']) >=1 && 
 strlen($_POST['rz'] )>=1 &&
 strlen( $_POST['ruc']) >=1 &&
 strlen( $_POST['contacto'])>=1 &&
 strlen($_POST['email'])>=1 &&
 strlen($_POST['ncontacto'])>=1){



$rz=$_POST['rz'];
$ruc=$_POST['ruc'];



$insertar = "INSERT INTO empresas(id_empresas, ruc, razonsocial) VALUES ('','$ruc','$rz')";
/*$insertar = "INSERT INTO circuitos (id_circuitos, cid, id_empresas) VALUES('$id_circuitos', '$cid', '$id_empresas')";
$insertar = "INSERT INTO contactos (id_contactos, nombre, numero, email, id_empresas) VALUES('$id_contactos', '$nombre','$numero','$email', '$id_empresas')";

$cid=$_POST['cid'];
$rz=$_POST['rz'];
$ruc=$_POST['ruc'];
$nombre=$_POST['contacto']
$email=$_POST['email'];
$ncontacto=$_POST['ncontacto'];

echo $id_circuitos;
echo $id_empresas;
echo $id_contactos;
*/	


$resultado= mysqli_query($conexion, $insertar);

if(resultado){
    echo 'ingresaste datos correctos';
}else{
    echo 'porfavor complete los camppos';
}

}
}
?>