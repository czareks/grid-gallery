<?php
include_once('functions.php')
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoja galeria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="desktop">
            <ul>
                <li class="active"><a href="/galeria/">Strona główna</a></li>
                <li><a href="/galeria/banery/">Banery</a></li>
                <li><a href="/galeria/cyfrowe/">Cyfrowe</a></li>
                <li><a href="/galeria/fotografie/">Fotografie</a></li>
                <li><a href="/galeria/midjourney/">Midjourney</a></li>
                <li><a href="/galeria/portfolio/">Portfolio</a></li>
            </ul>
        </nav>
        <nav class="mobile">
        <label for="menu-toggle" class="menu-icon" onclick="toggleMenu()">&#9776;</label>
            <ul id="mobile-menu">
                <li class="active"><a href="/galeria/">Strona główna</a></li>
                <li><a href="/galeria/banery/">Banery</a></li>
                <li><a href="/galeria/cyfrowe/">Cyfrowe</a></li>
                <li><a href="/galeria/fotografie/">Fotografie</a></li>
                <li><a href="/galeria/midjourney/">Midjourney</a></li>
                <li><a href="/galeria/portfolio/">Portfolio</a></li>
            </ul>
        </nav>

    </header>
    <section id="title">
        <h1>Wszystkie obrazy</h1>
    </section>
    <section id="grid-gallery">
        <?php
            $folderGalerii = $_SERVER['DOCUMENT_ROOT'] . '/galeria'; // Ustaw ścieżkę do folderu głównego galerii
            $urlFolderu = '/galeria'; // Ustaw odpowiednią ścieżkę URL do folderu głównego galerii
            
            wypiszZdjeciaZFolderow($folderGalerii, $urlFolderu);
            
        ?>
        <div id="lightbox" style="display:none;">
        <div id="lightbox-content">
            <img id="lightbox-image" src="" alt="">
        </div>
    </div>
    </section>
    <footer>
        <p>&copy; 2023 Cezary Śliwiński. Wszelkie prawa zastrzeżone.</p>
    </footer>


    <script src="script.js"></script>
</body>
</html>