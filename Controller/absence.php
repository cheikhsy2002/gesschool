<?php
session_start();
    require_once '../model/db.php';
    require_once '../model/absence.php';
    if (isset($_POST['aj'])) {
        extract($_POST);
        addAbs($dateA,$matriculeE,$idC);
        header("location:http://localhost/pg/?page=abs");
    }
    if (isset($_POST['mo'])) {
        extract($_POST);
        updateAbs($idA,$dateA,$matriculeE,$idC);
        header("location:http://localhost/pg/?page=abs");
    }
    if(isset($_GET['ok'])){
        if ($_SESSION['type']=='admin' || $_SESSION['type']=='proff' || $_SESSION['type']=='Assstant') {
            
            deleteAbs($_GET['ok']);
            header("location:http://localhost/pg/?page=abs");
        }else {
            echo "<script lang='JavaScript'>alert('non autoriser')</script>";
        }
    }
?>