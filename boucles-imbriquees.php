<?php 

function clock () 
 {
     for ($heures=00;$heures <= 23; $heures = $heures +1 ) 
 {        for ($minutes=00; $minutes <= 59; $minutes= $minutes+1)
    { echo "$heures:";
        echo " $minutes <br>" ; 
    } 
    echo "<br>";
}
 }
 clock();
 ?>