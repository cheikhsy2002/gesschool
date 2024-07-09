<?php
    function addCont($Nom, $login,$password,$role,$avatar){
        $sql = "INSERT INTO `utilisateur` (`idU`, `nom`, `login`, password, `type`,avatar) VALUES (NULL, '$Nom', '$login', '$password', '$role','$avatar');";
        return executeSQL($sql);
    }
    function listCont(){
        $sql = "SELECT * FROM utilisateur";
        return executeSQL($sql);
    }
    function deleteCont($idU){
        $sql = "DELETE FROM utilisateur WHERE idU=$idU;";
        return executeSQL($sql);
    }
    function getContByid($idU){
        $sql = "SELECT * FROM utilisateur WHERE idU=$idU";
        return executeSQL($sql);
    }
    function updateCont($idU,$Nom, $login, $password,$role,$avatar){
        $sql = "UPDATE utilisateur SET nom='$Nom', login ='$login', password='$password',type='$role', avatar='$avatar' WHERE idU = $idU";
        return executeSQL($sql);
    }
    function rechercheU($key){
        $sql = "SELECT * FROM utilisateur WHERE nom LIKE '%$key%' ";
        return executeSQL($sql);
    }
?>