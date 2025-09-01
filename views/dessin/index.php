

<?php foreach($dessins as $article): ?>

    <div class="lechat" id="inspi">
        <h2 class="blanc"><?= $article['titre'] ?></h2>
            <p class='blanc tc'><?= $article['text'] ?></p>
            <div class='flexrow blanc'> 
            <?php foreach($article['images'] as $image):?>          
                <img src= '<?= $image['url'] ?>' class='imbig' alt= '<?= $image['alt'] ?>' />
            <?php endforeach ?>
            </div>
    </div>
<?php endforeach ?>
