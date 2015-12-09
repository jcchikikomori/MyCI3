<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['APP_HOST'] = 'http://' . $_SERVER['HTTP_HOST'] .'/myci';
$config['URL'] = $config['APP_HOST'];

//loading assets
$config['ASSETS_URL'] = $config['URL'].'/assets';

