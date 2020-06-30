<?php
    function affichage_titre ($nom_produit)
    { echo "<h1>$nom_produit </h1>"; }
     
    function affichage_description ($color,$prix)
    { echo "<p> $color, $prix </p>"; }
     
    function affichage_produit ($nom_produit,$color,$prix,$disponible){
    if ( $disponible==true){ affichage_titre ($nom_produit);
    affichage_description($color,$prix); }
    else { echo"<p>Le produit".$nom_produit."n’est malheureusement plus disponible </p>"; }} ?>
    
    