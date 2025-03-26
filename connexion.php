<?php require "content_dynamique/header.php"; ?>

<body>

<section>
    <div id="image_area">
        <img id="image" src="../visuel/image/social_music_network_2.jpg" alt="">
    </div>
    <span class="vertical_line"></span>

    <!-- <div id="fast_signin">
        <h3>Connexion rapide</h3>
        <p>Lier votre compte avec un réseau social</p>
        <div id="button_icon">
            <button><a href=""><img class="social_network" src="../visuel/icons/buttons_icons/Bouton_facebook.png"
                        alt=""></a></button>
            <button><a href=""><img class="social_network" src="../visuel/icons/buttons_icons/Bouton_Gmail.png"
                        alt=""></a></button>
            <button><a href=""><img class="social_network" src="../visuel/icons/buttons_icons/Bouton_X.png"
                        alt=""></a></button>
        </div> 
      <img id="decorative_line" src="visuel/image/Decoration.png" alt=""> -->

        <form action="fichiers_config/traitement_connexion.php" method="post">
            <h1>Veuillez renseigner les champs pour vous connecter !</h1>
            <div id="email_area">
                <label for="email">Adresse Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div id="password_area">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" minlength="8" required>
                <a href="">Mot de passe oublié?</a>
            </div>
            <div id="checkbox">
                <input type="checkbox" name="connect">
                <label for="connect">Rester connecté</label>
            </div>
            <div id="sign_in">
                <input id="connect" type="submit" value="Se connecter">
            </div>
            <p>Pas encore inscrit? <a href="inscription.php">Inscrivez-vous ici</a></p>
        </form>

    </div>
</section>

<?php require "content_dynamique/footer.php"; ?>