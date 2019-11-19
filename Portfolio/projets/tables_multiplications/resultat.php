<?php
session_start();
if(isset($_SESSION['nombre_choisi'])){
    $table = $_SESSION['nombre_choisi'];
    $operation = $table*$_SESSION['nombrealea'];
    if(isset($_POST['resultat'])){
        if($_POST['resultat'] == $operation){
            echo "VRAI";
        }
        else{
            echo "FAUX";
        };
    };
};
?>