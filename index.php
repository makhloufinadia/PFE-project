<?php
require('config.php');
require('classes/bootstrap.php');
require('classes/controller.php');
require('classes/Model.php');

require('controller/home.php');
require('controller/shares.php');
require('controller/users.php');

require('Model/home.php');
require('Model/share.php');
require('Model/user.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createcontroller();
if ($controller) {
  $controller->executeAction();
}
