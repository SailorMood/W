<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<form action="insciption/" method="post">
        <label>Nom <input type="text" name="lastname" value=""></label><br>
        <label>Prenom <input type="text" name="firstname" value=""></label><br>
        <label>Email <input type="mail" name="mail" value=""></label><br>
        <label>Pseudo <input type="text" name="pseudo" value=""></label><br>
        <label>Password </label><input type="password" name="pass"><br>
        <input type="submit" name="sub">
    </form>

<?php $this->stop('main_content') ?>