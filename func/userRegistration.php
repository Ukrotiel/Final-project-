<?php

if (isset($_POST['user'])) {
    $oDb = new PDO("mysql:host=localhost;dbname=web_app;charset=utf8", 'root', '1111');
    $dbh = $oDb->prepare("SELECT `id` FROM `user` WHERE `username` = ? LIMIT 1");
    $dbh->execute([$_POST['user']['username']]);

    if ($dbh->fetchColumn()) {
        echo "Користувач з таким імям вже існує";
        die;
    }

    $pass = md5($_POST['user']['pass']);
    $reg_date = date("d-m-Y в H:i");

    $username = $_POST['user']['username'];

    $oDb = new PDO("mysql:host=localhost;dbname=web_app;charset=utf8", 'root', '1111');

    $dbh = $oDb->prepare("INSERT INTO `user` (`username`, `pass`) VALUES (?, ?);");
    $dbh->execute([$username, $pass]);
    $iUserId = $oDb->lastInsertId();

    $rez = "Реєстрація пройшла успішно";
    $_SESSION['user']['username'] = $username;
    $_SESSION['user']['user_id'] = $iUserId;

    echo $rez;

    header('Location: /');
}

header('Location: /');



