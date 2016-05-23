<?php

if (isset($_POST['user']['pass']) && isset($_POST['user']['username'])) {

    $oDb = new PDO("mysql:host=localhost;dbname=web_app;charset=utf8", 'root', '1111');

    $pass = md5($_POST['user']['pass']);

    $dbh = $oDb->prepare("SELECT `id` FROM `user` WHERE `pass` = ? AND `username` = ? LIMIT 1");
    $dbh->execute([
        $pass,
        $_POST['user']['username']
    ]);

    $user = $dbh->fetchColumn();
    if ($user) {

        $_SESSION['user']['username'] = $user['username'];
        $_SESSION['user']['id'] = $user['id'];

        header('location: /');
    }

    header('location: /');
}