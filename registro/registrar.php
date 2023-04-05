<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="#" />
  <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../estilos.css">
  <title>Tickets</title>
</head>

<style>
  tam{
    font-size: 30px;
  }
  

</style>

<body>

  <!-- <header style="height: 70px">
  </header> -->
    <div style="height: 30px;"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card shadow-lg p-3 mb-5 bg-white">
          
            <div class="card-header">GENERADOR DE CORREO
            
            <button type="submit" name="regresar" class="btn btn-ligth float-right" ><a href="../BUSCADOR/INDEX.PHP">Regresar</a> </button>
               
          </div>
            <div class="card-body">

           
           


              <form method="POST" id="myForm" action="" class="">
              <?php 

                include '../config/config.php';
                 include 'controlador_registrar.php';
                 include 'insertardatos.php';
                
                
      
                 
                ?>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="sn"><strong>SN:</strong></label>
                    <input name="sn" type="text" class="form-control" id="sn" onkeyup="mostrar(this.value)" placeholder="" value=" " autocomplete="off">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="rz"><strong>RAZON SOCIAL:</strong></label>
                    <input name="rz" type="text" class="form-control" id="rz" placeholder="" value="" autocomplete="off">
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="ruc"><strong>RUC:</strong></label>
                    <input name="ruc" type="text" class="form-control" id="ruc" placeholder="" value="" autocomplete="off">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="email"><strong>EMAIL:</strong></label>
                    <input name="email" type="text" class="form-control" id="email" onkeyup="mostrar3(this.value)" placeholder="" value="" autocomplete="off">
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="contacto"><strong>NOMBRE DEL CONTACTO:</strong></label>
                    <input name="contacto" type="text" class="form-control" id="contacto" onkeyup="mostrar1(this.value)" placeholder="" value="" autocomplete="off">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="ncontacto"><strong>NUMEROS DEL CONTACTO:</strong></label>
                    <input name="ncontacto" type="text" class="form-control" id="ncontacto" onkeyup="mostrar2(this.value)" placeholder="" value="" autocomplete="off">
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="disponibilidad"><strong>DISPONIBILIDAD:</strong></label>
                    <input name="disponibilidad" type="text" class="form-control" id="disponibilidad" onkeyup="mostrar4(this.value)" placeholder="" value="" autocomplete="off">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="cid"><strong>CID (Circuito):</strong></label>
                    <input name="cid" type="text" class="form-control" id="cid" onkeyup="mostrar5(this.value)" placeholder="" value="" autocomplete="off">
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="ticket"><strong>TICKET </strong></label>
                    <input name="ticket" type="text" class="form-control" id="ticket" placeholder="" value="" autocomplete="off">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="tcliente"><strong>TIPO DE CLIENTE:</strong></label>
                    <select name="tcliente" type="text" class="form-control" id="tcliente" class="custom-select">
                      <option value="">Seleccione</option>
                      <option value="REGULAR">Regular</option>
                      <option value="GOBIERNO">Gobierno</option>
                    </select>
                  </div>

                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="cc"><strong>CC:</strong></label>
                    <select name="cc" type="text" class="form-control" id="cc" class="custom-select">
                      <option value="">Seleccione</option>
                      <option value="solicitudes_postventa_fija_corporativa@claro.com.pe; soporte_servicios_gestionados_fijos@claro.com.pe">Regular</option>
                      <option value="solicitudes_postventa_fija_corporativa@claro.com.pe; soporte_servicios_gestionados_fijos@claro.com.pe; atenciones_solicitudes_sva_gobierno@claro.com.pe">Gobierno</option>
                      <option value="solicitudes_postventa_fija_corporativa@claro.com.pe; SoporteConfiguracionesSSGG@claro.com.pe">Regular (BOCS)</option>
                      <option value="solicitudes_postventa_fija_corporativa@claro.com.pe; SoporteConfiguracionesSSGG@claro.com.pe">Gobierno (BOCS)</option>
                      <option value="solicitudes_postventa_fija_corporativa@claro.com.pe">PENDIENTE</option>
                      <option value="solicitudes_postventa_fija_corporativa@claro.com.pe">CLIENTE</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="proveedor"><strong>PROVEEDOR:</strong></label>
                    <select name="proveedor" type="text" class="form-control" id="proveedor" class="custom-select">
                      <option value="">Seleccione</option>
                      <option value="spntboseguridad@claro.com.pe">BOCS</option>
                      <option value="ciberseguridad_plataformas@claro.com.pe">Ciberseguridad_Plataformas</option>
                      <option value="soporte@connect.pe">Connect</option>
                      <option value="sg@desysweb.com.pe; nocmonitoreo@claro.com.pe">Desysweb</option>
                      <option value="soporte@connect.pe">Dalisa</option>
                      <option value="soporte@connect.pe">NetSecure</option>
                      <option value="soportesoc@thinknetworks.pe; MesadeServicios@thinknetworks.pe">ThinkNetworks</option>
                      <option value="requerimientos@bestsolperu.com">Betsol</option>
                      <option value="soporteperu@mv-tel.com">MvTel</option>
                      <option value="rgarcia@siteperu.com.pe; mcriollo@siteperu.com.pe">Site_Peru</option>
                      <option value="servicedesk@electrodata.com.pe">Electrodata</option>
                      <option value="soporte@ebdperu.com; coordinadorma@ebdperu.com">EBD_Peru</option>
                      <option value="soporte@vmwaresis.com.pe">vmWaresis</option>
                      <option value="noc.americas@speedcast.com">Speedcast/Newcom</option>
                      <option value="gestiondeservicios@qualitconsulting.com.pe">Qualit</option>
                    </select>
                  </div>
                </div>
                
                <input type="submit"  name="guardar" value="Guardar"  class="btn btn-primary btn-lg btn-block">
                
                


                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="detalle"><strong>DETALLES:</strong></label>
                    <textarea class="form-control" id="detalle" name="detalle" rows="10" type="text" class="form-control" onkeyup="mostrar6(this.value)" placeholder=""></textarea>
                  </div>
                </div>


                <button id="emailbutton" class="btn btn-outline-danger" type="submit" value="Proveedor" onclick="SendMail()">Proveedor</button>
                <!-- <button id="enviarproveedor" class="btn btn-outline-danger" type="submit" value="Proveedor">Proveedor</button> -->
                <button id="enviarpendiente" class="btn btn-outline-danger" type="submit" value="Pendiente" onclick="Sendpendiente()">Pendiente</button>
                <button id="enviarcliente" class="btn btn-outline-danger" type="submit" value="Cliente" onclick="Sendcliente()">Cliente</button><br>

                
                
                <!-- <button type="submit" name="event-registration-submit" class="btn btn-primary">Registrar</button> -->
              </form><br>
              

              <div>
                  <div>
                    <label><strong>COPIAR Y PEGAR EN EL SGA:</strong></label>
                   
                     
                    <div>SN:</div><div id="resultado"></div>
                    <div>Nombre del contacto:</div><div id="resultado1"></div>
                    <div>Numero del contacto:</div><div id="resultado2"></div>
                    <div>Correo:</div><div id="resultado3"></div>
                    <div>Disponibilidad:</div><div id="resultado4"></div>
                    <div>CID:</div><div id="resultado5"></div>
                    <div>Detalles:</div><div id="resultado6"></div>
                  </div>
                </div>
            

              <!-- <div>
                <p><a href="index.php" class="pe-none" tabindex="-1" aria-disabled="true">HOME</p>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.min.js"></script>
    <!-- <script src="codigo.js"></script> -->
    <script src="../main.js"></script>
    <script src="../generador.js"></script>

    <script>
      function recibir(){
        var sn = document.getElementById("sn").value;
        var contacto = document.getElementById("contacto").value;
        var ncontacto = document.getElementById("ncontacto").value;
        var email = document.getElementById("email").value;
        var disponibilidad = document.getElementById("disponibilidad").value;
        var cid = document.getElementById("cid").value;
        var detalle = document.getElementById("detalle").value;
        document.write("SN: "+sn+ "<br/>Nombre del contacto: "+contacto+ "<br/>Numero del contacto: "+ncontacto+ "<br/>Correo: "+email+ "<br/>Disponibilidad: "+disponibilidad+ "<br/>CID: "+cid+ "<br/>Detalles: "+detalle);

      }
    </script>

</body>

</html>