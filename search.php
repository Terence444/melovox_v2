<?php require "content_dynamique/header.php"; ?>

<main>
    <div id="search_area">
        <span class="material-symbols-outlined">search</span>

        <form action="search_results.php" method="GET">
            <input type="text" name="query" placeholder="Tapez votre recherche...">
            <button type="submit">Rechercher</button>
        </form>
    </div>


    <div id="filters">
        <div>
            <input type="checkbox" name="Artiste" id="Artiste">
            <label class="text_filters" for="Artiste"> Artiste</label>
        </div>

        <div>
            <input type="checkbox" name="Titre" id="Titre">
            <label class="text_filters" for="Titre">Titre</label>
        </div>

        <div>
            <input type="checkbox" name="Albums" id="Albums">
            <label class="text_filters" for="Albums">Albums</label>
        </div>

        <div>
            <input type="checkbox" name="Playlist" id="Playlist">
            <label class="text_filters" for="Playlist">Playlist</label>
        </div>
    </div>

    <div id="zone_result">
        <h3>Résultats de votre recherche</h3>
        <div id="result_search"></div>
    </div>
</main>
<footer>
    <ul>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
    </ul>

    <ul>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
    </ul>

    <ul>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
    </ul>

    <ul>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
    </ul>
</footer>
</body>

</html>