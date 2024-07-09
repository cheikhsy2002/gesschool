<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajout Classe</title>
    <link rel="stylesheet" href="../../style/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
</head>
<body>	
    <form method="GET" action="?page=Classe">
        <input type="hidden" name="page" value="Classe">
        <input type="text" name="key" style="border-radius: 5px;">
        <button type="submit" class="btn btn-info">Search</button>
    </form>
    <div class="container" style="margin-top: -450px;">
        <div class="panel panel-info" style="margin-top: 50px;" >
            <div class="panel-heading" style="text-align: center; color:white"><h3>Liste Classe</h3></div>
            <div class="panel-body">
                <table class="table table-condensed table-novel table-hover" style="color: white; width: 500px; margin-left: 340px;">
                    <tr class="bg-secondary">
                        <th>libelle</th>
                        <th>niveau</th>
                        <th>filiere</th>
                        <th>Action1</th>
                        <th>Action2</th>
                    </tr>
                    <?php
                    $liste = listClasse();
                        while ($tab = mysqli_fetch_row($liste)) {
                            echo "<tr>
                                    <td>$tab[0]</td>
                                    <td>$tab[1]</td>
                                    <td>$tab[2]</td>
                                    <td><a href='?page=editClasse&ok=$tab[0]' class='btn btn-primary'>Modifier</a></td>
                                    <td><a onclick = 'return confirmation();' class='btn btn-danger' href='Controller/classe.php?ok=$tab[0]'>suppimer</a></td>
                                 </tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
