<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Cour</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    </head>
    <body>
        <div class="container col-md-6 col-md-offset-3" style="margin-top: -450px;">
            <div class="panel panel-info">
                <div class="panel panel-heading"><h2 style="color: white;">Edit Cour</h2></div>
                <div class="panel-body" style="background: silver;">
                    <form action="controller/cour.php" method="POST">
                        <div class="form-group">
                            <label class="control-label" >identifiant</label>
                            <input type="int"  value="<?php echo $link[0];?>" readonly="readonly" class="form-control" name="idC">
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Date</label>
                            <input type="date"  required="required" value="<?php echo $link[1];?>" class="form-control" name="dateCo">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label" >Classe</label>
                            <select name="libelle"  required="required" class="form-control" id="">
                                <option value="">choissiez</option>
                                <?php 
                                    require_once 'Model/db.php';
                                    require_once 'Model/classe.php';
                                    $l = listClasse();
                                    while ($tab = mysqli_fetch_row($l)) {
                                        echo "<option value ='$tab[0]'>$tab[0]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label" >professeur</label>
                            <select name="matriculeP"  required="required" class="form-control" id="">
                                <option value="">choissiez</option>
                                <?php 
                                    require_once 'Model/db.php';
                                    require_once 'Model/proff.php';
                                    $l = listProff();
                                    while ($tab = mysqli_fetch_row($l)) {
                                        echo "<option value ='$tab[0]'>$tab[1] $tab[2]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label" >Module</label>
                            <select name="idM"  required="required" class="form-control" id="">
                                <option value="">choissiez</option>
                                <?php 
                                    require_once 'Model/db.php';
                                    require_once 'Model/module.php';
                                    $l = listMod();
                                    while ($tab = mysqli_fetch_row($l)) {
                                        echo "<option value ='$tab[0]'>$tab[1]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Semestre</label>
                            <input type="int"  required="required" value="<?php echo $link[2];?>" class="form-control" name="semestre">
                        </div>
                        <div class="form-group">
                            <label class="control-label" >nombre heure</label>
                            <input type="int"  required="required" value="<?php echo $link[3];?>" class="form-control" name="nbrh">
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Heure de debut</label>
                            <input type="time"  required="required" value="<?php echo $link[4];?>" class="form-control" name="hdebut">
                        </div>
                        <div class="form-group">
                            <label class="control-label" >heure de fin</label>
                            <input type="time"  required="required" value="<?php echo $link[5];?>" class="form-control" name="hfin">
                        </div>
                        <p>&nbsp;</p>
                        <button class="btn btn-danger" type="reset" name="an">ANNULER</button>
                        <button class="btn btn-success" type="submit" name="mo">Mofifier</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<style>
    
</style>