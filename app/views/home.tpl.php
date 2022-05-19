<h2>SONIC ET SES COPAINS</h2>

<div class = "articles">
<section class="container">

<?php foreach ($characters as $character) : ?>
<article>
    <div class="left">
        <h3>
        <?= $character->getName(); ?> - <?php foreach($types as $type):?>
        <?= $type->getId()==$character->getTypeId()? $type->getName().'</h3>' :''?>
        <?php endforeach;?>
        <p><?= $character->getDescription(); ?></p>
    </div>

    <div class="right">
        <img src="<?= $absoluteURL ?>/assets/images/<?= $character->getPicture() ?>" alt="<?= $character->getName(); ?>">
    </div>
    
</article>

<?php endforeach ?>

</section>
</div>

