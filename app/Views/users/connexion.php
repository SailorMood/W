<?php $this->layout('layout', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>


<form action="index.php" method="post">
    <label>Pseudo <input type="text" name="username" value=""></label><br>
    <label>Email <input type="email" name="email" value=""></label><br>
    <label>Mot de Passe <input type="password" name="password" value=""></label><br>
    <input type="submit" name="sub">
</form>

<?php $this->stop('main_content') ?>
