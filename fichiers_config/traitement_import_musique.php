<?php
include "../database/connex_bdd.php";
session_start();

if (isset($_SESSION['user_id'])) {
    $utilisateur_id = $_SESSION['user_id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Récupérer les données du formulaire
        $titre = $_POST['titre'];
        $artiste = $_POST['artiste'];
        $album = $_POST['album'];
        $genre = $_POST['genre'];

        // Gérer l'upload du fichier de musique
        if (isset($_FILES['fichier_musique']) && $_FILES['fichier_musique']['error'] === UPLOAD_ERR_OK) {
            // Créer un nom de fichier unique pour éviter les conflits
            $chemin_fichier = 'uploads/musique/' . uniqid() . '_' . basename($_FILES['fichier_musique']['name']);

            // Vérifier que le dossier existe, sinon le créer
            if (!is_dir('uploads/musique/')) {
                mkdir('uploads/musique/', 0777, true);
            }

            // Déplacer le fichier téléchargé vers le dossier de destination
            if (move_uploaded_file($_FILES['fichier_musique']['tmp_name'], $chemin_fichier)) {
                // Préparer et exécuter la requête d'insertion
                $sql = "INSERT INTO musique (utilisateur_id, titre, artiste, album, genre, chemin_fichier)
                VALUES (?, ?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("isssss", $utilisateur_id, $titre, $artiste, $album, $genre, $chemin_fichier);

                if ($stmt->execute()) {
                    $_SESSION['import_success'] = "Musique importée avec succès!";
                    header("Location: ../espace_perso_artiste.php");
                    exit();
                } else {
                    echo "Erreur lors de l'import : " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Erreur lors du déplacement du fichier.";
            }
        } else {
            echo "Erreur lors du téléchargement du fichier. Code d'erreur : " . $_FILES['fichier_musique']['error'];
            echo "<pre>";
            print_r($_FILES['fichier_musique']);
            echo "</pre>";
        }
    }
} else {
    header("Location: ../connexion.php");
    exit();
}

$conn->close();
?>
