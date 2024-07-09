<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ajout Etudiant</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    </head>
    <body>

        <div class="container col-md-6 col-md-offset-3" style="margin-top: -450px;">
            <div class="panel panel-info">
                <div class="panel panel-heading" style="color: white;"><h2>Ajout etudiant</h2></div>
                <div class="panel-body" style="background: silver;">
                    <form action="controller/etudiant.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" >Nom</label>
                            <input type="text" required="required" class="form-control" name="nomE">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Prenom</label>
                            <input type="text" required="required" class="form-control" name="prenomE">
                        </div>
                        <div class="form-group">
                            <label class="control-label" >DATE</label>
                            <input type="date" required="required" class="form-control" name="dateNaissanceE">
                        </div>
                        <div class="form-group">
                            <label class="control-label">GENRE</label>
                            <br>
                            Masculin<input type="radio" value="M" name="sexeE"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    				        Feminin<input type="radio" value="F" name="sexeE">
                        </div>
                        <div class="form-group">
                            <label class="control-label">competence</label>
                            <select name="competence" required="required" id="" class="form-control">
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
                            <select name="libelle" required="required" class="form-control" id="">
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
                            <div >parcours</div>
                            <textarea name="parcours" ></textarea>
					    </div>
                        <div class="form-group">
                            <label class="control-label" >Avatar</label>
                            <input type="file"  required="required" class="form-control" name="avatar">
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