<?php
    function addMod($libelle){
        $sql = "INSERT INTO module (libelleM) VALUES('$libelle')";
        return executeSQL($sql);
    }
    function listMod(){
        $sql = "SELECT * FROM module";
        return executeSQL($sql);
    }
    function deleteMod($IdM){
        $sql = "DELETE FROM module WHERE idM=$IdM;";
        return executeSQL($sql);
    }
    function getModByid($IdM){
        $sql = "SELECT * FROM module WHERE idM=$IdM";
        return executeSQL($sql);
    }
    function updateMod($IdM,$libelleM){
        $sql = "UPDATE `module` SET `libelleM` = '$libelleM' WHERE `module`.`idM` = $IdM;";
        return executeSQL($sql);
    }
    function rechercheM($key){
        $sql = "SELECT * FROM module WHERE libelleM LIKE '%$key%' ";
        return executeSQL($sql);
    }
?>