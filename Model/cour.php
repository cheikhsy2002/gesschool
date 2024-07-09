<?php
    function addCour($dateCo,$libelle,$matriculeP,$idM,$semestre,$nbrh,$hdebut,$hfin){
        $sql = "INSERT INTO cour (dateCo,libelle,matriculeP,idM,semestre,nbrheure,hdebut,hfin) VALUES('$dateCo','$libelle','$matriculeP',$idM,$semestre,$nbrh,'$hdebut','$hfin')";
        return executeSQL($sql);
    }
    function listCour(){
        $sql = "SELECT * FROM cour";
        return executeSQL($sql);
    }
    function deleteCour($idC){
        $sql = "DELETE FROM cour WHERE idC=$idC;";
        return executeSQL($sql);
    }
    function getCourByid($idC){
        $sql = "SELECT * FROM cour WHERE idC=$idC";
        return executeSQL($sql);
    }
    function updateCour($idC,$dateCo,$libelle,$matriculeP,$idM,$semestre,$nbrh,$hdebut,$hfin){
        $sql = "UPDATE cour SET dateCo='$dateCo',libelle='$libelle',matriculeP='$matriculeP',idM=$idM,semestre='$semestre',nbrh=$nbrh,hdebut='$hdebut',hfin='$hfin' WHERE idC = $idC;";
        
        return executeSQL($sql);
    }
    function rechercheCO($key){
        $sql = "SELECT * FROM cour WHERE libelle LIKE '%$key%' ";
        return executeSQL($sql);
    }

?>