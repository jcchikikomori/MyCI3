<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['APP_SUB_FOLDER'] = dirname($_SERVER['SCRIPT_NAME']);
$config['APP_HOST'] = 'http://' . $_SERVER['HTTP_HOST'] . $config['APP_SUB_FOLDER'];
//$config['APP_HOST'] = 'http://' . $_SERVER['HTTP_HOST'] .'';
$config['URL'] = substr($config['APP_HOST'], 0, -1);

//loading assets
$config['ASSETS_URL'] = $config['URL'].'/assets';

