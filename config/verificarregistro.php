<?php

include config/config.php

$verificar_ruc= mysqli_query($con, "SELECT * from empresas where ruc='$ruc'");

if(mysqli_num_rows($verificar_rucl)>0){
 echo '
 
 <script>
 alert("Este ruc ya esta registrado, añade cid  y contactos nuevos");

 </script>
  
 ';
exit();

}

$verificar_cid= mysqli_query($con, "SELECT * from cid where cid='$cid'");

if(mysqli_num_rows($verificar_cid)>0){
 echo '
 
 <script>
 alert("Este cid  ya esta registrado, añade un nuevo contacto");

 </script>
  
 ';
 
 $n=0; while($row = mysqli_fetch_array($verificar_cid)){ $n++;
       
 $cid_ingresado = $row['cid'];
 ?>
 <div class="col-md-6 mb-3">
 <label for="cid"><strong>CID (Circuito):</strong></label>
 <input name="cid" type="text" class="form-control" id="cid" onkeyup="mostrar5(this.value)" placeholder="" value="<?php echo $cid_ingresado; ?>" autocomplete="off">
</div>
</div>'

 



<?php
exit();



}

}

?>












?>