<?php namespace Config;

use CodeIgniter\Router\RouteCollection;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->group('/', function (RouteCollection $routes) {
    $routes->get('', 'Landing::index');

    $routes->get('about', 'Landing::about');

    $routes->get('services', 'Landing::services');

    $routes->get('gallery', 'Landing::gallery');

    $routes->get('news', 'Landing::news');

    $routes->get('career', 'Landing::career');

    $routes->get('contact', 'Landing::contact');
});


$routes->group('/portal', [
        'namespace' => 'App\Controllers\Portal',
        'filter' => 'login'
    ], function (RouteCollection $routes) {
    //Default route
    $routes->get('', 'Auth::login');

    //Test Controllers
    $routes->environment('development', function(RouteCollection $routes) {
        $routes->get('test', 'Test::index', ['as' => RoutesConstant::TEST]);
    });

    // Login/out
    $routes->get('login', 'Auth::login', ['as' => RoutesConstant::LOGIN]);
    $routes->post('login', 'Auth::attemptLogin');
    $routes->get('logout', 'Auth::logout', ['as' => RoutesConstant::LOGOUT] );

    // Registration
    $routes->get('register', 'Auth::register', ['as' => RoutesConstant::REGISTER]);
    $routes->post('register', 'Auth::attemptRegister');

    // Activation
    $routes->get('activate-account', 'Auth::activateAccount', ['as' => RoutesConstant::ACTIVATE_ACCOUNT]);
    $routes->get('resend-activate-account', 'Auth::resendActivateAccount', ['as' => RoutesConstant::RESEND_ACCOUNT_ACTIVATION]);

    // Forgot/Resets
    $routes->get('forgot-password', 'Auth::forgotPassword', ['as' => RoutesConstant::FORGOT_PASS]);
    $routes->post('forgot-password', 'Auth::attemptForgot');
    $routes->get('reset-password', 'Auth::resetPassword', ['as' => RoutesConstant::RESET_PASS]);
    $routes->post('reset-password', 'Auth::attemptReset');

    //Dashboard
    $routes->get('dashboard', 'Dashboard::index', ['as' => RoutesConstant::DASHBOARD]);

    //Vacancy
    $routes->group('vacancy', function(RouteCollection $routes) {
        $routes->get('', 'Vacancy::index');

        $routes->get('detail/(:alphanum)', 'Vacancy::detail/$1', ['as' => RoutesConstant::VACANCY_DETAIL]);
    });

    //Profile
    $routes->group('profile', function(RouteCollection $routes) {
        $routes->get('', 'Profile::index');

        $routes->get('edit', 'Profile::edit', ['as' => RoutesConstant::PROFILE_EDIT]);

        $routes->get('skill-repo', 'Profile::skillRepo', ['as' => RoutesConstant::PROFILE_SKILL_REPO]);

        $routes->get('download-resume', function() {
            echo "this route not yet implemented!";
        }, ['as' => RoutesConstant::PROFILE_DOWNLOAD_RESUME]);

        $routes->get('print-resume', function() {
            echo "this route not yet implemented!";
        }, ['as' => RoutesConstant::PROFILE_PRINT_RESUME]);


        $routes->environment('development', function(RouteCollection $routes) {
            $routes->get('save', 'Profile::save');
        });

        $routes->post('save', 'Profile::save');
    });

    //Settings
    $routes->get('settings', function() {
        echo "This route is not yet implemented!";
    }, ['as' => RoutesConstant::SETTINGS]);
});



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
