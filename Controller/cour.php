<?php session_start();
    require_once '../model/db.php';
    require_once '../model/cour.php';
    if (isset($_POST['aj'])) {
        extract($_POST);
        addCour($dateCo,$libelle,$matriculeP,$idM,$semestre,$nbrh,$hdebut,$hfin);
        header("location:http://localhost/pg/?page=cour");
    }
    if (isset($_POST['mo'])) {
        extract($_POST);
        updateCour($idC,$dateCo,$libelle,$matriculeP,$idM,$semestre,$nbrh,$hdebut,$hfin);
        header("location:http://localhost/pg/?page=cour");
    }
    if(isset($_GET['ok'])){
        if ($_SESSION['type'=='admin'] || $_SESSION['type']=='Responsable') {
            deleteCour($_GET['ok']);
            header("location:http://localhost/pg/?page=cour");    
        } else {
            echo "<script lang='JavaScript'>alert('non autoriser')</script>";
        }
        
        
    }
?>