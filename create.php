<?php
require './db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
if (
    isset($_POST['titre']) &&
    isset($_POST['annee']) &&
    isset($_FILES['image'])
) {
    $titre = $_POST['titre'];
    $annee = $_POST['annee'];
    // image
    $file_name = $_FILES['image']['name']; // envoie dans la base de donnees
    $file_temp = $_FILES['image']['tmp_name']; // pour deplacer les fichiers

    // variable pour controler l'extension du fichier
    $allowed_ext = array('jpeg', 'jpg', 'png', 'gif'); //extensions autorisées
    $exp = explode('.', $file_name); // decomposer le fichier image
    $ext = end($exp); // prendre le drnier element apres le point
    $path = "images/" . $file_name; // chemin pour stocker les fichiers
    if (in_array($ext, $allowed_ext)) {

        if (move_uploaded_file($file_temp, $path)) {
            $sql = "INSERT INTO film(titre, annee, image) VALUES (:titre, :annee, :image)";
            $statement = $connection->prepare($sql);
            if ($statement->execute(
                [
                    ':titre' => $titre,
                    ':annee' => $annee,
                    ':image' => $path
                ]
            )) {
                print "Ajouté avec succes";
            }
        }
    } else {
        echo "Erreur: pas la bonne extension!!!";
    }
}
require './header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Ajouter un film</h1>
            <form method="post" enctype="multipart/form-data">
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
                    <input type="file" class="form-control" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>








<?php require './footer.php'; ?>