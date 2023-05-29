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
    <!-- Блок карусели START -->
    <div class="container">
        <div class="row">
        <div class="text-center h2_form">
            <h2 class="slider-title">Сайт по подборке косплектующих и сборке компьютера</h2>
        </div>
            
        </div>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="#">slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="#">Second slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="#">Third slide label</a></h5>
                </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Блок карусели END -->

    <!-- Main start -->
    <div class="container">
        <div class="content row">
            <!-- Main content -->
            <div class="main-content col-md-9 col-12">
                <h2>Sometext</h2>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/img/1.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="<?php echo BASE_URL; ?>single.php">Прикольная статья...</a>
                        </h3>
                        <i class="far fa-user">Имя Автора</i>
                        <i class="far fa-calendar">May 11, 2023</i>
                        <p class="preview-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Enim quaerat et quos dicta consectetur dolorum doloremque,
                            ipsam, officia nulla explicabo, beatae minus officiis dolor 
                            ipsa sit animi aspernatur numquam autem!
                        </p>
                    </div>
                </div>
                <h2>Sometext</h2>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/img/2.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Прикольная статья...</a>
                        </h3>
                        <i class="far fa-user">Имя Автора</i>
                        <i class="far fa-calendar">May 11, 2023</i>
                        <p class="preview-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Enim quaerat et quos dicta consectetur dolorum doloremque,
                            ipsam, officia nulla explicabo, beatae minus officiis dolor 
                            ipsa sit animi aspernatur numquam autem! 
                        </p>
                    </div>
                </div>
                <h2>Sometext</h2>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/img/3.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Прикольная статья...</a>
                        </h3>
                        <i class="far fa-user">Имя Автора</i>
                        <i class="far fa-calendar">May 11, 2023</i>
                        <p class="preview-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Enim quaerat et quos dicta consectetur dolorum doloremque,
                            ipsam, officia nulla explicabo, beatae minus officiis dolor 
                            ipsa sit animi aspernatur numquam autem!
                        </p>
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