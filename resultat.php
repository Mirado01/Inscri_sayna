<?php 
   
    $user="root";
    $pass="";
    $db="scolarite";
    $db=new mysqli('localhost',$user,$pass,$db)
    or die("impossible de se connecter");

    $sql="select * from etudiant";
    $result= mysqli_query($db,$sql) or die("mauvais query");

    echo "<table  id='myTable'>";
    echo "<tr><th>MATRICULE</th><th>NOM</th><th>PRENOM</th><th>ADRESSE</th><th>MENTION</th><th>BANQUE</th><th>DatePaiement</th><th>MONTANT</th><th>NIVEAU</th><th>RESTE A PAYER</th></tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo"<tr><td>{$row['matricule']}</td> <td>{$row['nom']}</td> <td>{$row['prenom']}</td> <td>{$row['adresse']}</td> <td>{$row['mention']}</td> <td>{$row['banque']}</td> <td>{$row['datepay']}</td> <td>{$row['montant']}</td> <td>{$row['Niveau']}</td> <td>{$row['reste_a_payer']}</td> </tr></br>"; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
    <style>
      body {
    font-family: 'Poppins', sans-serif;
    background-image: url('emit3.jpg');
    background-repeat: no-repeat;
    background-size: cover;
      }

      .title{
        position:fixed;
        left:1200px
      }
      input{
        width:30%;
          border-radius:10px;
          padding:10px 15px;
          font-size:15px;
          text-transform:none;
          margin-left:550px;
          margin-top:120px;
      }
      input:hover{
        background:#6098BA ;
      }

      table{
          text-align: center;
          font-size:21px;
          display:flex;
          justify-content:center;
          align-items:center;
          min-height:20vh;
      }
      tr{
          background: #ccc;
          border-radius: 10px;
      }
      tr:nth-child(odd){
          background: #fff;
      }
      tr:hover{
          background: #444;
          color:#fff;
      }
      th{
          background:#888;
          font-size: 19px;
          color: #fff;
          border-radius: 10px;
          border:1px solid #000;
          padding:5px;
      }
      #deco{
        background-color:red;
        
      }
    </style>
    <script>
     var lignesTableau = document.querySelectorAll('table tr');
for (var i = 0; i < lignesTableau.length; i++) {
  lignesTableau[i].addEventListener('click', function() {
    var cellulesLigne = this.getElementsByTagName('td');
    var info1 = cellulesLigne[0].innerHTML;
    var info2 = cellulesLigne[1].innerHTML;
    // ... Récupérez les autres informations nécessaires et stockez-les dans des variables ou un cookie
  });
}
    </script>
</head>
<body>
  <h1 class="title">Frais de scolarité Emit</h1>
    <input id="searchInput" onkeyup="searchTable()" type="text"  placeholder="Recherher....">
    <button id="deco">Se deconnecter</button>
    <button id="jout">Ajout</button>
    <script>
        document.getElementById('deco').addEventListener('click',function(){
            //Redirection vers accueil
            window.location.href = 'index.html';
        });
        document.getElementById('jout').addEventListener('click',function(){
            //Redirection vers accueil
            window.location.href = 'http://localhost/manokana/projet1.php';
        });
       
    </script>
    
    <script>
function searchTable() {
  var input = document.getElementById("searchInput").value.toLowerCase();
  var table = document.getElementById("myTable");
  var rows = table.getElementsByTagName("tr");

  for (var i = 1; i < rows.length; i++) { // Commencer à l'index 1 pour exclure la première ligne (noms des colonnes)
    var cells = rows[i].getElementsByTagName("td");
    var rowVisible = false;

    for (var j = 0; j < cells.length; j++) {
      var cell = cells[j];
      if (cell.innerHTML.toLowerCase().indexOf(input) > -1) {
        rowVisible = true;
        break;
      }
    }

    if (rowVisible) {
      rows[i].style.display = "";
    } else {
      rows[i].style.display = "none";
    }
  }
}
</script>
    
</body>
</html>