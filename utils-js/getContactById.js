const contactsSelect = document.querySelector("#contacts-select");

const resertResultsContact = () => {

     document.querySelector("#resultado-contact-nombre").textContent = "";
     document.querySelector("#resultado-contact-numero").textContent = "";
     document.querySelector("#resultado-contact-email").textContent = "";


      document.querySelector("#contacto").value = "";
      document.querySelector("#ncontacto").value = "";
      document.querySelector("#email").value = "";

}

contactsSelect.addEventListener("change", function() {
    const optionSeleted = contactsSelect.value; 

    if(optionSeleted === "opcion1") return resertResultsContact();
    

    const arrayContact = optionSeleted.split("|");

    const name = arrayContact[0];
    const number = arrayContact[1];
    const email = arrayContact[2];

    document.getElementById("contacto").value = name || "";
    document.getElementById("ncontacto").value = number || "";
    document.getElementById("email").value = email || "";

    onSetCompanyData(null,name,number,null,email,null,null);
  });

