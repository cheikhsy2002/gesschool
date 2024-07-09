<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit module</title>
    <link rel="stylesheet" href="../../style/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
</head>
<body>	
<div class="container col-md-6 col-md-offset-3" style="margin-top: -350px;">
            <div class="panel panel-info">
                <div class="panel panel-heading"><h2 style="color: white;">Edit Module</h2></div>
                <div class="panel-body" style="background:silver;">
                    <form action="Controller/module.php" method="POST">
                      <div class="form-group">
                            <label class="control-label">identifiant</label>
                            <input type="int" class="form-control" value="<?php echo $link[0];?>" readonly="readonly"  name="IdM">
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="color: white;">Libelle</label>
                            <input type="text" class="form-control" value="<?php echo $link[1];?>" name="libelleM" required="required" name="libelle">
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
    .box{
	position: absolute;
	top: 50%;
	left: 20%;
	transform: translate(-50%, -50%);
	width: 400px;
	padding: 40px;
	font-family: 'Times New Roman', Times, serif;
	background: rgba(0,0,0,.8);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.6); 
	border-radius: 10px;
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
.box input[type="reset"]{
	background: transparent;
	border: none;
	margin-top: 20px;
	color: white;
	background: red;
	padding: 10px 20px;
	cursor: pointer;
	border-radius: 6px;
	font-size: 16px;
	font-weight: bold;
}
</style>