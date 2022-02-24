<?php

require_once('function/helper.php');
 
$page = isset ($_GET['page'])? ($_GET['page']) : false;
session_start();
if ($_SESSION ['id'] == null){
    header("location: " .  BASE_URL);
    exit();
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD_ZAI</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
        <div class="container">
            <a class="navbar-brand text-light" href="#">ZaiVloper</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= BASE_URL . 'dashboard.php?page=create' ?>">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= BASE_URL . 'process/process_logout.php' ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="cotent">
        <div class="container">
            <div class="sub-content mt-5">
                <?php
                $filename = "page/$page.php";

                if(file_exists($filename)){
                    include_once($filename);
                }else{
                    
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>