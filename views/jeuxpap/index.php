<?php foreach($jeuxpaps as $article): ?>

    <div class="lechat">
    <h2 class='blanc tc'><?= $article['titre'] ?></h2>
            <p class='blanc tc'><?= $article['text'] ?></p>
            <?php foreach($article['images'] as $image):?>                    
                        <div class='flexcol blanc'>
                            <p class='gau'><?= $image['alt'] ?></p>
                            <img src= '<?= $image['url'] ?>' class='border' alt= '<?= $image['alt'] ?>' />
                        </div>
            <?php endforeach ?>
            </div>
    </div>
<?php endforeach ?>
