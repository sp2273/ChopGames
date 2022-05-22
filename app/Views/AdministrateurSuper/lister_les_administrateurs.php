<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="container col-md-9">
     <div>essai gijjjjjjjjjjjjjjjj</div>
            <div class="col-md-12 container">
                <br>
                <h2 class="text-primary">Liste des administrateurs</h2>
                <br>
                <table class="table table-hover">
                    <?php
                    foreach ($admins as $admin) {
                    ?>
                        <tr>
                            <td> <?php echo $admin['IDENTIFIANT']; ?></td>
                            <td> <input class="btn btn-primary btn-md" type="submit" name="submit" value="Modifier" />
                            </td>
                            <td> <input class="btn btn-primary btn-md" type="submit" name="submit" value="Supprimer" />
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
git