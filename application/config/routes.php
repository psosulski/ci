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
|	http://codeigniter.com/user_guide/general/routing.html
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


$route['news/create'] = 'news/create';

$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';

$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';




//with request method
$route['someting']['put'] = '';

/*
//url with 'journals' => 'blogs'
$route['journals'] = 'blogs';
$route['blog/joe'] = 'blogs/users/34';
//url with product as 1st and anyting as 2nd will be routed to lookup
$route['product/(:any)'] = 'catalog/product_lookup';
//A URL with “product” as the first segment, and a number in the second will be remapped to the “catalog” class and the “product_lookup_by_id” method passing in the match as a variable to the method.
$route['product/(:num)'] = 'catalog/product_lookup_by_id/$1';

//
$route['products/([a-zA-Z]+)/edit/(\d+)'] = function ($product_type, $id)
{
        return 'catalog/product_edit/' . strtolower($product_type) . '/' . $id;
};
*/