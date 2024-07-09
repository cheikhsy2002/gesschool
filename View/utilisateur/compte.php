<!DOCTYPE html>
<html>
<head>
	<title>ajout compte</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../Style/bootstrap-5.1.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
</head>
<body>
        <div class="container col-md-6 col-md-offset-3" style="margin-top: -460px;">
            <div class="panel panel-info">
                <div class="panel panel-heading" style="color: white;"><h2>Modification Compte </h2></div>
                <div class="panel-body" style="background:silver;">
                    <form action="controller/utilisateur.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label class="control-label">identifiant</label>
                            <input type="text" class="form-control" value="<?= $_SESSION['idU'];?>" readonly="readonly" required="required" name="idU">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nom</label>
                            <input type="text" class="form-control" value="<?= $_SESSION['nom'];?>" required="required" name="Nom">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Login</label>
                            <input type="text" class="form-control" value="<?= $_SESSION['login'];?>" required="required" name="login">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input type="password" class="form-control" value="<?=$_SESSION['password']?>" required="required" name="password">
                        </div>
                        <div class="form-group">
                        <label for="">Type de compte</label>
                        <input name="role" type="text" required="required" class="form-control" readonly="readonly" value="<?= $_SESSION['type'];?>">
                        </div>
                        <div class="form-group">
                          <label for="" class="control-label">Avatar</label>
                          <input type="file" class="form-control" value="<?=$_SESSION['avatar'];?>" name="avatar">
                        </div>
                        
                        <button class="btn btn-danger" type="reset" name="an">ANNULER</button>
                        <button class="btn btn-success" type="submit" name="mo">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>