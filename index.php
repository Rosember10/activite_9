
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activité 9</title>
    <style>
        body{
            background-color: black;
            color: #42C920;
            
        }
        h1{
            text-align: center;
        }
        span{
            font-weight: bold;
        }
        ul{
            border: 10px solid #42C920
        }

    </style>
</head>
<body>

<nav>
<?php
$suites=["♦","♣","♥","♠"];
$num=[1,2,3,4,5,6,7,8,9,10,11,12,13];
$deck=[];
$sb1deck=[];
$sb2deck=[];
$suffle=[];
$fin=[];
for($i=0;$i<count($suites); $i++){
    for($j=0;$j<count($num);$j++){
        array_push($deck,$suites[$i].$num[$j]);  
    }
}
for ($k=0;$k<26;$k++){
    array_push($sb1deck,$deck[$k]);
}
for ($l=26;$l<=51;$l++){
    array_push($sb2deck,$deck[$l]);
}
for ($m=0;$m<26;$m++){
    array_push($suffle,$sb1deck[$m],$sb2deck[$m]);
}


?>
<h1> Activité 9 </h1>
<ul>
    <li>Créer 52 cartes à partir d'un tableau de nombres (1 à 13) et d'un tableau de suites ("Carreau", "Trèfle", "Coeur", "Pique"). Ex: "10-Piq". Utilisez la concatenation.</li>
    <li>Brasser le paquet en intercoupant les cartes. Vous devez tout d'abord diviser le paquet en deux et créer un nouveau paquet en y alternant les cartes des deux sous-paquets. [Paquet1-Carte1, Paquet2-Carte1, Paquet1-Carte2, Paquet2-Carte2, Paquet1-Carte3, Paquet2-Carte3, ..., Paquet1-Carte26, Paquet2-Carte26]. <span>Utilisez array_slice ou une boucle pour diviser le paquet et une boucle pour créer une nouveau paquet brassé.</span> </li>
    <li>Afficher les 52 cartes sur la page Web en 4 rangée de 13 cartes.</li>
</ul>
<h2> Suites </h2>
<?php 
 echo ("<pre>");
    print_r($suites);
 echo ("<pre>");
?>
<h2> Nombres</h2>
<?php
 echo ("<pre>");
    print_r($num);
 echo ("<pre>");
?>
<h2> Deck </h2>
<?php
 echo ("<pre>");
    print_r($deck);
 echo ("<pre>");
?>
<h2> sub deck 1 </h2>
<?php 
echo ("<pre>");
print_r($sb1deck);
echo ("<pre>");
?>
<h2> sub deck 2 </h2>
<?php
echo ('<pre>');
print_r($sb2deck);
echo ('<pre>');
?>
<h2> Suffle </h2>
<?php 
echo ('<pre>');
print_r($suffle);
echo ('<pre>');
?>
<?php
for ($o=0;$o<=51;$o++){
    print_r( $suffle[$o]) . " ";
    if (($o+1)%13==0) {
       print_r( " <br> ") ;
    }
}
?>
</nav>
</body>
</html>
