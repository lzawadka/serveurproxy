<?php
/**
 * Created by PhpStorm.
 * User: LouisHETIC
 * Date: 26/03/2019
 * Time: 15:42
 */

$pdo = new PDO(
  'mysql: host=localhost;dbname=proxy;',
  'root',
  '',
  [
      // le tableau est en option ça renvoit une erreur is qq chose se passe pas bien
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  ]
);
$test = $_SERVER['REQUEST_URI'];
$try = explode('index.php/', $test);
echo "<img src='$try[1]' ></img>";

require_once "Mobile_Detect.php";

$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
  echo 'mobile';
}
 
// Any tablet device.
else if( $detect->isTablet() ){
  echo 'tablette';
}else{
  echo 'desktop';
}

