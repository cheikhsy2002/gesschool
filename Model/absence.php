<?php
    function addAbs($dateA,$matriculeE,$idC){
        $sql = "INSERT INTO absence (dateA,matriculeE,idC) VALUES('$dateA','$matriculeE',$idC)";
        return executeSQL($sql);
    }
    function listAbs(){
        $sql = "SELECT * FROM absence ";
        return executeSQL($sql);
    }
    function deleteAbs($idA){
        $sql = "DELETE FROM absence  WHERE idA=$idA;";
        return executeSQL($sql);
    }
    function getAbsByid($idA){
        $sql = "SELECT * FROM absence  WHERE idA=$idA";
        return executeSQL($sql);
    }
    function updateAbs($idA,$dateA,$matriculeE,$idC){
        $sql = "UPDATE absence  SET dateA='$dateA',matriculeE='$matriculeE',idC=$idC WHERE idA = $idA";
        return executeSQL($sql);
    }
    function rechercheA($key){
        $sql = "SELECT * FROM absence WHERE matriculeE LIKE '%$key%' ";
        return executeSQL($sql);
    }

?>