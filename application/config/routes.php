<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Admin
$route['admin/(:any)'] = 'admin/$1';


$route['open_lock'] = 'welcome/open_lock';
$route['mulya_admin_aqiqah'] = 'welcome/to_lock';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
