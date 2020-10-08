<?php

function printIfNotNull($data) : string {
    return isset($data) ? htmlentities($data) : '';
}

/*
 * LANDING PAGE CONSTANTS
 */

defined('LANDINGPAGE_ASSETS_RELATIVE_PATH') OR define('LANDINGPAGE_ASSETS_RELATIVE_PATH', '/assets/frontend/homepage/');
defined('LANDINGPAGE_ROOT_PATH') OR define('LANDINGPAGE_ROOT_PATH', '/landing/');

/*
 * FRONTEND PORTAL CONSTANTS
 */

defined('PORTAL_ASSETS_RELATIVE_PATH') OR define('PORTAL_ASSETS_RELATIVE_PATH', '/assets/frontend/portal/');
defined('PORTAL_ROOT_PATH') OR define('PORTAL_ROOT_PATH', '/portal/');
