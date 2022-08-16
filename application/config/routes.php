<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = 'Error404';
$route['translate_uri_dashes'] = FALSE;


$route[''] = 'Home';
$route['about'] = 'Home/about';
$route['services'] = 'Home/services';
$route['portfolio'] = 'Home/portfolio';
$route['contact'] = 'Home/contact';
$route['submit'] = 'Home/enquiry';
$route['privacy-policy'] = 'Home/privacy';
$route['sitemap.xml'] = 'Sitemap';
$route['sitemap'] = 'Sitemap';
