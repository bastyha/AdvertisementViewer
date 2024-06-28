<?php
require(__DIR__."/../dao/Dao.php");

$dao =Dao::getInstance();
$advertisements = $dao->GetAll(Tables::Advertisements);

require(__DIR__."/../views/advertisements.php");

?>