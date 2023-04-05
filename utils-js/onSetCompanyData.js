const btnCidSearch = document.querySelector("#cid-search");

const onSetCompanyData = (sn,nombre,numero,cid,email,disponibilidad,detalles) => {
    const sn_ =  document.querySelector("#resultado");
    const nombre_ = document.querySelector("#resultado-contact-nombre");
    const numero_ = document.querySelector("#resultado-contact-numero");
    const email_ = document.querySelector("#resultado-contact-email");
    const disponibilidad_ =  document.querySelector("#resultado4");
    const cid_ =  document.querySelector("#resultado5");
    const detalles_ =  document.querySelector("#resultado6");

    sn ? sn_.textContent = sn : null;
    nombre ? nombre_.textContent = nombre : null;
    numero ? numero_.textContent = numero : null;
    cid ? cid_.textContent = cid : null;
    email ? email_.textContent = email: null;
    disponibilidad ? disponibilidad_.textContent = disponibilidad : null;
    detalles ? detalles_.textContent = detalles : null;
};

const onGetCompanyData = () => {
    setTimeout(() => {
        const sn = document.querySelector("#sn").value;
        const nombre = document.querySelector("#contacto").value;
        const numero = document.querySelector("#ncontacto").value;
        const cid = document.querySelector("#cid").value;
        const email = document.querySelector("#email").value;
        const disponibilidad = document.querySelector("#disponibilidad").value;
        const detalles = document.querySelector("#detalle").value;

        onSetCompanyData(sn,nombre,numero,cid,email,disponibilidad,detalles);
    },2000);
}    

btnCidSearch.addEventListener("click", onGetCompanyData());














