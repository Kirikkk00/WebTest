<?php include "path.php"; ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Singele</title>
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
    <!-- Main start -->
    <div class="container">
        <div class="content row">
            <!-- Main content -->
            <div class="main-content col-md-9 col-12">
                <h2>Заголовок. Примерно такой заголовок да, вот так вот...</h2>
                <div class="single_post row">
                    <div class="img col-12">
                        <img src="assets/img/3.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="info">
                        <i class="far fa-user">Имя Автора</i>
                        <i class="far fa-calendar">May 11, 2023</i>
                    </div>
                    <div class="single_post_text col-12">
                        <h3>Заголовок</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Ducimus nostrum facere quasi praesentium, deserunt doloribus 
                            totam <a href="#">reiciendis</a>, non sapiente inventore quo dolore 
                            numquam saepe ab accusamus pariatur. Magni, ullam?</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Ducimus nostrum facere quasi praesentium, deserunt doloribus 
                            totam autem reiciendis, non sapiente inventore quo dolore 
                            numquam saepe ab accusamus pariatur. Magni, ullam?</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Ducimus nostrum facere quasi praesentium, deserunt doloribus 
                            totam autem reiciendis, non sapiente inventore quo dolore 
                            numquam saepe ab accusamus pariatur. Magni, ullam?</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Ducimus nostrum facere quasi praesentium, deserunt doloribus 
                                totam autem reiciendis, non sapiente inventore quo dolore 
                                numquam saepe ab accusamus pariatur. Magni, ullam?</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Ducimus nostrum facere quasi praesentium, deserunt doloribus 
                                totam autem reiciendis, non sapiente inventore quo dolore 
                                numquam saepe ab accusamus pariatur. Magni, ullam?</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Ducimus nostrum facere quasi praesentium, deserunt doloribus 
                                totam autem reiciendis, non sapiente inventore quo dolore 
                                numquam saepe ab accusamus pariatur. Magni, ullam?</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Ducimus nostrum facere quasi praesentium, deserunt doloribus 
                                    totam autem reiciendis, non sapiente inventore quo dolore 
                                    numquam saepe ab accusamus pariatur. Magni, ullam?</p>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Ducimus nostrum facere quasi praesentium, deserunt doloribus 
                                    totam autem reiciendis, non sapiente inventore quo dolore 
                                    numquam saepe ab accusamus pariatur. Magni, ullam?</p>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Ducimus nostrum facere quasi praesentium, deserunt doloribus 
                                    totam autem reiciendis, non sapiente inventore quo dolore 
                                    numquam saepe ab accusamus pariatur. Magni, ullam?</p>
                                    
                    </div>
                </div>
            </div>
            <!-- slider content -->  
            <div class="slider col-md-3 col-12">
                <div class="section search">
                    <h3>Поиск</h3>
                    <form action="#" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h3>Категории</h3>
                    <ul>
                        <li><a href="#">Poems</a></li>
                        <li><a href="#">Poems</a></li>
                        <li><a href="#">Poems</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Maint end -->
    <!-- Footer start -->
    <?php
        include "app/include/footer.php";
    ?>
    <!-- Footer end -->
    <script src="https://kit.fontawesome.com/7c116cefd8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>