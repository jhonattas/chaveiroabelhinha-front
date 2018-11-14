<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'welcome';

$route['residencial'] = 'welcome/residencial';
$route['automotiva'] = 'welcome/automotiva';
$route['cofres'] = 'welcome/cofres';
$route['obrigado'] = 'welcome/obrigado';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
