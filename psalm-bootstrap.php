<?php
// Path to the front controller (this file)
//define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
// This is the line that might need to be changed, depending on your folder structure.
//$pathsPath = realpath(FCPATH . 'app/Config/Paths.php');
// ^^^ Change this if you move your application folder

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// Ensure the current directory is pointing to the front controller's directory
chdir(__DIR__);

// Load our paths config file
require_once 'app/Config/Paths.php';
$paths = new Config\Paths();

require_once 'app/Helpers/view_helper.php';

// Location of the framework bootstrap file.
$app = require 'system/bootstrap.php';