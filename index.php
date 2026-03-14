<?php
// ============================
// CORS HEADERS
// ============================
error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
$GLOBALS["URL_BASE"] = "https://yehoshoualevivant.com/bymquiz/";
$GLOBALS['USER'] = array();

require 'Router.php';

require 'learning/LearningController.php';
require 'mcq/McqController.php';
require 'account/AccountController.php';
require 'statistics/StatisticsController.php';

$router = new Router();

/************** LEARNING **************/
$router->post('/learning/list', 'LearningController@list');
$router->post('/learning/add', 'LearningController@add');
$router->post('/learning/delete', 'LearningController@delete');
$router->post('/learning/get', 'LearningController@get');

/************** MCQ **************/
$router->post('/mcq/list', 'McqController@list');
$router->post('/mcq/add', 'McqController@add');
$router->post('/mcq/delete', 'McqController@delete');
$router->post('/mcq/get', 'McqController@get');
$router->post('/mcq/addScore', 'McqController@addScore');

/************** ACCOUNT **************/
$router->post('/account/sendCode', 'AccountController@sendCode');
$router->post('/account/login', 'AccountController@login');
$router->post('/account/changeLanguage', 'AccountController@changeLanguage');
$router->post('/account/changeTheme', 'AccountController@changeTheme');
$router->post('/account/getThemeIndex', 'AccountController@getThemeIndex');
$router->post('/account/getLanguages', 'AccountController@getLanguages');

/************** STATISTICS **************/
$router->post('/statistics/allAccessData', 'StatisticsController@allAccessData');
$router->post('/statistics/quiz', 'StatisticsController@quiz');

$router->run();