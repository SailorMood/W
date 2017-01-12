<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<?php
use \W\Model\LoginModel;
LoginModel::getDbh();
?>

<form action="index.php" method="post">

        <label>Email <input type="mail" name="email" value=""></label><br>
        <label>Pseudo <input type="text" name="username" value=""></label><br>
        <label>Password </label><input type="password" name="password"><br>
        <input type="submit" name="subm">
    </form>

<?php $this->stop('main_content') ?>