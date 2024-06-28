<?php 
require(__DIR__."/../dao/Dao.php");

$dao =Dao::getInstance();
$users = $dao->GetAll(Tables::Users);
require(__DIR__."/../views/users.php");



?>