<h2>SONIC ET SES COPAINS</h2>


<?php foreach ($characters as $character) : ?>
<article>
        <h3>
        <?= $character->getName(); ?> - <?php foreach($types as $type):?>
        <?= $type->getId()==$character->getTypeId()? $type->getName().'</h3>' :''?>
        <?php endforeach;?>
        <p><?= $character->getDescription(); ?></p>
    </div>

        <img src="<?= $absoluteURL ?>/assets/images/<?= $character->getPicture() ?>" alt="<?= $character->getName(); ?>">
    
</article>

<?php endforeach ?>

</section>
</div>

