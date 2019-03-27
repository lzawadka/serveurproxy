<?php
/**
 * Created by PhpStorm.
 * User: LouisHETIC
 * Date: 26/03/2019
 * Time: 15:42
 */
$pdo = new PDO(
    'mysql: host=localhost; dbname=proxy;',
    'root',
    '',
    [
        // le tableau est en option ça renvoit une erreur is qq chose se passe pas bien
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]
);
$test = $_SERVER['QUERY_STRING'];
echo "<img src='$test' ></img>";