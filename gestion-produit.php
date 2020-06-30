<?php
function update_dispo ($quantites)
{if ($quantites>0) 
{ return TRUE;} 
else {return FALSE;}} 
 
function restockage ($quantites,$nb_ajout) 
{echo "<p>".$nb_ajout."produits ont été ajoutés au stock.</p>";
return ($quantites + $nb_ajout); }
 
function achat ($quantites,$nb_achat)
{echo "<p>".$nb_achat."produits ont été ajoutés acheté.</p>"; 
return ( $quantites- $nb_achat);}
?>

