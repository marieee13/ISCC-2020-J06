<?php
 $str1 = "La maîtrise des fondamentaux du code et de la programmation
dans les domaines du business, du marketing et de la communication est un avantage sérieux
et utile";
$caractere =  strlen ($str1);
$mot= str_word_count ($str1);
$str = strtolower ($str1);
$strmaj = strtoupper ( $str1);
$strmel= str_shuffle ($str1);
$str4 = str_replace ("la","LA",$str1);
$str5= str_replace ("est un avantage sérieux et utile","",$str1 );


{echo "<p> La chaine". $str1. "contient $caractere caractères </p>"; 
echo "<p>La chaine" .$str1 . "contient $mot mots </p>";
echo "<p> ".$str ."</p> ";
echo "<p>". $strmaj."</p>";
echo "<p>". $strmel."</p>";
echo "<p>". $str4."</p>";
echo "<p>". $str5."</p>";}

?>