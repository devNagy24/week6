<?php
/*
 * @Author: Devon Nagy
 * @Version: 1.0
 */

/*
 * Controller of week6 project
 */
session_start();
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an F3 (Fat-Free Framework) object
$f3 = Base::instance();

$f3->route('GET /', function() {
    echo '<h1>Welcome to Fat-Free Framework 🥸</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/home.html');
});