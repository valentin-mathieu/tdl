document.addEventListener('DOMContentLoaded', (event) => {

    //Boutons Inscription / Connexion qui affichent/masquent les formulaires appropriés 

    let buttonRegister = document.getElementById("register");
    let divRegister = document.getElementById("div_register");
    divRegister.style.display = "none";

    let buttonConnect = document.getElementById("connect");
    let divConnect = document.getElementById("div_connect");
    divConnect.style.display = "none";

    buttonRegister.addEventListener("click", function(){
        divRegister.style.display = "block";
        buttonRegister.remove();
        buttonConnect.remove();
    })

    buttonConnect.addEventListener("click", function(){
        divConnect.style.display = "block";
        buttonRegister.remove();
        buttonConnect.remove();
    })

    //Formulaire Inscription 

    let formRegister = document.getElementById('registration_form');

    formRegister.addEventListener('submit', function(e){

        e.preventDefault();

        const formData = new FormData(this);

        fetch('registration-treatment.php', {
            method: 'post',
            body: formData
        }).then(response => {
            return response.json()
        })
    })


})