<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['packages/(:any)'] = 'packages/view/$1';
$route['packages'] = 'packages/index';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
