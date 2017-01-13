<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>


<form action="index.php" method="post">

        <label>Email <input type="email" name="email" value=""></label><br>
        <label>Pseudo <input type="text" name="username" value=""></label><br>
        <label>Password </label><input type="password" name="password"><br>
        <input type="submit" name="inscription">
    </form>

<?php $this->stop('main_content') ?>