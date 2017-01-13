<?php $this->layout('layout', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>


<form  method="post">
    <label>Email <input type="email" name="email" value=""></label><br>
    <label>Mot de Passe <input type="password" name="password" value=""></label><br>
    <input type="submit" name="connexion">
</form>

<?php $this->stop('main_content') ?>
