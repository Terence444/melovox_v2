<?php
require "content_dynamique/header.php";
include "database/connex_bdd.php";

// Vérifier si une session est déjà active avant d'appeler session_start()
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['user_id'])) {
    $utilisateur_id = $_SESSION['user_id'];

    // Récupérer les informations de l'utilisateur
    $sql = "SELECT u.nom, u.prenom, u.email, a.biographie, a.photo_profil
            FROM utilisateurs u
            LEFT JOIN artistes a ON u.id = a.utilisateur_id
            WHERE u.id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $utilisateur_id);
    $stmt->execute();
    $stmt->bind_result($nom, $prenom, $email, $biographie, $photo_profil);
    $stmt->fetch();
    $stmt->close();
    
?>

        <?php
        // Après avoir récupéré $photo_profil depuis la base de données
        // var_dump($photo_profil); // Pour débogage

        // Chemin du fichier sur le serveur
        $chemin_fichier = __DIR__ . '/' . $photo_profil;

        // Chemin URL pour le navigateur
        $chemin_image = '/' . $photo_profil;
        ?>

    <h1>Bienvenue sur votre espace artiste</h1><br>

    <!-- Affichage de la photo de profil -->
    <div id="profil">
        <?php if (!empty($photo_profil) && file_exists($chemin_fichier)) : ?>
            <img src="<?php echo htmlspecialchars($chemin_image); ?>" alt="Photo de profil">
        <?php else : ?>
            <img src="../fichiers_config/uploads/photos_profil/default_profile.png" alt="Photo de profil par défaut" >
        <?php endif; ?>
        <h3><?php echo htmlspecialchars($prenom . ' ' . $nom); ?></h3>
 <!-- Modif photo de profil -->
        <form action="fichiers_config/traitement_photo_profil.php" method="post" enctype="multipart/form-data">
            <label for="nouvelle_photo">Changer ma photo de profil :</label>
            <input type="file" name="nouvelle_photo" id="nouvelle_photo" accept="image/*" required>
            <input id="form_button" type="submit" value="Mettre à jour">
        </form>
    </div>

   

    <?php
// Messages pour la photo de profil
if (isset($_SESSION['photo_success'])) {
    echo "<p class='success-message'>" . $_SESSION['photo_success'] . "</p>";
    unset($_SESSION['photo_success']);
}
if (isset($_SESSION['photo_error'])) {
    echo "<p class='error-message'>" . $_SESSION['photo_error'] . "</p>";
    unset($_SESSION['photo_error']);
}
?>



    <section id="bio_artiste">
        <h2>Ma biographie</h2>  

        <div id="bio">
            <?php if ($biographie): ?>
                <p><?php echo nl2br(htmlspecialchars($biographie)); ?></p>
            <?php else: ?>
                <p>Votre biographie est vide. Cliquez sur le bouton ci-dessous pour ajouter votre biographie.</p>
            <?php endif; ?>
        </div>

        <button type="button" id="modifier_bio_btn">Modifier ma bio</button>

        <!-- Formulaire de modification de la biographie -->
        <form id="form_bio" action="fichiers_config/traitement_biographie.php" method="post" style="display: none;">
            <textarea name="biographie" rows="10" cols="50" required><?php echo htmlspecialchars($biographie); ?></textarea>
            <br>
            <input type="submit" value="Enregistrer">
            <button type="button" id="annuler_btn">Annuler</button>
        </form>
    </section>
    </section>

    <section id="import_musique">
        <h2>Déposer de nouveaux titres</h2>
        <form action="fichiers_config/traitement_import_musique.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" required>
            </div>
            <div>
                <label for="artiste">Artiste</label>
                <input type="text" id="artiste" name="artiste" required>
            </div>
            <div>
                <label for="album">Album</label>
                <input type="text" id="album" name="album">
            </div>
            <div>
                <label for="genre">Genre</label>
                <input type="text" id="genre" name="genre">
            </div>
            <div>
                <label for="fichier_musique">Fichier Musique (poids maximum du fichier : 2MO)</label>
                <input type="file" id="fichier_musique" name="fichier_musique" accept="audio/*" required>
            </div>
            <div>
                <input type="submit" value="Importer">
            </div>
        </form>
    </section>

    <section>
    <h2>Mes titres en ligne</h2>
    <?php
    // Récupérer la liste des musiques de l'artiste
    $sql = "SELECT titre, album, genre, chemin_fichier, date_import FROM musique WHERE utilisateur_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $utilisateur_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Vérifier s'il y a des musiques
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($musique = $result->fetch_assoc()) {
            echo "<li>";
            echo "<strong>" . htmlspecialchars($musique['titre']) . "</strong> ";
            echo " <br>- Album : " . htmlspecialchars($musique['album']);
            echo " <br>- Genre : " . htmlspecialchars($musique['genre']);
            echo " <br>- Importé le : " . htmlspecialchars($musique['date_import']);

            // Définir le chemin complet du fichier audio
            $chemin_fichier = $musique['chemin_fichier'];

            // Vérifier que le fichier existe
            if (file_exists($chemin_fichier)) {
                // Chemin URL pour le navigateur
                $chemin_audio = '/' . $chemin_fichier;

                // Ajouter un lecteur audio pour écouter le titre
                echo "<br><audio controls>
                        <source src='" . htmlspecialchars($chemin_audio) . "' type='audio/mpeg'>
                        Votre navigateur ne supporte pas la balise audio.
                      </audio>";
            } else {
                echo "Le fichier audio n'existe pas.";
            }

            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Vous n'avez pas encore importé de titres.</p>";
    }
    $stmt->close();
    ?>
</section>


    <?php
        } else {
            // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
            header("Location: ../connexion.php");
            exit();
        }

        require "content_dynamique/footer.php";
    ?>

<?php
// Après l'ouverture de la session et avant d'afficher le contenu
if (isset($_SESSION['import_success'])) {
    echo "<p class='success-message'>" . $_SESSION['import_success'] . "</p>";
    unset($_SESSION['import_success']);
}
?>



<!-- Ajouter le script JavaScript pour gérer l'affichage du formulaire -->
<script>
    document.getElementById('modifier_bio_btn').addEventListener('click', function() {
        document.getElementById('form_bio').style.display = 'block';
        this.style.display = 'none';
    });

    document.getElementById('annuler_btn').addEventListener('click', function() {
        document.getElementById('form_bio').style.display = 'none';
        document.getElementById('modifier_bio_btn').style.display = 'inline';
    });
</script>