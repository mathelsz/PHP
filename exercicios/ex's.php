<?php
    
    //Exercicio 1
    $number = 20;

    if ($number > 10){
        echo '<h1> é maior </h1>';
    }
    else{
        echo '<h1> é menor </h1>';
    }

    //Exercicio 2
    $salario = 10000;

    if ($salario <= 1000){
        $final = $salario * 1.08;
        echo '<h1>Salario com reajuste '.$final.'</h1>';
    }
    else{
        $final = $salario * 1.05;
        echo '<h1>Salaraio com reajuste '.$final.'</h1>';
    }

    //Exercicio 3
    $numero = 0;

    if($numero > 0){
        echo '<h1> numero positivo </h1>';

    }
    elseif($numero < 0){
        echo '<h1> numero negativo </h1>'; 
    }
    else{
        echo '<h1> numero é zero </h1>';
    }

    //Exercicio 4
    $notas = [2.5, 4.9, 1.8, 2.6];
    $media = ($notas[0]+$notas[1]+$notas[2]+$notas[3])/4;
    echo '<h1>'.$media.'</h1>';


    if($media > 7){
        echo '<p>Aprovado!</p>';
    }
    elseif($media < 4){
        echo '<p>Reprovado!</p>';
    }
    else{
        echo '<p>Recuperação</p>';
    }

    //Exercicio 5

    $idade = 30;

    if($idade < 7){
        echo '<p>Categoria: INFANTIL</p>';
    }
    elseif($idade > 7 and $idade <= 10){
        echo '<p>Categoria: INFATOINFANTIL</p>';
    }
    elseif($idade > 11 and $idade <= 14){
        echo '<p>Categoria: JUVENIL</p>';
    }
    elseif($idade > 15 and $idade <= 18){
        echo '<p>Categoria: JUVENTUDE</p>';
    }
    elseif($idade > 19 and $idade <= 29){
        echo '<p>Categoria: ADULTO</p>';
    }
    else{
        echo '<p>Categoria: SENIOR</p>';
    }
?>