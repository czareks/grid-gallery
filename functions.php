<?php

function wypiszZdjeciaZFolderu($sciezkaFolderu, $urlFolderu) {
    $pliki = scandir($sciezkaFolderu);

    foreach ($pliki as $plik) {
        $sciezkaPliku = $sciezkaFolderu . '/' . $plik;
        if (is_file($sciezkaPliku)) {
            $rozszerzenie = pathinfo($sciezkaPliku, PATHINFO_EXTENSION);
            if ($rozszerzenie !== 'php') {
                $urlPliku = str_replace($sciezkaFolderu, $urlFolderu, $sciezkaPliku);
                echo '<div class="gallery-item"><img class="gallery-image" src="'.$urlPliku.'" data-src="'.$urlPliku.'" /></div>';
            }
        }
        
    }
    echo '<div id="lightbox" style="display:none;">
    <div id="lightbox-content">
      <img id="lightbox-image" src="" alt="">
    </div>';
}


function wypiszZdjeciaZFolderow($folder, $urlFolderu) {

    $pliki = scandir($folder);

    foreach ($pliki as $plik) {
        if ($plik === '.' || $plik === '..') {
            continue;
        }

        $sciezkaPliku = $folder . '/' . $plik;

        if (is_file($sciezkaPliku)) {
            $rozszerzenie = pathinfo($sciezkaPliku, PATHINFO_EXTENSION);

            if ($rozszerzenie !== 'php' && $rozszerzenie !== 'js' && $rozszerzenie !== 'css') {
                $urlPliku = $urlFolderu . '/' . basename($plik);
                echo '<div class="gallery-item"><img class="gallery-image" src="'.$urlPliku.'" data-src="'.$urlPliku.'" /></div>';
            }
        } elseif (is_dir($sciezkaPliku)) {
            $nowyUrlFolderu = $urlFolderu . '/' . $plik;
            wypiszZdjeciaZFolderow($sciezkaPliku, $nowyUrlFolderu);
        }
    }
}


?>