<?php
require './db.php';
require './header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Ajouter un film</h1>
            <form>
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" class="form-control" name="titre">
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="text" class="form-control" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>








<?php require './footer.php'; ?>