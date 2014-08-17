<?php
// a setup file that creates a $db variable
require 'includes/setup.php';

// create a gateway with its dependencies
$db = new Db($db_host, $db_user, $db_pass);
$item_factory = new ItemFactory;
$items_gateway = new ItemsGateway($db, $item_factory);
?>