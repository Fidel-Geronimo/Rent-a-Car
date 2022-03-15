<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="public/assets/css/style.css">

</head>

<body>
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="<?= base_url("/") ?>" class="logo"> <span>max</span>wheels </a>
        <div id="login-btn">

        </div>

        <nav class="navbar">
            <a href="<?= base_url("/#home") ?>">home</a>
            <a href="<?= base_url("catalogo") ?>">vehicles</a>
            <a href="<?= base_url("/#services") ?>">services</a>
            <a href="<?= base_url("/#featured") ?>">featured</a>
            <a href="<?= base_url("/#reviews") ?>">reviews</a>
            <a href="<?= base_url("/#contact") ?>">contact</a>
        </nav>


    </header>
    <div class="login-form-container">

        <span id="close-login-form" class="fas fa-times"></span>

    </div>
    <section class="home" id="home"></section>

    <div class="container">
        <h1 class="heading"> <span>Vehiculos</span> Disponibles </h1>
        <div class="row row-cols-auto">
            <div class="col">
                <button class="btn btn-primary ms-4" type="button">Todos</button>
            </div>
            <div class="col">
                <button class="btn btn-primary ms-4" type="button">Jeppetas</button>
            </div>
            <div class="col">
                <button class="btn btn-primary ms-4" type="button">Carros</button>
            </div>
            <div class="col">
                <button class="btn btn-primary ms-4" type="button">Furgoneta</button>
            </div>
            <div class="col">
                <button class="btn btn-primary ms-4" type="button">Gasolina</button>
            </div>
            <div class="col">
                <button class="btn btn-primary ms-4" type="button">Gas</button>
            </div>
        </div>

        <div class="row ">
            <section class="featured" id="featured">

                <div class="swiper featured-slider">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide box">
                            <img src="public/assets/image/car-1.png" alt="">
                            <div class="content">
                                <h3>new model</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price">$55,000/-</div>
                                <a href="#" class="btn">check out</a>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                            <img src="public/assets/image/car-2.png" alt="">
                            <div class="content">
                                <h3>new model</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price">$55,000/-</div>
                                <a href="#" class="btn">check out</a>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                            <img src="public/assets/image/car-3.png" alt="">
                            <div class="content">
                                <h3>new model</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price">$55,000/-</div>
                                <a href="#" class="btn">check out</a>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                            <img src="public/assets/image/car-4.png" alt="">
                            <div class="content">
                                <h3>new model</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price">$55,000/-</div>
                                <a href="#" class="btn">check out</a>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-pagination"></div>

                </div>

                <div class="swiper featured-slider">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide box">
                            <img src="public/assets/image/car-5.png" alt="">
                            <div class="content">
                                <h3>new model</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price">$55,000/-</div>
                                <a href="#" class="btn">check out</a>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                            <img src="public/assets/image/car-6.png" alt="">
                            <div class="content">
                                <h3>new model</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price">$55,000/-</div>
                                <a href="#" class="btn">check out</a>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                            <img src="public/assets/image/car-7.png" alt="">
                            <div class="content">
                                <h3>new model</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price">$55,000/-</div>
                                <a href="#" class="btn">check out</a>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                            <img src="public/assets/image/car-8.png" alt="">
                            <div class="content">
                                <h3>new model</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price">$55,000/-</div>
                                <a href="#" class="btn">check out</a>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-pagination"></div>

                </div>

            </section>
        </div>
    </div>
    <!-- carros -->


    <!-- footer -->
    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>our branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>

        <div class="credit"> created by mr. web designer | all rights reserved </div>

    </section>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="public/assets/js/script.js"></script>

</body>

</html>