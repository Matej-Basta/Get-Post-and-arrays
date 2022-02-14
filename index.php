<?php

$page_title = "Shopping List";
$page = "home";

$items = [];

if(!empty($_POST["items"])) {
    var_dump($_POST);
    $items = $_POST["items"];
}

if(isset($_GET["page"])) {
    $page = $_GET["page"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=form">Form</a>
    </nav>
    
    <h1><?= $page_title ?></h1>

    <?php if($page === "home") : ?>
        <?php include_once "home.php" ?>
    <?php elseif($page === "form") : ?>
        <?php include_once "form.php" ?>
    <?php endif ; ?> 
    
</body>
</html>