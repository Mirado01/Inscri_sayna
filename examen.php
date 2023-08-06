<?php
//1-Lecture de la matrice A et du vecteur V:
function lire_matrice($n, $m) {
    $matrice = array();
    for ($i = 0; $i < $n; $i++) {
        $ligne = array();
        for ($j = 0; $j < $m; $j++) {
            $element = readline("Entrez l'élément [$i][$j]: ");
            $ligne[] = (int)$element;
        }
        $matrice[] = $ligne;
    }
    return $matrice;
}

function lire_vecteur($n) {
    $vecteur = array();
    for ($i = 0; $i < $n; $i++) {
        $element = readline("Entrez l'élément $i: ");
        $vecteur[] = (int)$element;
    }
    return $vecteur;
}

$n = readline("Entrez le nombre de lignes de la matrice: ");
$m = readline("Entrez le nombre de colonnes de la matrice: ");
$matrice_A = lire_matrice($n, $m);

$N = readline("Entrez la taille du vecteur: ");
$vecteur_V = lire_vecteur($N);

echo "Matrice A:\n";
foreach ($matrice_A as $ligne) {
    echo implode(" ", $ligne) . "\n";
}

echo "Vecteur V: " . implode(" ", $vecteur_V) . "\n";

//2-Calcul de la moyenne de tous les éléments de la matrice A
$sum = 0;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $m; $j++) {
        $somme += $matrice_A[$i][$j];//incrémentation de la somme
    }
}

$moyenne = $sum / ($n * $m); //avec ($n * $m) determine le nombre total des éléments de matrice_A

echo "Matrice A <br>";
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $m; $j++) {
        echo $matriceA[$i][$j];
    }
    echo "<br>";
}

echo "Moyenne de la matrice A : " . $moyenne . "<br>";

//3-Calcul du nombre des éléments de la matrice qui sont supérieurs à la moyenne
$a = 0; //$a est la variable désignant ce nombre supérieur
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $m; $j++) {
        if ($matrice_A[$i][$j] > $moyenne) {
            $a = $a + 1; //incrémentation du nombre supérieur A
        }
    }
}

echo "le nombre qu'on a trouve est :" . $a . "<br>";

//4-Construction du vecteur V1
$V1 = array();
for ($i = 0; $i < $N; $i++) {
    if($i % 2 == 0){
        $V1[$i] = $vecteur_V[$i];
    }
}
echo "Vecteur V1 <br>";
for ($i = 0; $i < count($V1); $i++) {
    echo $V1[$i] . "<br>";
}

//5-Division de V par son Kiele element

echo "Entrer l'élément K : <br> ";
$K = intval(fgets(STDIN));
$VA = array();
$VB = array();
for($i=0; $i == $N ; $i++){
    for($i=0; $i == $K; $i++){
        $vecteurVA[$i]= $vecteur_V[$i];
    }
    for($i=$k; $i<$N; $i++){
        $vecteurVB[$i]= $vecteur_V[$i];
    }
}
echo "La première partie du vecteur V est : <br>";
for ($i = 0; $i < count($VA); $i++) {
    echo $VA[$i] . "<br>";
}
echo "La deuxiéme partie du vecteur V est : <br>";
for ($i = 0; $i < count($VB); $i++) {
    echo $VB[$i] . "<br>";
}



?>


