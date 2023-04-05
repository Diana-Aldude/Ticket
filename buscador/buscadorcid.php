

<form method="POST" id="form-cid-search">
               

               <div class="form-row">
                 <div class="col-md-6 mb-3">
                   <label for="cid"><strong>INGRESA EL
                      CID (Circuito):</strong></label>
                   <!--
                   <input name="buscarcid" type="text" class="form-control" id="buscarcid" onkeyup="mostrar5(this.value)" placeholder="" value="" autocomplete="off">
                   <input type="submit" name="enviar" value="buscar">
                   -->

                   <!-- BOTON DE BUSCAR CIRCUITO  -->
                   <div class="input-group md-6 mb-3">
                   <input type="text" name="buscarcid" id="buscarcid" onkeyup="mostrar5(this.value)" class="form-control" placeholder="Buscar cid" aria-label="recipient's username" aria-describedby="basic-addon2">
                   <div class="input-group-append">
                     <button class="btn btn-outline-secondary"  id="cid-search" name="enviar" value="buscar" type="submit">Buscar</button>
                   </div>
               </div> </div> </div>

                   
                   <?php
                
include '../config/config.php';


   if(isset($_POST['enviar'])){
       $buscarcid = $_POST['buscarcid'];

      if($buscarcid>0){ 

       $sql = "SELECT E.RUC, E.RAZONSOCIAL, E.ID_EMPRESAS FROM EMPRESAS E INNER JOIN CIRCUITOS CI ON E.ID_EMPRESAS = CI.ID_EMPRESAS WHERE CI.CID LIKE '%$buscarcid%'";
       $resultado = mysqli_query($con, $sql);
       $n=0; 
       while($row = mysqli_fetch_array($resultado)){ $n++;
        $idempresas = $row['ID_EMPRESAS'];

        
        ?>
                   <div class="form-row">
                   <div class="col">
                   <label for="sn"><strong>SN:</strong></label>
                   <input name="sn" type="text" class="form-control" id="sn" onkeyup="mostrar(this.value)" placeholder="" value="" autocomplete="off">
                   </div>

                 
                 <div class="col-md-6 mb-3">
                   <label for="cid"><strong>CID (Circuito):</strong></label>
                   <input name="cid" type="text" class="form-control" id="cid" onkeyup="mostrar5(this.value)" placeholder=""
                    value="<?php echo $buscarcid; ?>" autocomplete="off">
                  </div>
                 
                 
                 
                 <div class="col-md-6 mb-3">
               
                   <label for="rz"><strong>RAZON SOCIAL:</strong></label>
                   <input name="rz" type="text" class="form-control" id="rz" placeholder="" value="<?php echo $row['RAZONSOCIAL']; ?>" autocomplete="off">
                 </div>
               
                 <div class="col-md-6 mb-3">
                   <label for="ruc"><strong>RUC:</strong></label>
                  
                   <input name="ruc" type="text" class="form-control" id="ruc" placeholder="" value=" <?php echo $row['RUC']; ?>" autocomplete="off">
                 </div>

                 
       </div>
       <?php
       }
      ?>

        <?php 
         include 'nombresdecont.php';

        }else{
        exit();}
    }else{
      exit();
    }

    
   

        ?>

       </form> 


           

           


