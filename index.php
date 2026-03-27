<?php
// ============================
// CORS HEADERS
// ============================
error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$GLOBALS["URL_BASE"] = "https://yehoshoualevivant.com/bymquiz";
$GLOBALS['USER'] = array();
$GLOBALS['MUSIC'] = array( ($GLOBALS["URL_BASE"] . "/audio/instrumental01.mp3"),  ($GLOBALS["URL_BASE"] . "/audio/instrumental02.mp3"),  ($GLOBALS["URL_BASE"] . "/audio/instrumental03.mp3"),  ($GLOBALS["URL_BASE"] . "/audio/instrumental04/.mp3") );

require 'Router.php';

require 'learning/LearningController.php';
require 'mcq/McqController.php';
require 'account/AccountController.php';
require 'statistics/StatisticsController.php';
require 'constants/ConstantsController.php';

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

/************** CONSTANTS **************/
$router->get('/constants/difficulties', 'ConstantsController@difficulties');
$router->get('/constants/biblesections', 'ConstantsController@biblesections');
$router->get('/constants/biblebooks', 'ConstantsController@biblebooks');
$router->get('/constants/typeknowledge', 'ConstantsController@typeknowledge');

/*$router->post('/constants/difficulties', 'ConstantsController@difficulties');
$router->post('/constants/biblesections', 'ConstantsController@biblesections');
$router->post('/constants/biblesections', 'ConstantsController@biblesections');
$router->post('/constants/typeknowledge', 'ConstantsController@typeknowledge');*/

$router->run();