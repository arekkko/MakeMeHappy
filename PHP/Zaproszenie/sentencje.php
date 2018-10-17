<?php include 'controller.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sentencje</title>
        <?php include 'includes/head.php'; ?>
    </head>
    <body>
        <header>
          <?php include 'includes/header.php'; ?>
        </header>
          
        <section>
            <aside class="block-left">
                <?php include 'includes/menu.php'; ?>
            </aside>
            
            <article class="block-center">
                <h1>Zobacz sentencje</h1>
                
                <div class="gallery">
                <?php 
                
                    $sentencje = file_get_contents('sentencje.txt'); 
                    
                    $sentencje2 = explode("\n", $sentencje); 
                    
   
                    
                foreach($sentencje2 as $sentencja): ?>
                    <?php  echo $sentencja; ?><br><br>
                <?php endforeach; ?>
                </div>
            </article>
            
            <aside class="block-right">
                <?php include 'includes/news.php'; ?>
            </aside>
        </section>
        <footer>
            <?php include 'includes/footer.php'; ?>
        </footer>
    </body>
</html>

