<!DOCTYPE html>
<html lang="en">
<head>
    <title>Module</title>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="../../style/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    <script src="Script/script.js">confirmation</script>
</head>
<body>
    <form method="GET" action="?page=mod">
        <input type="hidden" name="page" value="mod">
        <input type="text" name="key" style="border-radius: 5px;">
        <button type="submit" class="btn btn-info">Search</button>
    </form>
    <div class="container col-md-6 col-md-offset-3" style="margin-top: -450px;">
        <div class="panel panel-info">
            <div class="panel-heading" style="text-align: center; color:white;"><h3>Liste Module</h3></div>
            <div class="panel-body">
                <table class="table table-condensed table-novel table-hover" style="color: white; width: 500px; margin-left: 150px;">
                    <tr class="bg-secondary">
                        <th>#</th>
                        <th>libelle</th>
                        <th>Action1</th>
                        <th>Action2</th>
                    </tr>
                    <?php
                        while ($tab = mysqli_fetch_row($liste)) {
                            echo "<tr>
                                    <td>$tab[0]</td>
                                    <td>$tab[1]</td>
                                    <td><a href='?page=editmod&ok=$tab[0]' class='btn btn-primary'>Modifier</a></td>
                                    <td><a onclick = 'return confirmation();' class='btn btn-danger' href='Controller/module.php?ok=$tab[0]'>suppimer</a></td>
                                 </tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <?php
        require_once 'PHP/footer.php';
    ?>
</body>
</html>
<style>
	.spacer{
    margin-top: 60px;
}