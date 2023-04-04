function SendMail(){
    var sn = document.getElementById("sn").value;
    var rz = document.getElementById('rz').value;
    var ruc = document.getElementById('ruc').value;
    var email = document.getElementById('email').value;
    var contacto = document.getElementById('contacto').value;
    var ncontacto = document.getElementById('ncontacto').value;
    var disponibilidad = document.getElementById('disponibilidad').value;
    var cid = document.getElementById('cid').value;
    var ticket = document.getElementById('ticket').value;
    var tcliente = document.getElementById('tcliente').value;
    var proveedor = document.getElementById('proveedor').value;
    var detalle = document.getElementById('detalle').value;
    var cc = document.getElementById('cc').value;

    window.location.href = "mailto:"+proveedor+"?cc="+cc+"&subject="+tcliente+" || "+rz+" || CID."+cid+" || SVA-CAMBIOS:"+ticket+
    "&body= '<table border=1><tr><td>'Nombre del contacto:'</td><td>'"+contacto+
    "'</td></tr><tr><td>'Numero del contacto:'</td><td>'"+ncontacto+
    "'</td></tr><tr><td>'Correo:'</td><td>'"+email+"'</td></tr><tr><td>'Disponibilidad:'</td><td>'"
    +disponibilidad+"'</td></tr><tr><td>'CID:'</td><td>'"+cid+"'</td></tr><tr><td>'Detalles:'</td><td>'"
    +detalle+"'</td></tr></table>'";


}

//"&body= RAZON SOCIAL: "+rz+" RUC: "+ruc+" <br>EMAIL: "+email+" <br>NOMBRE DEL CONTACTO: "+contacto+" <br>NUMEROS DEL CONTACTO: "+ncontacto+" DISPONIBILIDAD: "+disponibilidad+" CID (Circuito): "+cid+" TICKET (Incidencia): "+ticket+" DETALLES: "+detalle;
    