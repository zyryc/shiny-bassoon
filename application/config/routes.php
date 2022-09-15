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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'app';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['make-order'] = 'app/make_order';
$route['store-order'] = 'app/save_order';
$route['my-orders'] = 'app/my_orders';
$route['order-view/(:any)'] = 'app/order_view/$1';
$route['order-edit/(:any)'] = 'app/edit_order/$1';
$route['order-update/(:any)'] = 'app/update_order/$1';
$route['order-delete/(:any)'] = 'app/delete_order/$1';

$route['manage-post']="Post/ManagePost";
$route['change-status-post/(:num)']="Post/changeStatusPost/$1";
$route['edit-post/(:num)']="Post/editPost/$1";
$route['edit-post-post']="Post/editPostPost";
$route['delete-post/(:num)']="Post/deletePost/$1";
$route['add-post']="Post/addPost";
$route['add-post-post']="Post/addPostPost";
$route['view-post/(:num)']="Post/viewPost/$1";
// $route['order'] = 'order';
// $route['reset_password/(:any)'] = 'basic/reset_password/$1';
// $route['reset_password'] = 'basic/reset_password';
$route['forgot_password'] = 'basic/forgot_password';
$route['logout'] = 'basic/logout';
$route['login'] = 'basic/login';
$route['register'] = 'basic/register';
