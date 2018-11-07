<?php
/* W części nowości wyświetl za pomocą skryptu jedno z sześciu losowych
zaproszeń. Grafika ulega zmianie przy odświeżeniu strony. */

$arrayCont = sizeof($pictures); 
$selected_Item = rand(0, --$arrayCont);
?>
    <h3>Obrazek dnia</h3>
    <div class="small-gallery">
        <a href="<?php echo IMGPATH . $pictures[$selected_Item]['filePath']; ?>"><img src="<?php echo IMGPATH . $pictures[$selected_Item]['filePath']; ?>" alt="<?php echo $pictures[$selected_Item]['alt']; ?>" /></a> 
    </div>
