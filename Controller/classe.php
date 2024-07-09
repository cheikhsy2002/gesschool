<?php session_start();
    require_once '../model/db.php';
    require_once '../model/classe.php';
    if (isset($_POST['aj'])) {
        $libelle = $_POST['libelle'];
        $niveau = $_POST['niveau'];
        $filiere = $_POST['filiere'];
        addClasse($libelle, $niveau, $filiere);
        header("location:http://localhost/pg/?page=Classe");
    }
    if (isset($_POST['mo'])) {
        extract($_POST);
        updateClasse($libelle,$niveau,$filiere);
        header("location:http://localhost/pg/?page=Classe");
    }
    if(isset($_GET['ok'])){
        if ($_SESSION['type']=='admin') {
            deleteClasse($_GET['ok']);
            header("location:http://localhost/pg/?page=Classe");
        } else {
            echo "<script lang='JavaScript'>alert('non auoriser)</script>";
        }
        
        
    }
?>