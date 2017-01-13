<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 13/01/2017
 * Time: 10:08
 */

namespace Model;
use W\Model\Model;

use \W\Model\ConnectionModel;

class insertUserModel extends Model
{
    public function insertUser($newUser){
        $dbhConnect = new ConnectionModel();
        $instance = $dbhConnect -> getDbh();
        // requête d'ajout d'un article
        $sql = "INSERT INTO user (username, email, password)
    VALUES ('".$newUser['username']."','".$newUser['email']."','".$newUser['password']."')";

        $insertSuccess = $instance->exec($sql);
    }
}