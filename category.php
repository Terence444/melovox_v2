<?php require "content_dynamique/header.php"; ?>

<section id="playlist">
    <h1 id="categoryTitle">POP</h1>
    <h3>Playlist populaire du genre</h3>
    <div id="playlist_area">
        <div>
            <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
            <a href="playlist.php">Playlist N°1</a>
        </div>

        <div>
            <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
            <a href="playlist.php">Playlist N°2</a>
        </div>

        <div>
            <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
            <a href="playlist.php">Playlist N°3</a>
        </div>

        <div>
            <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
            <a href="playlist.php">Playlist N°4</a>
        </div>

        <div>
            <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
            <a href="playlist.php">Playlist N°5</a>
        </div>

        <div>
            <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
            <a href="playlist.php">Playlist N°6</a>
        </div>

        <div>
            <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
            <a href="playlist.php">Playlist N°7</a>
        </div>

        <div>
            <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
            <a href="playlist.php">Playlist N°8</a>
        </div>

        <div>
            <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
            <a href="playlist.php">Playlist N°9</a>
        </div>

        <div>
            <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
            <a href="playlist.php">Playlist N°10</a>
        </div>

    </div>
</section>

<section id="artist_albums">
    <h3>Artiste populaire du genre</h3>
    <div id="artist_area">

        <div id="artist_icon">
            <a href="artist_profile.php"><img src="visuel\icons\users icons\alexia.png" alt=""></a>
            <a href="artist_profile.php"> Alexia </a>
        </div>

        <div id="artist_icon">
            <a href="artist_profile.php"><img src="visuel\icons\users icons\drew.png" alt=""></a>
            <a href="artist_profile.php">Drew</a>
        </div>

        <div id="artist_icon">
            <a href="artist_profile.php"><img src="visuel\icons\users icons\Catalia.png" alt=""></a>
            <a href="artist_profile.php">Catalia</a>
        </div>

        <div id="artist_icon">
            <a href="artist_profile.php"><img src="visuel\icons\users icons\charles.png" alt=""></a>
            <a href="artist_profile.php">Charles</a>
        </div>

    </div>

    <div id="albums_area">
        <h3>Albums/EP/Single populaire du genre</h3>

        <div id="albums_icons_area">
            <div>
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png"
                        alt=""></a>
                <a href="albums_ep_single.php">Album N°1</a>
            </div>

            <div>
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png"
                        alt=""></a>
                <a href="albums_ep_single.php">Album N°2</a>
            </div>

            <div>
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png"
                        alt=""></a>
                <a href="albums_ep_single.php">Album N°3</a>
            </div>

            <div>
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png"
                        alt=""></a>
                <a href="albums_ep_single.php">Album N°4</a>
            </div>

            <div>
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png"
                        alt=""></a>
                <a href="albums_ep_single.php">EP n°1</a>
            </div>

            <div>
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png"
                        alt=""></a>
                <a href="albums_ep_single.php">EP n°2</a>
            </div>

            <div>
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png"
                        alt=""></a>
                <a href="albums_ep_single.php">EP n°3</a>
            </div>

            <div>
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png"
                        alt=""></a>
                <a href="albums_ep_single.php">EP n°4</a>
            </div>

            <div>
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png"
                        alt=""></a>
                <a href="albums_ep_single.php">Single n°1</a>
            </div>

            <div>
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png"
                        alt=""></a>
                <a href="albums_ep_single.php">Single n°2</a>
            </div>

        </div>
</section>
<script>
    // Récupérer la catégorie sélectionnée
    const category = sessionStorage.getItem('selectedCategory');
    
    // Mettre à jour le titre avec le nom de la catégorie
    if (category) {
      document.getElementById('categoryTitle').innerText = category;
    }
  </script>

<?php require "content_dynamique/footer.php"; ?>