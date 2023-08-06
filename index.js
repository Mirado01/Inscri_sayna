document.getElementById("formulaire").addEventListener("submit",function(e) {
    var erreur;
    var erreur1;
    var erreur2;
    var inputs = document.getElementsByTagName("input");
    var email = document.getElementById("email");
    var mdp = document.getElementById("mdp");


    //erreur si vide
    for(var i=0;i < inputs.length;i++){
        if(!inputs[i].value){
            erreur = "Veuillez renseigner chacun des champs pour vous connecter!";
        } 
    }
    if(erreur){
        e.preventDefault();//empeche le chargement de la page
        document.getElementById("erreur").innerHTML=erreur;
    }
    else{
        document.getElementById("erreur").innerHTML="";
    }
    
    //erreur pour email
    if(email.value != "mirado@gmail.com"){
        erreur1 = "Adresse e-mail incorrect";
    }
    if(erreur1){
        e.preventDefault();
        document.getElementById("erreur1").innerHTML=erreur1;
    }
    else{
        document.getElementById("erreur1").innerHTML="";
    }

    //erreur pour mdp
    if(mdp.value != "abcde"){
        erreur2 = "mot de passe incorrect";
    }
    if(erreur2){
        e.preventDefault();
        document.getElementById("erreur2").innerHTML=erreur2;
    }
    else{
        document.getElementById("erreur2").innerHTML="";
    }


    

} );