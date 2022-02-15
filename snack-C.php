<!-- Snack C
Creare un array con 15 numeri casuali, tenendo conto che 
l’array non dovrà contenere lo stesso numero più di una volta -->



<?php 

$arrayNumeri = [];


$i = 0;
while (++$i <= 15) {
    $numberoRandom = rand(0, 100);
    /* echo "entrato in while\n".'<br>'; */
    /* echo "numero random nel while:".$numberoRandom; */
    /* echo $arrayNumeri; */
    if(!in_array($numberoRandom, $arrayNumeri )){
        echo "entrato in if e pusho il numero  \n".'<br>'; 
        $arrayNumeri[] =  $numberoRandom;
        /* echo "numero random nell if:".$numberoRandom;
        echo '-'.$i.$arrayNumeri.$numeroRandom.'<br>';  */
    }else{
        echo "Numero doppio decremento la I  \n".'<br>'; 
        --$i;
    }
    
    var_dump ($arrayNumeri); 
}

?>