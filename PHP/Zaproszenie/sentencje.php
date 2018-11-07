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
                    
   
<<<<<<< HEAD
                    $i = 1; 
                foreach($sentencje2 as $sentencja): ?>
                    <?php  echo $i . '. ' .  $sentencja; ?><br><br>
                    <?php $i++; ?>
=======
                    
                foreach($sentencje2 as $sentencja): ?>
                    <?php  echo $sentencja; ?><br><br>
>>>>>>> d5ad333500430e0b2c804139eca3f51e9e8fd5ca
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

