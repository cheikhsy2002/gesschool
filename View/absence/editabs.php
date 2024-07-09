<!DOCTYPE html>
<html lang="en">
    <head>
        <title>edit absence</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    </head>
    <body>
        <div class="container col-md-6 col-md-offset-3" style="margin-top: -350px;">
            <div class="panel panel-info">
                <div class="panel panel-heading"><h2 style="color: white;">edit absence</h2></div>
                <div class="panel-body" style="background: silver;">
                    <form action="controller/absence.php" method="POST">
                        <div class="form-group">
                            <label class="control-label">identifiant</label>
                            <input type="int"  value="<?php echo $link[0];?>" readonly='readonly' class="form-control" name="idA">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Date</label>
                            <input type="date"  value="<?php echo $link[1];?>" class="form-control" name="dateA">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">etudiant</label>
                            <select name="matriculeE" class="form-control" id="">
                                <option value="">choissiez</option>
                                <?php 
                                    require_once 'Model/db.php';
                                    require_once 'Model/etudiant.php';
                                    $l = listEtud();
                                    while ($tab = mysqli_fetch_row($l)) {
                                        echo "<option value ='$tab[0]'>$tab[1] $tab[2]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Cour</label>
                            <select name="idC" class="form-control" id="">
                                <option value="">choissiez</option>
                                <?php 
                                    require_once 'Model/db.php';
                                    require_once 'Model/cour.php';
                                    $l = listCour();
                                    while ($tab = mysqli_fetch_row($l)) {
                                        echo "<option value ='$tab[0]'>$tab[0]</option>";
                                    }
                                ?>
                            </select>
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