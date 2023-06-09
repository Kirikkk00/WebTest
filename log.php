<?php include "path.php"; ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test Site</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- Castom -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
     <!-- Header start -->
     <?php
        include "app/include/header.php";
    ?>
    <!-- Header end -->
        <!-- Form start -->
        <div class="container reg_form">
            <form class="row justify-content-center" method="post" action="log.html">
                <h2>Авторизация</h2>
                <div class="mb-3 col-12 col-md-4">
                    <label for="formGroupExampleInput" class="form-label">Логин</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-md-4">
                    <button type="submit" class="btn btn-secondary">Войти</button>
                    <a href="<?php echo BASE_URL; ?>reg.php">Зарегистрироваться</a>
                </div>
            </form>
        </div>
        <!-- Form end -->
        <!-- Footer start -->
        <?php
            include "app/include/footer.php";
        ?>
        <!-- Footer end -->
        <script src="https://kit.fontawesome.com/7c116cefd8.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>