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

$f3->route('GET /', function($f3) {
    echo '<h1>Welcome to Fat-Free Framework 🥸</h1>';
    // Add data to F3 "hive"
    $f3->set('color', 'green');
    $f3->set('food', 'pizza');
    $f3->set('title','Week6');
    $f3->set('temp', 67);

    // Radius variable
    $f3->set('radius', 20);

    // Array of fruits
    $fruits = array('banana', 'strawberry', 'kiwi');
    $f3->set('fruits', $fruits);

    // Array of vegetables
    $veggies = array('broccoli', 'carrots', 'cauliflower');
    $f3->set('veggies', $veggies);

    // Array of vegetables
    $cupcakes = array('choc-mocha'=> 'Chocolate Mocha', 'straw-cheese'=>'Strawberry Cheesecake',
        'blue-lemon'=>'Blueberry Lemon Cheesecake');
    $f3->set('cupcakes', $cupcakes);

    // Display a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

// Run the F3 instance
$f3->run();