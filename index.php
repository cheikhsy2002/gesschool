<?php session_start();

    if(!isset($_SESSION['login'])) {
        header('location:connect.php');
        exit();
    }else{
        if (isset($_GET['page'])){
            require_once 'menu.php';
            switch ($_GET['page']) {

                case 'Classe':
                    if ($_SESSION['type']=='Etudiant') {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                        
                    }else{
                        require_once 'Model/db.php';
                        require_once 'Model/classe.php';
                        $liste = listClasse();
                        if (isset($_GET['key'])){
                            $liste = rechercheC($_GET['key']);
                        }
                        require_once 'View/classe/ajoutCl.php';
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'addClasse':
                    if ($_SESSION['type']=='admin') {
                        require_once 'View/classe/add.php';
                        require_once 'PHP/footer.php';
                        break;
                    }else{
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'editClasse':
                    if($_SESSION['type']=='admin'){
                        require_once 'Model/db.php';
                        require_once 'Model/classe.php';
                        $tab = getClassByid($_GET['ok']);
                        $link = mysqli_fetch_row($tab);
                        require_once 'View/classe/editcl.php';
                        require_once 'PHP/footer.php';
                        break;
                    }else {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'mod':
                    if ($_SESSION['type']=='admin') {
                        require_once 'Model/db.php';
                        require_once 'Model/module.php';
                        $liste = listMod();
                        if (isset($_GET['key'])){
                            $liste = rechercheM($_GET['key']);
                        }
                        require_once 'View/module/mod.php';
                        require_once 'PHP/footer.php';
                        break;
                    }else {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }
                
                case 'addmod':
                    if ($_SESSION['type']=='admin') {
                        require_once 'View/module/add.php';
                        require_once 'PHP/footer.php';
                        break;
                    } else {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'editmod':
                    if ($_SESSION['type']=='admin') {
                        require_once 'Model/db.php';
                        require_once 'Model/module.php';
                        $tab = getModByid($_GET['ok']);
                        $link = mysqli_fetch_row($tab);
                        require_once 'View/module/editmod.php';
                        require_once 'PHP/footer.php';
                        break;
                    } else {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'proff':
                    if ($_SESSION['type']=='admin' || $_SESSION['type']=='Responsable') {
                        require_once 'Model/db.php';
                        require_once 'Model/proff.php';
                        $liste = listproff();
                        if (isset($_GET['key'])){
                            $liste = rechercheP($_GET['key']);
                        }
                        require_once 'View/professeur/proff.php';
                        require_once 'PHP/footer.php';
                        break;
                    } else {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'addproff':
                    if ($_SESSION['type']=='admin' || $_SESSION['type']=='Responsable') {
                        require_once 'View/professeur/addproff.php';
                        require_once 'PHP/footer.php';
                        break;
                    } else {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'editproff':
                    if ($_SESSION['type']=='admin' || $_SESSION['type']=='Responsable') {
                        require_once 'Model/db.php';
                        require_once 'Model/proff.php';
                        $tab = getproffByid($_GET['ok']);
                        $link = mysqli_fetch_row($tab);
                        require_once 'View/professeur/editproff.php';
                        require_once 'PHP/footer.php';
                        break;
                    } else {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'etud':
                    if ($_SESSION['type']=='Etudiant') {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    } else {
                        require_once 'Model/db.php';
                        require_once 'Model/etudiant.php';
                        $liste = listEtud();
                        if (isset($_GET['key'])){
                            $liste = rechercheE($_GET['key']);
                        }
                        require_once 'View/etudiant/etud.php';
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'addetud':
                    if ($_SESSION['type']=='admin' || $_SESSION['type']=='Assistant') {
                        require_once 'View/etudiant/addetud.php';
                        require_once 'PHP/footer.php';
                        break;
                    } else {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'editetud':
                    if ($_SESSION['type']=='admin' || $_SESSION['type']=='Assistant') {
                        require_once 'Model/db.php';
                        require_once 'Model/etudiant.php';
                        $tab = getEtudByid($_GET['ok']);
                        $link = mysqli_fetch_row($tab);
                        require_once 'View/etudiant/editetud.php';
                        require_once 'PHP/footer.php';
                        break;
                    } else {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'cour':
                    if ($_SESSION['type']=='proff'){
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }else{
                        require_once 'Model/db.php';
                        require_once 'Model/cour.php';
                        $liste = listCour();
                        if (isset($_GET['key'])){
                            $liste = rechercheCO($_GET['key']);
                        }
                        require_once 'View/cour/cour.php';
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'addcour':
                    if ($_SESSION['type']=='admin' || $_SESSION['type']=='Responsable') {
                        require_once 'View/cour/addcour.php';
                        require_once 'PHP/footer.php';
                        break;
                    } else {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'editcour':
                    if ($_SESSION['type'=='admin'] || $_SESSION['type']=='Responsable') {
                        require_once 'Model/db.php';
                        require_once 'Model/cour.php';
                        $tab = getCourByid($_GET['ok']);
                        $link = mysqli_fetch_row($tab);
                        require_once 'View/cour/editcour.php';
                        require_once 'PHP/footer.php';
                        break;
                    }else{
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'abs':
                    if ($_SESSION['type']=='Responsable') {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }else{
                        require_once 'Model/db.php';
                        require_once 'Model/absence.php';
                        $liste = listAbs();
                        if (isset($_GET['key'])){
                            $liste = rechercheA($_GET['key']);
                        }
                        require_once 'View/absence/abs.php';
                        require_once 'PHP/footer.php';
                        break;    
                    }

                case 'addabs':
                    if ($_SESSION['type']=='Etudiant' || $_SESSION['type']=='Responsable') {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    } else {
                        require_once 'View/absence/addabs.php';
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'editabs':
                    if ($_SESSION['type']=='Etudiant' || $_SESSION['type']=='Responsable') {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }else{
                        require_once 'Model/db.php';
                        require_once 'Model/absence.php';
                        $tab = getAbsByid($_GET['ok']);
                        $link = mysqli_fetch_row($tab);
                        require_once 'View/absence/editabs.php';
                        require_once 'PHP/footer.php';
                        break;   
                    }

                case 'compte':
                    require_once 'Model/db.php';
                    require_once 'Model/utilisateur.php';
                    //$tab = getContByid($_GET['ok']);
                    //$link = mysqli_fetch_row($tab);
                    require_once 'View/utilisateur/compte.php';
                    require_once 'PHP/footer.php';
                    break;
                
                case 'addcompte':
                    if ($_SESSION['type']=='admin') {
                        require_once 'View/utilisateur/inscription.php';
                        require_once 'PHP/footer.php';
                        break; 
                    }else{
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }

                case 'listcompte':
                    if ($_SESSION['type']=='admin') {
                        require_once 'Model/db.php';
                        require_once 'Model/utilisateur.php';
                        $liste = listCont();
                        if (isset($_GET['key'])){
                            $liste = rechercheU($_GET['key']);
                        }
                        require_once 'View/utilisateur/liste.php';
                        require_once 'PHP/footer.php';
                        break;
                    }else {
                        echo "<script lang='JavaScript'>alert('Acces non autorisé')</script>";
                        require_once 'PHP/footer.php';
                        break;
                    }
            }
        }else{
            require_once 'menu.php';
            require_once 'PHP/footer.php';
        }
    }
    
?>