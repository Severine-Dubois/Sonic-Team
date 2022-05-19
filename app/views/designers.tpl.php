<h2>Sont beaux les designers hein ?</h2>

<div class="container">
<section>
<?php for ($i = 1; $i < count($designers) +1; $i++) : ?>

<article>

    <div class="left">
        <h3><?= $designers[$i]['name']; ?> - <?= $designers[$i]['in_japanese']; ?> </h3>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus amet consectetur itaque? Dicta quas consectetur nostrum exercitationem. Animi, atque dolore!</p>
        <p>Tu veux plus d'info ? Clique <a href="<?= $designers[$i]['url']; ?>" target="_blank">ICI</a> !</p> 
    </div>

    <div class="right">
        <img src="<?= $designers[$i]['picture']; ?>" alt="<?= $designers[$i]['name']; ?>">
        
    </div>

</article>

<?php endfor; ?>

</section>
</div>