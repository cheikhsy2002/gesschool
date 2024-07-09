<?php
    function addProff($nomP,$prenomP,$dateNaissance,$sexe,$grade,$libelle,$idM,$avatar){
        require_once '../controller/generermat.php';
        $matriculeP = Generer($nomP, $prenomP, $dateNaissance);
        $sql = "INSERT INTO professeur (matriculeP,nomP,prenomP,dateNaissance,sexe,grade,libelle,idM,avatar) 
        VALUES('$matriculeP','$nomP','$prenomP','$dateNaissance','$sexe','$grade','$libelle',$idM,'$avatar')";
        return executeSQL($sql);
    }
    function listProff(){
        $sql = "SELECT * FROM professeur";
        return executeSQL($sql);
    }
    function deleteProff($matriculeP){
        $sql = "DELETE FROM professeur WHERE matriculeP='$matriculeP';";
        return executeSQL($sql);
    }
    function getProffByid($matriculeP){
        $sql = "SELECT * FROM professeur WHERE matriculeP='$matriculeP'";
        return executeSQL($sql);
    }
    function updateProff($matriculeP,$nomP,$prenomP,$dateNaissance,$sexe,$grade,$libelle,$idM,$avatar){
        require_once '../controller/generermat.php';
        $sql = "UPDATE professeur SET nomP='$nomP',prenomP='$prenomP',dateNaissance='$dateNaissance',sexe='$sexe',grade='$grade',libelle='$libelle',idM=$idM,avatar='$avatar' WHERE matriculeP = '$matriculeP'";
        //$sql = "UPDATE `professeur` SET `sexe` = 'M' WHERE `professeur`.`matriculeP` = 'ibr-SY-05';";
        return executeSQL($sql);
    }
    function rechercheP($key){
        $sql = "SELECT * FROM professeur WHERE matriculeP LIKE '%$key%' ";
        return executeSQL($sql);
    }

?>