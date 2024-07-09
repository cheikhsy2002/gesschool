<?php
    function addEtud($nomE,$prenomE,$dateNaissanceE,$sexeE,$competence,$libelle,$parcours,$avatar){
        require_once '../controller/generermat.php';
        $matriculeE = Generer($nomE, $prenomE, $dateNaissanceE);
        $sql = "INSERT INTO etudiant (matriculeE,nomE,prenomE,dateNaissanceE,sexe,libelle,competence,parcours,avatar) 
        VALUES('$matriculeE','$nomE','$prenomE','$dateNaissanceE','$sexeE','$libelle','$competence','$parcours','$avatar')";
        return executeSQL($sql);
    }
    function listEtud(){
        $sql = "SELECT * FROM etudiant";
        return executeSQL($sql);
    }
    function deleteEtud($matriculeE){
        $sql = "DELETE FROM etudiant WHERE matriculeE='$matriculeE';";
        return executeSQL($sql);
    }
    function getEtudByid($matriculeE){
        $sql = "SELECT * FROM etudiant WHERE matriculeE='$matriculeE'";
        return executeSQL($sql);
    }
    function updateEtud($matriculeE,$nomE,$prenomE,$dateNaissanceE,$sexeE,$competence,$libelle,$parcours,$avatar){
        require_once '../controller/generermat.php';
        $sql = "UPDATE etudiant SET nomE='$nomE',prenomE='$prenomE',dateNaissanceE='$dateNaissanceE',sexe='$sexeE',competence='$competence',libelle='$libelle',parcours='$parcours',avatar='$avatar' WHERE matriculeE = '$matriculeE';";
        return executeSQL($sql);
    }
    function rechercheE($key){
        $sql = "SELECT * FROM etudiant WHERE matriculeE LIKE '%$key%' OR nomE LIKE '%$key%' ";
        return executeSQL($sql);
    }

?>