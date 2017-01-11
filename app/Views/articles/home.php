<?php $this->layout('layout', ['title' => 'Articles']) ?>

<?php $this->start('main_content') ?>
    <h2>YEAH</h2>
    <p>Vous avez atteint la page d'articles. Bravo.</p>

    <a href="afficher/" title="afficher">Afficher les articles</a><br>
    <a href="poster/" title="poster">Poster l'article de votre choix</a><br>
    <a href="modifier/" title="modif">Modifier l'article de votre choix</a>

<?php $this->stop('main_content') ?>