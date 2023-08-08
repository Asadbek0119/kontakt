<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet"> 
    <title>ДОБОВЛЯЕМ НОВОСТИ В БАЗУ</title>
</head>
<body>
   
<!-- ДОБОВЛЯЕМ НОВЫЕ БЛОКИ В БАЗУ ДАННЫХ -->

  <section class="edit_new ">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1>ДОБОВЛЯЕМ НОВОСТИ В БАЗУ ! </h1>
            <form action="add.php" method="post">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="">
                </div>

                <div class="form-group">
                    <textarea name="content" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-warning" type="submit">Добавить</button>
                </div>
            </form>
        </div>
    </div>
</div>
  </section>  




    
<script src="libs/jquery/jquery-3.3.1.min.js"></script>
<script src="libs/bootstrap-4.0.0-dist/js/popper.min.js"></script>
<script src="libs/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
</body>
</html>