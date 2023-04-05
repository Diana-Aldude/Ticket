
        <?php
                        
                include '../config/config.php';

            //se selecciona el nombre contacto y idcontacto de acuerdo al id empresas

         if(isset($idempresas)){
            $sql_nombre = "SELECT CONT.NOMBRE, CONT.ID_CONTACTOS, CONT.NUMERO, CONT.EMAIL FROM CONTACTOS CONT INNER JOIN EMPRESAS E ON CONT.ID_EMPRESAS=E.ID_EMPRESAS WHERE E.ID_EMPRESAS=$idempresas";
            $sql_nn= "select CONT.NUMERO , CONT.EMAIL from contactos CONT WHERE CONT.ID_CONTACTOS=$idempresas";
            $resultado_nombre = mysqli_query($con, $sql_nombre);  
            ?>
             <div class="form-row">
             <div class="col-md-6 mb-3">
             <label for="rz"><strong>NOMBRE:</strong></label>
              
                    <select name="opcion" type="text" class="form-control" id="contacts-select" class="custom-select">
                
                  </div>
                   
                 
                     
               <!-- me imprime un nombre  y los que haya para esa empresa -->     
               <option value="opcion1" name="nuevo" id="nuevo">NUEVO</option>

               <!-- Con este while me cargan los nombres de contacto de la base de datos-->
                    <?php

                    $n=0; 
                    while($row_contact = mysqli_fetch_array($resultado_nombre)){
                        $n++; 
                 
                        $nombre=$row_contact["NOMBRE"];
                        $numero=$row_contact["NUMERO"];
                        $email=$row_contact["EMAIL"];
                    ?>
                    <option value="<?php echo $nombre.'|'.$numero.'|'.$email;?>" id="<?=$id_contact?>"><?php echo $nombre;?> 
                    </option>
                    <?php
                     }
                    }
                    ?>
                    
                    
                   
                     </select>
                    
                        
                         </div>
                      

                   

                         <!-- Crea el boton nuevo y imprime campos de email y numero vacios  -->
                            
                        
                            <!-- con el id contacto selecccionado imprime su email y numero de la db -->
                                
               