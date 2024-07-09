<?php
    function addClasse($libelle,$niveau,$filiere){
        $sql = "INSERT INTO classe (libelle, niveau,filiere) VALUES('$libelle','$niveau','$filiere')";
        return executeSQL($sql);
    }
    function listClasse(){
        $sql = "SELECT * FROM classe";
        return executeSQL($sql);
    }
    function deleteClasse($libelle){
        $sql = "DELETE FROM classe WHERE libelle='$libelle';";
        return executeSQL($sql);
    }
    function getClassByid($libelle){
        $sql = "SELECT * FROM classe WHERE libelle='$libelle'";
        return executeSQL($sql);
    }
    function updateClasse($libelle,$niveau,$filiere){
        $sql = "UPDATE classe SET niveau='$niveau', filiere ='$filiere' WHERE libelle = '$libelle'";
        return executeSQL($sql);
    }
    function rechercheC($key){
        $sql = "SELECT * FROM classe WHERE libelle LIKE '%$key%' ";
        return executeSQL($sql);
    }

?>