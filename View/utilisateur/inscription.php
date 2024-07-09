<!DOCTYPE html>
<html>
<head>
	<title>ajout compte</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../Style/bootstrap-5.1.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
</head>
<body>
<div class="container col-md-6" style="margin-top: -350px;">
            <div class="panel panel-info">
                <div class="panel panel-heading"><h2 style="color: white;">Ajout Compte </h2></div>
                <div class="panel-body" style="background:transparent;">
                    <form action="controller/utilisateur.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label">Nom</label>
                            <input type="text" class="form-control" required="required" name="Nom">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Login</label>
                            <input type="text" class="form-control" required="required" name="login">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input type="password" class="form-control" required="required" name="password">
                        </div>
                        <div class="form-group">
                        <label for="" >Type de compte</label>
                        <select name="role" id="" required="required"  class="form-control" type="text">
                            <option value="" >faite votre Choix</option>
                            <option value="admin">Administrateur</option>
                            <option value="Etudiant">Etudiant</option>
                            <option value="Assistant">AC</option>
                            <option value="Responsable">RP</option>
                            <option value="proff">Professeur</option>
                        </select>
                        </div>
                        <div class="form-group">
                          <label for="" class="control-label">Avatar</label>
                          <input type="file" class="form-control" name="avatar">
                        </div>
                        
                        <button class="btn btn-danger" type="reset" name="an">ANNULER</button>
                        <button class="btn btn-success" type="submit" name="aj">AJOUTER</button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
<style>

a{
	color: blue;
	right: 50px;
}
.box{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 400px;
	padding: 40px;
	font-family: Forte;
	background: rgba(0,0,0,.8);
	box-sizing: border-box;/* permet d ajuster la taille du box*/
	box-shadow: 0 15px 25px rgba(0,0,0,.6); /* permet de donner une ombre*/
	border-radius: 10px;/* arrondir les angle*/
}
.box h1{
	text-align: center;
	color: white;
	padding: 0;
	font-weight: bold;/*permet de mettre en gras*/
}
.box .inBox{
	position: relative;	
}
.box .inBox input{
	width: 100%;
	padding: 10px 0;
	font-size: 16px;
	color: white;
	border-bottom: 30px;
	border: none;
	border-bottom: 1px solid white;
	outline: none;
	background: transparent;
}
.box input[type="submit"]{
	background: transparent;
	border: none;
	margin-top: 20px;
	color: white;
	background: green;
	padding: 10px 20px;
	cursor: pointer;
	border-radius: 6px;
	font-size: 16px;
	font-weight: bold;
}
</style>