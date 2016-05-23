<?php

if (isset($_POST['total']) && isset($_SESSION['user']['id'])) {

    $oDb = new PDO("mysql:host=localhost;dbname=web_app;charset=utf8", 'root', '1111');

    $dbh = $oDb->prepare("INSERT INTO `orders`(`id_user`, `prise`, `date`)VALUES(?, ?, ?)");
    $dbh->execute(array($_SESSION['user']['id'], $_POST['price'], mktime()));

}