<?php $this->layout('layout', ['title' => 'Poster Articles']) ?>

<?php $this->start('main_content') ?>
    <h1>Ajouter article</h1>
    <form action="poster/" method="post">
        <label>Titre</label><input type="text" name="titre"><br>
        <label>Contenu</label><input type="text" name="contenu"><br>
        <label>chapo</label><textarea name="chapo" rows="10" cols="50"></textarea><br>
        <input type="submit" name="sendArticle" value="Envoyer">
    </form>

<?php $this->stop('main_content') ?>