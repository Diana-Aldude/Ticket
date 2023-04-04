
        <?php
                        
                include '../config/config.php';

            //se selecciona el nombre contacto y idcontacto de acuerdo al id empresas

         if(isset($idempresas)){
            $sql_nombre = "SELECT CONT.NOMBRE, CONT.ID_CONTACTOS, CONT.NUMERO, CONT.EMAIL FROM CONTACTOS CONT INNER JOIN EMPRESAS E ON CONT.ID_EMPRESAS=E.ID_EMPRESAS WHERE E.ID_EMPRESAS=$idempresas";
            $sql_nn= "select CONT.NUMERO , CONT.EMAIL from contactos CONT WHERE CONT.ID_CONTACTOS=$idempresas";
            $resultado_nombre = mysqli_query($con, $sql_nombre);
            
            $resultado_nn = mysqli_query($con, $sql_nn);
            $rowcount_sql_nombre=mysqli_num_rows($resultado_nombre);
            $rowcount_sql_nn=mysqli_num_rows($resultado_nn);
          
            
            ?>
            
               

             <div class="form-row">
             <div class="col-md-6 mb-3">
             <label for="rz"><strong>NOMBRE:</strong></label>
              
                    <select name="opcion" type="text" class="form-control" id="" class="custom-select">
                
                  </div>
                   
                 
                     
               <!-- me imprime un nombre  y los que haya para esa empresa -->     
               <option value="opcion1" name="nuevo" id="nuevo" selected>NUEVO</option>

               <!-- Con este while me cargan los nombres de contacto de la base de datos-->
                    <?php

                    $n=0; while($row_nombre = mysqli_fetch_array($resultado_nombre)){
                        $n++;          
                    ?>
                    <option value="opcion2" selected><?php echo $row_nombre["NOMBRE"];?>
                     
                     
                    <?php
                     }
                    
                    

                    }
                   
                    
                    ?></option>
                     </select>
                   
                        
                         </div>
                      
                         <?php   
                     if ($_POST['opcion'] == 'opcion2') { ?>
                        <label for="campoTexto">Ingresa un valor:</label>
                       <?php
                            $sql_co= "select * from contactos";
                            $resultado_co = mysqli_query($con, $sql_co);
                            $i=0; while($row_co = mysqli_fetch_array($resultado_co)){ $i++;
                            
                                if(isset($row_co['ID_CONTACTOS'])){ 
                                $id_co = $row_co['ID_CONTACTOS'];
                                $nombre_co= $row_co['NOMBRE'];
                                $email_co= $row_co['EMAIL'];
                                $numero_co= $row_co['NUMERO'];
                                    
                                
                                    ?>
                                    <div class="col-md-6 mb-3">
                                    <label for="ncontacto"><strong>NUMEROS DEL CONTACTO:</strong></label>
                                    <input name="ncontacto" type="text" class="form-control" id="ncontacto" onkeyup="mostrar2(this.value)" placeholder="" value="<?php echo $numero_co;?>" autocomplete="off">
                                </div>
                                
                                
                                <div class="col-md-6 mb-3">
                                <label for="email"><strong>EMAIL:</strong></label>
                                <input name="email" type="text" class="form-control" id="email" onkeyup="mostrar3(this.value)" placeholder="" value="<?php echo $email_co;?>" autocomplete="off">
                                </div>
                                <?php
                                    
                                    
                            }
                            
                        }
                        }?> 
                   

                         <!-- Crea el boton nuevo y imprime campos de email y numero vacios  -->
                            
                        
                            <!-- con el id contacto selecccionado imprime su email y numero de la db -->
                                
               