<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajout Classe</title>
    <link rel="stylesheet" href="../../Style/bootstrap-5.1.0/dist/css/bootstrap.min.css">
    
</head>
<body>
<div class="container col-md-6 col-md-offset-3" style="margin-top: -350px;">
            <div class="panel panel-info">
                <div class="panel panel-heading"><h2 style="color: white;">Ajout Classe</h2></div>
                <div class="panel-body" style="background: silver;">
                    <form action="Controller/classe.php" method="POST">
                        <div class="form-group">
                            <label class="control-label" >Libelle</label>
                            <input type="text" class="form-control" required="required" name="libelle">
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Niveau</label>
                            <input type="text"  class="form-control" required="required" name="niveau">
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Filiere</label>
                            <input type="text"  class="form-control" required="required" name="filiere">
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