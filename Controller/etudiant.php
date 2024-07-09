<?php session_start();
    require_once '../Model/db.php';
    require_once '../Model/etudiant.php';
    if (isset($_POST['aj'])) {
        extract($_POST);
        $avatar=$_FILES['avatar']['name'];
        $chemin = $_FILES['avatar']['tmp_name'];
        move_uploaded_file($chemin,"../avatar/$avatar");
        addEtud($nomE,$prenomE,$dateNaissanceE,$sexeE,$competence,$libelle,$parcours,$avatar);
        header("location:http://localhost/pg/?page=etud");
    }
    if (isset($_POST['mo'])){
        extract($_POST);
        $avatar=$_FILES['avatar']['name'];
        $chemin = $_FILES['avatar']['tmp_name'];
        move_uploaded_file($chemin,"../avatar/$avatar");
        updateEtud($matriculeE,$nomE,$prenomE,$dateNaissanceE,$sexeE,$competence,$libelle,$parcours,$avatar);
        header("location:http://localhost/pg/?page=etud");
    }
    if(isset($_GET['ok'])){
        if ($_SESSION['type']=='admin' || $_SESSION['type']=='Assistant') {
            deleteEtud($_GET['ok']);
            header("location:http://localhost/pg/?page=etud");
        } else {
            echo "<script lang='JavaScript'>alert('non autorise')</script>";
        }
        
        
    }
?>