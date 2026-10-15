<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['contact'] = 'Testpage';
$route['inquiry'] = 'Testpage/test';

//url last segment is contact then it will call the contact method of Testpage controller


$route['employee'] = 'frontend/employeeController/index';
$route['employee/add'] = 'frontend/employeeController/add';
$route['employee/store'] = 'frontend/employeeController/store';
$route['employee/login'] = 'frontend/employeeController/login';
$route['employee/edit/(:num)'] = 'frontend/employeeController/edit/$1';
$route['employee/update/(:num)'] = 'frontend/employeeController/update/$1';
$route['employee/delete/(:num)'] = 'frontend/employeeController/delete/$1';
$route['employee/test'] = 'frontend/employeeController/test';







