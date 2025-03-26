<?php require "content_dynamique/header.php"; ?>

<section id="album_ep_single_info">
    <h1>Album/EP/Single</h1>
    <div id="album_info">
        <img id="cover" src="visuel\icons\icone_playlist.png" alt="">
        <div id="artist_name">
            <a href="artist_profile.php"><img id="artist_icon" src="visuel\icons\users icons\alexia.png" alt=""></a>
            <h6>Nom de l’artiste</h6>
        </div>
        <p>2024</p>
        <p>10 titres</p>
        <p>50min 33s</p>
    </div>

    <div id="button_icons">
        <button id="shuffle" class="big_buttons"><a href=""></a>
        </button>

        <button id="previous" class="small_buttons"></button>

        <button id="play" class="big_buttons"></button>
        <button id="skip" class="small_buttons"></button>
        <button id="plus" class="small_buttons"> </button>
    </div>

</section>


<section id="tracklist">

    <div class="tracklist">
        <ol>
            <li>
                <span class="playing fa fa-play"></span>
                <span class="track-number">1</span>
                <span class="track-name">Amerika</span>
                <span class="track-duration">4:00</span>
            </li>
            <li>
                <span class="not-playing fa fa-play"></span>
                <span class="track-number">2</span>
                <span class="track-name">Something to Believe In</span>
                <span class="track-duration">3:48</span>
            </li>
            <li>
                <span class="not-playing fa fa-play"></span>
                <span class="track-number">3</span>
                <span class="track-name">Elsewhere</span>
                <span class="track-duration">3:44</span>
            </li>
            <li>
                <span class="not-playing fa fa-play"></span>
                <span class="track-number">4</span>
                <span class="track-name">Mr. Know-It-All</span>
                <span class="track-duration">3:11</span>
            </li>
            <li>
                <span class="not-playing fa fa-play"></span>
                <span class="track-number">5</span>
                <span class="track-name">Jungle Youth</span>
                <span class="track-duration">3:40</span>
            </li>
            <li>
                <span class="not-playing fa fa-play"></span>
                <span class="track-number">6</span>
                <span class="track-name">Titus Was Born</span>
                <span class="track-duration">4:02</span>
            </li>
            <li>
                <span class="not-playing fa fa-play"></span>
                <span class="track-number">7</span>
                <span class="track-name">Repeat</span>
                <span class="track-duration">3:05</span>
            </li>
            <li>
                <span class="not-playing fa fa-play"></span>
                <span class="track-number">8</span>
                <span class="track-name">Silvertongue</span>
                <span class="track-duration">3:17</span>
            </li>
            <li>
                <span class="not-playing fa fa-play"></span>
                <span class="track-number">9</span>
                <span class="track-name">Art Exhibit</span>
                <span class="track-duration">4:03</span>
            </li>
            <li>
                <span class="not-playing fa fa-play"></span>
                <span class="track-number">10</span>
                <span class="track-name">Nothing's Over</span>
                <span class="track-duration">4:24</span>
            </li>
            <li>
                <span class="not-playing fa fa-play"></span>
                <span class="track-number">11</span>
                <span class="track-name">Home of the Strange</span>
                <span class="track-duration">2:36</span>
            </li>
        </ol>
    </div>

</section>

<?php require "content_dynamique/footer.php"; ?>