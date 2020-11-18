<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/** Controller Web **/
$route['index']='web/index';
$route['about']='web/about';
//$route['about-us']='web/about';  /** Repeat **/

$route['our-services']='web/services';
$route['our-portfolio']='web/portfolio'; 
//$route['portfolio']='web/portfolio'; /** Repeat **/
$route['contact-us']='web/contact';
$route['blogs']='web/blog';
//$route['blog']='web/blog'; /** Repeat **/
$route['contact-form']='web/form';
$route['career']='web/career';
$route['ecommerce-development']='web/ecommerce';
$route['website-designing-development']='web/website';
//$route['website-development']='web/website'; /** Repeat **/
$route['mobile-app-development']='web/mobileApp';
$route['software-development']='web/software';
$route['cloud-support']='web/cloud';
$route['api-integration']='web/api';
$route['blog/([^/]+)']='web/detailedView/$1';

 
/*Extra Links */
$route['web-development-company-in-raipur']='web/link1';
$route['web-development-company-in-durg']='web/link2';
$route['web-development-company-in-bhilai']='web/link3';
$route['web-development-company-in-korba']='web/link4';
$route['web-development-company-in-pune']='web/link5';
$route['web-development-company-in-bangalore']='web/link6';


//$route['online-marketing-company-raipur']='web/link1'; /** Repeat **/
//$route['website-designing-in-raipur']='web/link1'; /** Repeat **/

// $route['web-development/web-development-company-in-raipur']='web/link1';
// $route['web-development/web-development-company-in-durg']='web/link2';
// $route['web-development/web-development-company-in-bhilai']='web/link3';
// $route['web-development/web-development-company-in-korba']='web/link4';
// $route['web-development/web-development-company-in-pune']='web/link5';
// $route['web-development/web-development-company-in-bangalore']='web/link6';