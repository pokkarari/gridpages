<?php
function db_init(){
    $source = "mysql:host=mysql134.phy.lolipop.lan;dbname=LAA0150954-dbfriekobo";
    $dbuser = "LAA0150954";
    $dbpass = "whonewsm8528";

    $pdo = new PDO($source,$dbuser,$dbpass);


    $pdo->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);

    $pdo -> exec("SET NAMES utf8");

    return $pdo;

}