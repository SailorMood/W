<?php $this->layout('layout', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>

<form action="connexion/" method="post">
    <label>Pseudo <input type="text" name="pseudo" value=""></label><br>
    <label>Mot de Passe <input type="text" name="mdp" value=""></label><br>
    <input type="submit" name="sub">
</form>

<?php $this->stop('main_content') ?>
