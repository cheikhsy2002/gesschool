<!DOCTYPE html>
<html lang="en">
<head>
    <title>compte</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../style/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    <script src="Script/script.js">confirmation</script>
</head>
<body>
    <form method="GET" action="?page=listcompte">
        <input type="hidden" name="page" value="listcompte">
        <input type="text" name="key" style="border-radius: 5px;">
        <button type="submit" class="btn btn-info">Search</button>
    </form>
    <div class="container col-md-6 " style="margin-top: -450px; margin-left: 300px;" >
        <div class="panel panel-info">
            <div class="panel-heading" style="color: white;"><h2>Liste Compte</h2></div>
            <div class="panel-body">
                <table class="table table-condensed table-novel table-hover" style="color: white;">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>login</th>
                        <th>password</th>
                        <th>role</th>
                        <th>avatar</th>
                        <th>Action1</th>
                    </tr>
                    <?php
                        while ($tab = mysqli_fetch_row($liste)) {
                            echo "<tr>
                                    <td>$tab[0]</td>
                                    <td>$tab[1]</td>
                                    <td>$tab[2]</td>
                                    <td>$tab[3]</td>
                                    <td>$tab[5]</td>
                                    <td><img height=60px src='avatar/$tab[4]'></td>
                                    <td><a onclick = 'return confirmation();' class='btn btn-secondary' href='Controller/utilisateur.php?ok=$tab[0]'>suppimer</a></td>
                                 </tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>
<style>
	.spacer{
    margin-top: 60px;
}
</style>