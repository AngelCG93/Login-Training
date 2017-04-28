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
  $dbpass = ""
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
//------------------------------------------------------------------------------
// POST
//------------------------------------------------------------------------------
// PUT
//------------------------------------------------------------------------------
// DELETE
//------------------------------------------------------------------------------
// Run
$app->run();


 ?>
