<?php
require('config.php');
require('Classes/bootstrap.php');
require('Classes/controller.php');
require('Classes/Model.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createcontroller();
if ($controller) {
  $controller->executeAction();
}
