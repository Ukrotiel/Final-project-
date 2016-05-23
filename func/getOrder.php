<?php



function getOrder()
{
    $oDb = new PDO("mysql:host=localhost;dbname=web_app;charset=utf8", 'root', '1111');

    $dbh = $oDb->prepare('SELECT * FROM `orders`');
    $dbh->execute([]);

    return $dbh->fetchAll();
}