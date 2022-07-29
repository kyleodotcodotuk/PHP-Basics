<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  $documentTitle = "HOME | PHP"; ?>
    <title><?php echo $documentTitle ?></title>
</head>
<style>
<?php include 'dist/style.css'; ?>
</style>
<body>

<header>
<div class="wrapper">
    <h1>Header</h1>
    <img src="https://picsum.photos/200" alt="">
    <a href="#"><?php echo $phone; ?></a>
</div>
</header>


<hr>

<?php

include('components/nav.php');

?> 

<hr>