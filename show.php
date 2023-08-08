<?php
include "./function.php";
$array = show();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet"> 
    <title>SHOW-Описание</title>
</head>
<body>
    

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="show_title">
                        <h2><?= $array['title'] ?></h2>
                        <p><?= $array['text'] ?></p>
                        <a href="index.php"><button class="btn btn-dark">Назад</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <script src="libs/jquery/jquery-3.3.1.min.js"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/popper.min.js"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    
</body>
</html>