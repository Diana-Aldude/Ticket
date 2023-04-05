function SendProveedor(){
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

    const data = `
    Razón Social:\t${rz}
    RUC:\t${ruc}
    E-mail:\t${email}
    Nombre del Contacto:\t${contacto}
    Números del Contacto:\t${ncontacto}
    Disponibilidad:\t${disponibilidad}
    CID (Circuito):\t${cid}
    Ticket :\t${ticket}
    Detalles:\t${detalle}`;

    let cuerpoCorreo = "<html><body><table border='1'>";
    cuerpoCorreo += "<tr><th>Nombre</th><th>Apellido</th></tr>";
    cuerpoCorreo += "<tr><td>Juan</td><td>Pérez</td></tr>";
    cuerpoCorreo += "<tr><td>María</td><td>Gómez</td></tr>";
    cuerpoCorreo += "</table></body></html>";

    window.location.href = "mailto:destinatario@correo.com?subject=Tabla de ejemplo&body=" + encodeURIComponent(data);






}

//"&body= RAZON SOCIAL: "+rz+" RUC: "+ruc+" <br>EMAIL: "+email+" <br>NOMBRE DEL CONTACTO: "+contacto+" <br>NUMEROS DEL CONTACTO: "+ncontacto+" DISPONIBILIDAD: "+disponibilidad+" CID (Circuito): "+cid+" TICKET (Incidencia): "+ticket+" DETALLES: "+detalle;
    




function Sendpendiente(){
    
    var rz = document.getElementById('rz').value;
    var ruc = document.getElementById('ruc').value;
    var email = document.getElementById('email').value;
    var contacto = document.getElementById('contacto').value;
    var ncontacto = document.getElementById('ncontacto').value;
    var cid = document.getElementById('cid').value;
    var tcliente = document.getElementById('tcliente').value;
    var detalle = document.getElementById('detalle').value;
    var cc = document.getElementById('cc').value;

    window.location.href = "mailto:''?cc="+cc+"  "+rz+" || CID."+cid+" || PENDIENTE DE VALIDACION POR PARTE DEL CLIENTE"
    "&body= '<table border=1><tr><td>'Nombre del contacto:'</td><td>'"+contacto+
    "'</td></tr><tr><td>'Numero del contacto:'</td><td>'"+ncontacto+
    "'</td></tr><tr><td>'Correo:'</td><td>'"+email+"'</td></tr><tr><td>'Disponibilidad:'</td><td>'"
    +disponibilidad+"'</td></tr><tr><td>'CID:'</td><td>'"+cid+"'</td></tr><tr><td>'Detalles:'</td><td>'"
    +detalle+"'</td></tr></table>'";


}

function Sendcliente(){
    var rz = document.getElementById('rz').value;
     var cid = document.getElementById('cid').value;
     var email = document.getElementById('email').value;
    var ticket = document.getElementById('ticket').value;
    var tcliente = document.getElementById('tcliente').value;
    var cc = document.getElementById('cc').value;

    window.location.href = "mailto:"+email+"?cc="+cc+" || "+rz+" || CID."+cid+" || SVA-CAMBIOS:"+ticket+
    "&body= '<table border=1><tr><td>'CID (circuito):'</td><td>'"+cid+
    "'</td></tr><tr><td>'Ticket:'</td><td>'"+ticket+
    "'</td></tr></table>'";


}


function Sendresponsiva(){
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