<?php
if(IN_MANAGER_MODE != 'true' || $modx != true) exit('Error: You don\'t have permissions!');
$dir = basename(dirname(__FILE__));
define('ROOT', $modx->config['base_path'] . 'assets/modules/' . $dir);
define('BASE', $modx->config['site_url'] . 'assets/modules/' . $dir);

require_once(ROOT . '/classes/Controller.php');
$controller = new \EvoYaMetrika\Controller($modx);