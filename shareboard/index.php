<?php
//Start Sessions on each page using sessions
session_start();

// Include Config
require('config.php');
require('classes/messages.php');

require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');


require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');


$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}