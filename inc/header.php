<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="container">
        <div class="col-lg-2">
            <div class="main-logo">
                <a href="index.php">
                    <img src="img/main-logo.png" alt="">
                </a>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="head-title">Хедлайн - інтернет магазин навушників</div>
        </div>
        <div class="col-lg-2">
            <button class="login" data-toggle="modal" data-target="#myModal1">Вхід</button>
        </div>
    </div>
</header>