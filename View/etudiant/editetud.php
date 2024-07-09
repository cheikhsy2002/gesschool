<!DOCTYPE html>
<html lang="en">
    <head>
        <title>edit Etudiant</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    </head>
    <body>
        <div class="container col-md-6 col-md-offset-3" style="margin-top: -450px;">
            <div class="panel panel-info">
                <div class="panel panel-heading"><h2 style="color: white;">etud etudiant</h2></div>
                <div class="panel-body"style="background: silver;">
                    <form action="controller/etudiant.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <img src="avatar/<?php echo $link[8];?>" width="60px"style="margin-left: 45%;" alt="">
                            <label class="control-label" >Avatar</label>
                            <input  type="file" value="<?php $link[8];?>"  class="form-control" name="avatar">
                    </div>
                    <div class="form-group">
                            <label class="control-label" >Matricule</label>
                            <input type="text"  required="required" value="<?php echo $link[0];?>" readonly="readonly" class="form-control" name="matriculeE">
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Nom</label>
                            <input type="text" required="required" value="<?php echo $link[1];?>" class="form-control" name="nomE">
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Prenom</label>
                            <input type="text"  required="required" value="<?php echo $link[2];?>" class="form-control" name="prenomE">
                        </div>
                        <div class="form-group">
                            <label class="control-label">DATE</label>
                            <input type="date" required="required" value="<?php echo $link[3];?>" class="form-control" name="dateNaissanceE">
                        </div>
                        <div class="form-group">
                            <label class="control-label">GENRE</label>
                            <br>
                            Masculin<input type="radio" value="M" name="sexeE"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    				        Feminin<input type="radio" value="F" name="sexeE">
                        </div>
                        <div class="form-group">
                            <label class="control-label" >competence</label>
                            <select name="competence"  required="required" id="" class="form-control">
                                <option value="">faites votre choix</option>
                                <option value="Maquettage et Prototypage">Maquettage et Prototypage</option>
                                <option value="Intégration Web">Intégration Web</option>
                                <option value="Réaliser des Composants Dynamiques avec PHP">Réaliser des Composants Dynamiques avec PHP</option>
                                <option value="Réaliser des Composants d'accès Base de Données">Réaliser des Composants d'accès Base de Données</option>
                                <option value="Déployer une Application">Déployer une Application</option>
                                <option value="Gestion de Projet Agiles">Gestion de Projet Agiles</option>
                                <option value="Versionning">Versionning</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label" >Classe</label>
                            <input type="text"  name="libelle"  required="required" class="form-control" readonly value="<?= $link[5] ?>">
                        </div>
                        <div class="form-group">
                            <div >parcours</div>
                            <textarea name="parcours"> <?php echo $link[7];?></textarea>
					    </div>
                        
                        <p>&nbsp;</p>
                        <button class="btn btn-danger" type="reset" name="an">ANNULER</button>
                        <button class="btn btn-success" type="submit" name="mo">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<style>
    
</style>