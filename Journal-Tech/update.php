<?php

    include "./connexion.php";
    
    $Id = $_GET['id'];
$titre = $_GET['titre'];
$image = $_GET['image'];
$contenu = $_GET['contenu'];
$auteur = $_GET['auteur'];
$categorie = $_GET['categorie'];
$dates = $_GET['dates'];

    $execute=$db->exec("UPDATE article SET titre=$titre, images=$image, paragraphe=$contenu, auteur=$auteur, dates=$dates, id_categorie=$categorie 
    WHERE id=$Id");
    //condition pour vérifier si l'article s'ajoute bien à la bdd
    if($execute){

        echo"Modification OK !! <br>";      
    
    } else {
        
        echo"Essaye encore<br>"; 
    }     

    $result = $db->query($infos);
    include "./editform.php";
    $infos = $db->query("SELECT * FROM article WHERE id=$Idart");
    while ($row = $infos->fetch()) {

        echo $row['id']."<br />\n";
        echo $row['titre']."<br />\n";
        echo $row['image']."<br />\n";
        echo $row['contenu']."<br />\n";
        echo $row['auteur']."<br />\n";
        echo $row['categorie']."<br />\n";
        echo $row['dates']."<br />\n";
    }
    
    echo'<a href= "./index.php">retourne à l\' acceuil</a>';



?>