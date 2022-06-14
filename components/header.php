<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  $documentTitle = "HOME | PHP"; ?>
    <link href="/assets/c.css" rel="stylesheet">
    <title><?php echo $documentTitle ?></title>
</head>
<body>

<header>
    <h1>Header</h1>
    <img src="https://picsum.photos/200" alt="">
</header>

<a href="#"><?php echo $phone; ?></a>

<hr>

<?php

include('components/nav.php');

?> 

<hr>