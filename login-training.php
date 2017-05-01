<?php
//------------------------------------------------------------------------------
// Slim Framework Setup
date_default_timezone_set('America/Los_Angeles');
header('Acces-Control-Allow-Origin: *');
require 'hubbell-api-querys.php';
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
//------------------------------------------------------------------------------
function getConnection(){
  $dbhost = "127.0.0.1";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "login-training";
  $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbh->exec("set names utf8");
  return $dbh;
};

//------------------------------------------------------------------------------

$app = new \Slim\Slim();
//------------------------------------------------------------------------------
// GET
$app->get('/hello_world', 'hello_world');
$app->get('/get_user/:user', 'get_user');
$app->get('/get_answer/:user/:password','get_answer');
//------------------------------------------------------------------------------
// POST
//------------------------------------------------------------------------------
// PUT
//------------------------------------------------------------------------------
// DELETE
//------------------------------------------------------------------------------
// Run
$app->run();
//------------------------------------------------------------------------------
// GET functions
function hello_world() {
  $sql = "SELECT * FROM users";
  $result = query_get($sql);
  echo json_encode($result, JSON_UNESCAPED_UNICODE);
};
function get_user($user) {
  $sql = "SELECT * FROM `users` WHERE `user_name`='$user'";
  $result = query_get($sql);
  echo json_encode($result);
};
function get_answer($user, $password) {
  $sql = "SELECT * FROM `users` WHERE `user_name`='$user' AND `user_password`='$password'";
  $result = query_get($sql);
  if ($result) {    /*echo "{'loginStatus': '".($result ? 1 : 0)."'}";*/
    echo "{'loginStatus': '1'}";
  } else {
    echo "{'loginStatus': '0'}";
  }
};
//------------------------------------------------------------------------------
// POST functions
//------------------------------------------------------------------------------
// PUT functions
//------------------------------------------------------------------------------
//DELETE functions
//------------------------------------------------------------------------------
// EXTRAS functions
//------------------------------------------------------------------------------
?>
