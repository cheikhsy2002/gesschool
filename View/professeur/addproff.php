<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ajout Proff</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    </head>
    <body>
        <div class="container col-md-6 col-md-offset-3" style="margin-top: -450px;">
            <div class="panel panel-info">
                <div class="panel panel-heading"><h2 style="color: white;">Ajout Proff</h2></div>
                <div class="panel-body" style="background:silver;">
                    <form action="controller/proff.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" >Nom</label>
                            <input  type="text" required="required" class="form-control" name="nomP">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Prenom</label>
                            <input  type="text" required="required" class="form-control" name="prenomP">
                        </div>
                        <div class="form-group">
                            <label class="control-label">DATE</label>
                            <input  type="date" required="required" class="form-control" name="dateNaissance">
                        </div>
                        <div class="form-group">
                            <label class="control-label">GENRE</label>
                            <br>
                            Masculin<input type="radio" value="M" name="sexe"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    				        Feminin<input type="radio" value="F" name="sexe">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Grade</label>
                            <input  type="text" required="required" class="form-control" name="grade">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Classe</label>
                            <select required="required" name="libelle" class="form-control" id="">
                                <option value="">choissiez</option>
                                <?php 
                                    require_once 'model/db.php';
                                    require_once 'model/classe.php';
                                    $l = listClasse();
                                    while ($tab = mysqli_fetch_row($l)) {
                                        echo "<option value ='$tab[0]'>$tab[0]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Module</label>
                            <select required="required" name="idM" class="form-control" id="">
                                <option value="">choissiez</option>
                                <?php 
                                    require_once 'model/db.php';
                                    require_once 'model/module.php';
                                    $l = listMod();
                                    while ($tab = mysqli_fetch_row($l)) {
                                        echo "<option value ='$tab[0]'>$tab[1]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Avatar</label>
                            <input required="required" type="file" class="form-control" name="avatar">
                        </div>
                        <p>&nbsp;</p>
                        <button class="btn btn-danger" type="reset" name="an">ANNULER</button>
                        <button class="btn btn-success" type="submit" name="aj">AJOUTER</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<style>
    
</style>