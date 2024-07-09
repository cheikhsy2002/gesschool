<?php
    function Generer($nomP, $prenomP, $dateNaissance){
        $ch1 = substr($prenomP, 0, 3);
        $ch2 = substr($nomP,0,3);
        $ch3 = substr($dateNaissance, 8, 2);
        $mat = $ch1.'-'.$ch2.'-'.$ch3;
        return $mat;
    }
?>