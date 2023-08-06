<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="scolarite";

        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username,$password);
            if(isset($_POST['valider'])){
        
            $matricule = $_POST['matricule'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adresse = $_POST['adresse'];
            $mention = $_POST['mention'];
            $banque = $_POST['banque'];
            $datepay = $_POST['datepay'];
            $montant = $_POST['montant'];
            $Niveau = $_POST['niveau'];

            $sql=$conn->prepare("INSERT INTO etudiant(matricule,nom,prenom,adresse,mention,banque,datepay,montant,Niveau) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $sql->execute(array($matricule,$nom,$prenom,$adresse,$mention,$banque,$datepay,$montant,$Niveau));

                
             }
        }
        catch(PDOException $e){
            echo "la connexion a échoué:".$e->getMessage();
        }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
    <style>
        *{
    font-family: 'Poppins', sans-serif;
   
    margin:0;
    padding:0;
    box-sizing: border-box;
    text-transform: capitalize;
    transition:all .2s linear;
       }
       body{
        background:#374254;
        
       }
.Titre{
   text-align: center;
   text-decoration:underline ;
   position: relative;
   top:30px;
}

.container{
    display:flex;
    justify-content:center;
    align-items: center;
    padding:25px;
    min-height:100vh;
    padding-bottom:70px;
   
}

.container form{
    padding:20px;
    width:700px;
    background: #6098BA;
    box-shadow:0 5px 10px rgba(0,0,0,.1);
    border-radius:20px;
}

.container form .row{
    display:flex;
    flex-wrap: wrap;
    gap:15px;
}


.container form .row .col{
    flex:1 1 250px ;
}

.container form .row .col .title{
    font-size:20px;
    color:#333;
    padding-bottom: 5px;
    text-transform: uppercase;
}

.container form .row .col .inputBox{
    margin:15px 0;
}

.container form .row .col .inputBox span{
    margin-bottom:10px;
    display:block;
}

.container form .row .col .inputBox input{
    width:100%;
    border-radius:10px;
    padding:10px 15px;
    font-size:15px;
    text-transform:none;
}

.container form .row .col .inputBox input:hover{
    background:#6098BA ;
}

.container form .row .col .inputBox input:focus{
    border:1px solid #000;
}

.container form .submit-btn{
    width:100%;
    padding:12px;
    font-size:17px;
    background:#266396;
    color:#fff;
    margin-top:5px;
    cursor:pointer;
    border-radius:20px;
}

.container form .submit-btn:hover{
    background:#6098BA;
}

#erreur{
    color:red;
    text-align: center;
}
#lien{
    margin-left:270px;
}
#deco{
    margin-top:10px;
    margin-left:270px;
}

    </style>
    <script>
        // Récupérez les données précédemment stockées (variables ou cookie)
var info1 = /* récupérer la valeur */;
var info2 = /* récupérer la valeur */;
// ... Récupérez les autres informations nécessaires

// Remplissez les champs du formulaire avec les données récupérées
document.getElementById('matricule').value = info1;
document.getElementById('nom').value = info2;
// ... Remplissez les autres champs du formulaire

    </script>
</head>
<body>
    <h1 class="Titre">Formulaire d'Ajout</h1>
    <div class="container">
        <form  id="formulaire" method="POST">
            <div class="row">
                <div class="col">
                    <h3 class="title">Info Etudiant</h3>
                    <div class="inputBox">
                        <span>Matricule :</span>
                        <input type="text" placeholder="085|22" name="matricule">
                    </div>
                    <div class="inputBox">
                        <span>Nom :</span>
                        <input type="text" placeholder="ANDRIAMBELO" name="nom">
                    </div>
                    <div class="inputBox">
                        <span>Prénom :</span>
                        <input type="text" placeholder="Haga Zo mirado" name="prenom">
                    </div>
                    <div class="inputBox">
                        <span>Adresse :</span>
                        <input type="text" placeholder="Andrainjato,Fianarantsoa" name="adresse">
                    </div>
                    <div class="inputBox">
                        <span>Mention :</span>
                        <input type="text" placeholder="Informatique" name="mention">
                    </div>
                </div>

                <div class="col">
                    <h3 class="title">Frais de scolarité</h3>
                    <div class="inputBox">
                        <span>Niveau de l'étudiant :</span>
                        <input type="text" placeholder="L3" name="niveau">
                    </div>
                    <div class="inputBox">
                        <span>Banque :</span>
                        <input type="text" placeholder="BFV-SG" name="banque">
                    </div>
                    <div class="inputBox">
                        <span>Date de paiement:</span>
                        <input type="date"  name="datepay">
                    </div>
                    <div class="inputBox">
                        <span>Montant payé :</span>
                        <input type="text" placeholder="450000" name="montant">
                    </div>  
                </div>
            </div>

            <button type="submit" id="submit" value="valider" name="valider" class="submit-btn">Valider</button>
            <p id="erreur"></p>
            <p id="lien"><a href="http://localhost/manokana/resultat.php"> Voir liste étudiant</a></p>
            <button id="deco">Se deconnecter</button>
        </form>
    </div>
    <script>
        document.getElementById('deco').addEventListener('click',function(){
            //Redirection vers accueil
            window.location.href = 'index.html';
        });
       
    </script>
    
    <script>
        document.getElementById('formulaire').addEventListener('submit',function(e){
    var inputs = document.getElementsByTagName('input');
    var erreur;

    for(var i=0;i < inputs.length;i++){
        if(!inputs[i].value){
            erreur = "Veuillez renseigner chacun des champs avant de valider!";
        } 
    }
    if(erreur){
        e.preventDefault();//empeche le chargement de la page
        document.getElementById("erreur").innerHTML=erreur;
    }
    else{
        document.getElementById("erreur").innerHTML="";
        swal("Ajout réussi!","Etudiant saisi!","succes");
    }
})

    </script>
</body>
</html>
