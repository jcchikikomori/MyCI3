<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['APP_SUB_FOLDER'] = dirname($_SERVER['SCRIPT_NAME']);
$config['APP_HOST'] = 'http://' . $_SERVER['HTTP_HOST'] . $config['APP_SUB_FOLDER'];
//$config['APP_HOST'] = 'http://' . $_SERVER['HTTP_HOST'] .'';
$config['URL'] = $config['APP_HOST'];

//loading assets
$config['ASSETS_URL'] = $config['URL'].'/assets';

