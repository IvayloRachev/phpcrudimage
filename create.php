<?php
require './db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
if(
    isset($_POST['titre']) &&
    isset($_POST['annee']) &&
    isset($_POST['image'])
    ){
        $titre = $_POST['titre'];
        $annee = $_POST['annee'];
        $image = $_POST['image'];
        $sql = "INSERT INTO film(titre, annee, image) VALUES (:titre, :annee, :image)";
        $statement = $connection->prepare($sql);
        if($statement->execute(
            [
                ':titre' => $titre,
                ':annee' => $annee,
                ':image' => $image
                ]
        )){
           print "Ajouté avec succes";
        }
}
require './header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Ajouter un film</h1>
            <form method="post">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" class="form-control" name="titre">
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" name="annee">
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