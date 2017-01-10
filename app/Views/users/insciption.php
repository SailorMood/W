<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<form action="inscription.php" method="post">
        <label>Nom <input type="text" name="nom" value=""></label><br>
        <label>Prenom <input type="text" name="prenom" value=""></label><br>
        <label>Email <input type="mail" name="email" value=""></label><br>
    </form>

<?php $this->stop('main_content') ?>