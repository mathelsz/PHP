<?php

$numero = 21;
//padrao
if ( $numero > 20 ){
    echo "<p>É maior que 20</p> ";
}
else{
    echo "<p>É menor que 20</p> ";
}

//ternario
echo ( $numero < 50 ) ? "<p> É menor que 50 </p>" : "<p> É Maior que 50 </p> ";


//composto     'AND->&&' | 'OR->||' 

if( $numero > 0 AND $numero < 50){
    echo "<p>Verdadeiro.</p>";

}
else{
    "<p>Falso.</p>";
}




?>