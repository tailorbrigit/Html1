<!-- /*
* File: szamit.php
* Author:Szabó Brigitta
* Copyright: 2022, Szabó Brigitta
* Group: Szoft I/N
* Date: 2022-06-13
* Github: https://github.com/tailorbrigit/
* Licenc: GNU GPL
*/ -->

<?php

echo file_get_contents('templates/head.html');

$page = file_get_contents('templates/szamitas.html');



function Szamitas($aTengely, $bTengely){

    $terF = (4*M_PI)/3*$aTengely*(pow($bTengely,2));
    

    return $terF;
}

    if(!empty($_GET['aTengely']) and !empty($_GET['bTengely'])) 
    {
        $aTengely = $_GET['aTengely'];
        $bTengely = $_GET['bTengely'];

        $terF= Szamitas($aTengely, $bTengely);
    }
    else{
        $terF = "HIBA!";
        }

    $terF= Szamitas($aTengely, $bTengely);

    $page= str_replace('{{eredmeny}}', $terF, $page);

    echo $page;
    echo file_get_contents('templates/foot.html');
?> 