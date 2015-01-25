<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['sleep'] = "first/zzz";                  // remap to first::zzz
$route['lock/em/up'] = "welcome/shucks";        // remap to welcome::shucks
$route['show/(:num)'] = "first/gimme/$1";       // remap to first::gimme/3
$route['dunno'] = "guess";                      // remap to dunno
$route['\w{4}/bingo'] = "bingo";                // remap to bingo controller using regex ([4 letters]/bingo)
$route['comp(:num)/(:any)'] = "bingo/wisdom";   // remap to bingo::wisdom, using regex (comp + digits / *)
$route['default_controller'] = "welcome";       // default
$route['404_override'] = '';                    // 404?


/* End of file routes.php */
/* Location: ./application/config/routes.php */