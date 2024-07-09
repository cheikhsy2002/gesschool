<!DOCTYPE html>
<html lang="en">
<head>
    <title>Module</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../style/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    <script src="Script/script.js">confirmation</script>
</head>
<body>
    <form method="GET" action="?page=etud">
        <input type="hidden" name="page" value="etud">
        <input type="text" name="key" style="border-radius: 5px;">
        <button type="submit" class="btn btn-info">Search</button>
    </form>
    <div class="container col-md-7 " style="margin-top: -450px; margin-left: 240px;">
        <div class="panel panel-info">
            <div class="panel-heading"  style="text-align: center;"><h3 style="color: white;">Liste etudiant</h3></div>
            <div class="panel-body">
                <table class="table table-condensed table-novel table-hover" style="color: white; width: 500px; margin-left: 30px;">
                    <tr class="bg-secondary">
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>dateNaissance</th>
                        <th>sexe</th>
                        <th>competence</th>
                        <th>classe</th>
                        <th>parcours</th>
                        <th>avatar</th>
                        <th>Action1</th>
                        <th>Action2</th>
                    </tr>
                    <?php
                        while ($tab = mysqli_fetch_row($liste)) {
                            echo "<tr>
                                    <td>$tab[0]</td>
                                    <td>$tab[1]</td>
                                    <td>$tab[2]</td>
                                    <td>$tab[3]</td>
                                    <td>$tab[4]</td>
                                    <td>$tab[6]</td>
                                    <td>$tab[5]</td>
                                    <td>$tab[7]</td>
                                    <td><img height=60px src='avatar/$tab[8]'></td>
                                    <td><a href='?page=editetud&ok=$tab[0]' class='btn btn-primary'>Modifier</a></td>
                                    <td><a onclick = 'return confirmation();' class='btn btn-danger' href='Controller/etudiant.php?ok=$tab[0]'>suppimer</a></td>
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