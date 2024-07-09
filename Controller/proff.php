<?php
session_start();
    require_once '../model/db.php';
    require_once '../model/proff.php';
    if (isset($_POST['aj'])) {
        $nomP=$_POST['nomP'];
        $prenomP=$_POST['prenomP'];
        $dateNaissance=$_POST['dateNaissance'];
        $sexe=$_POST['sexe'];
        $grade=$_POST['grade'];
        $libelle=$_POST['libelle'];
        $idM=$_POST['idM'];
        $avatar=$_FILES['avatar']['name'];
        $chemin = $_FILES['avatar']['tmp_name'];
        move_uploaded_file($chemin,"../avatar/$avatar");
        addProff($nomP,$prenomP,$dateNaissance,$sexe,$grade,$libelle,$idM,$avatar);
        header("location:http://localhost/pg/?page=proff");
    }
    if (isset($_POST['mo'])){
        $matriculeP=$_POST['matriculeP'];
        $nomP=$_POST['nomP'];
        $prenomP=$_POST['prenomP'];
        $dateNaissance=$_POST['dateNaissance'];
        $sexe=$_POST['sexe'];
        $grade=$_POST['grade'];
        $libelle=$_POST['libelle'];
        $idM=$_POST['idM'];
        $avatar=$_FILES['avatar']['name'];
        $chemin = $_FILES['avatar']['tmp_name'];
        move_uploaded_file($chemin,"../avatar/$avatar");
        updateProff($matriculeP,$nomP,$prenomP,$dateNaissance,$sexe,$grade,$libelle,$idM,$avatar);
        header("location:http://localhost/pg/?page=proff");
    }
    if(isset($_GET['ok'])){
        if ($_SESSION['type']=='admin' || $_SESSION['type']=='Responsable') {
            deleteProff($_GET['ok']);
            header("location:http://localhost/pg/?page=proff");
        } else {
            echo "<script lang='JavaScript'>alert('non autorise')</script>";
        }
        
        
    }
?>