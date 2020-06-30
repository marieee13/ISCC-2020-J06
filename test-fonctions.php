<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>php 02</title>
</head>
<body>
<?php
$nom_produit= "T-shirt femme";
$color= "Rouge";
$prix= 15.50;
$disponible=true;
$quantites=10;
 
include("affichage.php"); 
affichage_titre ($nom_produit);
affichage_description ($color,$prix);
affichage_produit ( $nom_produit,$color,$prix,$disponible);
include("gestion-produit.php");
$disponible=update_dispo( $quantites);
 
affichage_produit ( $nom_produit,$color,$prix,$disponible);
achat($quantites,5);
$disponible=update_dispo( $quantites);
affichage_produit ( $nom_produit,$color,$prix,$disponible);
achat($quantites,5);
$disponible=update_dispo( $quantites);
affichage_produit ( $nom_produit,$color,$prix,$disponible);
restockage ($quantites,5) ;
$disponible=update_dispo( $quantites);
affichage_produit ( $nom_produit,$color,$prix,$disponible);
 ?>