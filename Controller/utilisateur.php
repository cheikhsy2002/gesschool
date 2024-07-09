<?php    
session_start();
    require_once '../model/db.php';
    require_once '../model/utilisateur.php';
    if (isset($_POST['aj'])) {
        $Nom=$_POST['Nom'];
        $login=$_POST['login'];
        $password= md5($_POST['password']);
        $role=$_POST['role'];
        $avatar=$_FILES['avatar']['name'];
        $chemin = $_FILES['avatar']['tmp_name'];
        move_uploaded_file($chemin,"../avatar/$avatar");
        $sql= "SELECT * FROM utilisateur WHERE login = '$login'";
        $result = mysqli_query(getConnexion(),$sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<script lang='JavaScript'>alert('login deja utiliser')</script>";
        }else{
        addCont($Nom, $login, $password,$role,$avatar);
        header("location:http://localhost/pg/?page=listcompte");
        }
    }
    if (isset($_POST['mo'])) {
        $idU = $_POST['idU'];
        $Nom=$_POST['Nom'];
        $login=$_POST['login'];
        $password= md5($_POST['password']);
        $role=$_POST['role'];
        $avatar=$_FILES['avatar']['name'];
        $chemin = $_FILES['avatar']['tmp_name'];
        move_uploaded_file($chemin,"../avatar/$avatar");
        updateCont($idU,$Nom, $login, $password,$role,$avatar);
        header("location:http://localhost/pg/");
        
    }
    if(isset($_GET['ok'])){
        if($_SESSION['type']=='admin') {
            deleteCont($_GET['ok']);
            header("location:http://localhost/pg/?page=listcompte");
        }else {
            //header("location:http://localhost/pg/?page=listcompte");
            echo "<script lang='JavaScript'>alert('non autorisé')</script>";
            
            
        }    
    }
?>