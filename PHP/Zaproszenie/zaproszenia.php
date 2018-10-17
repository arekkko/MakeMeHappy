<?php include 'controller.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Galeria</title>
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
                <h1>Zobacz galerie</h1>
                
                <div class="gallery">
                <?php 
                foreach($pictures as $picture): ?>
                    <div class="gallery-item">
                        <a href="<?php echo IMGPATH . $picture['filePath']; ?>"><img src="<?php echo IMGPATH . $picture['filePath']; ?>" alt="<?php echo $picture['alt']; ?>" /></a>
                    </div>
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