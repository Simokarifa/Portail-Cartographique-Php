<?php
    include("connexion.php");
    header('Content-Type: text/html; charset=utf-8');
    $connexion = mysqli_connect($serveur, $user, $password, $base );
    // Check connection
    if ($connexion->connect_error) {
        die("Connection failed: " . $connexion->connect_error);
    };

    //Preparation des requêttes pour recuperer les donnees dans la BD
    $centreCommercial = "SELECT id, nom, nb_commerc, adresse, ST_AsGeoJSON(SHAPE) as coordonnees 
            FROM centre_commercial";

    $commune= "SELECT ncc,ST_AsGeoJSON(SHAPE) as coordonnees 
            FROM communes";

    $commerce= "SELECT id, nom, adresse, ST_AsGeoJSON(SHAPE) as coordonnees 
            FROM commerces";

    $region= "SELECT nom,code_insee, ST_AsGeoJSON(SHAPE) as coordonnees 
                FROM regions";

    //Envoi et Récupération des données dans la BD
    $resultcentreCom = mysqli_query($connexion, $centreCommercial);
    $resultCommune = mysqli_query($connexion, $commune);
    $resultCommerces= mysqli_query($connexion, $commerce);
    $resultRegion = mysqli_query($connexion, $region);

    //var_dump($resultcentreCom);
    //Verification de la connexion à la BD
    if (!$resultcentreCom) {
        echo "Impossible d'exécuter la requête ($centreCommercial) dans la base : " . mysql_error();
        exit;
    }
    //Les données Centre commercial en Tableau
    $centreCommercial = array();
    while ($row = mysqli_fetch_assoc($resultcentreCom)) {
        $centreCommercial[] = array(
            "id" => $row["id"], 
            "nom" => utf8_encode($row["nom"]), 
            "nb_commerce" => $row["nb_commerc"], 
            "adresse" => utf8_encode($row["adresse"]), 
            "coordonnees" => $row["coordonnees"]
        );
     }

    //Les données Communes en Tableau
    $communes = array();
    while ($row2 = mysqli_fetch_assoc($resultCommune)) {
        $communes[] = array(
            "nom" => utf8_encode($row2["ncc"]),
            "coordonnees" => $row2["coordonnees"]
        );
    }

    //Les données Commerces en Tableau
    $commerces = array();
    while ($row3 = mysqli_fetch_assoc($resultCommerces)) {
        $commerces[] = array(
            "id" => $row3["id"],
            "nom" => utf8_encode($row3["nom"]),
            "adresse" => utf8_encode($row3["adresse"]),
            "coordonnees" => $row3["coordonnees"]
        );
    }

    //Les données Région en Tableau
    $region = array();
    while ($row4 = mysqli_fetch_assoc($resultRegion)) {
        $region[] = array(
            "nom" => utf8_encode($row4["nom"]),
            "code_insee" => utf8_encode($row4["code_insee"]),
            "coordonnees" => $row4["coordonnees"]
        );
    }
    //echo json_encode($communes);
    //echo json_encode($liste3);
   //echo json_encode($liste2);
?>