<?php
    require_once '../model/db.php';
    require_once '../model/module.php';
    if (isset($_POST['aj'])) {
        extract($_POST);
        addMod($libelle);
        header("location:http://localhost/pg/?page=mod");
    }
    if (isset($_POST['mo'])) {
        $libelleM = $_POST['libelleM'];
        $IdM = $_POST['IdM'];
        updateMod($IdM,$libelleM);
        header("location:http://localhost/pg/?page=mod");
    }
    if(isset($_GET['ok'])){
        if ($_SESSION['type']=='admin') {
            deleteMod($_GET['ok']);
            header("location:http://localhost/pg/?page=mod");
        } else {
            echo "<script lang='JavaScript'>alert('non autorise')</script>";
        }
    }
?>