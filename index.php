<?php
require './header.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Liste des films</h1>

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Année</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>cobra</td>
                        <td>1993</td>
                        <td><img src="./images/cobra.jpg" width="200"></td>
                        <td>
                            <button type="button" class="btn btn-success">Editer</button>
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>

    </div>


</div>






<?php
require './footer.php';
?>