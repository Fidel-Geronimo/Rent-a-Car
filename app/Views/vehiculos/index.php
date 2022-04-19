<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/public/assets/image/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- animate on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/style.css">

    <title>0Humo</title>

</head>

<body>

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"> <span>0</span>Humo </a>
        <div id="login-btn">

        </div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="<?= base_url("catalogo") ?>">vehicles</a>
            <a href="#services">services</a>
            <a href="#featured">featured</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
        </nav>



    </header>

    <div class="login-form-container">

        <span id="close-login-form" class="fas fa-times"></span>

    </div>

    <section class="home" id="home">

        <h3 data-speed="-2" class="home-parallax">find your car</h3>

        <img data-speed="5" class="home-parallax" src="<?= base_url() ?>/public/assets/image/home-img.png" alt="">

        <a data-speed="7" href="<?= base_url("catalogo") ?>" class="btn home-parallax">explore cars</a>

    </section>

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>150+</h3>
                <p>branches</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>4770+</h3>
                <p>rented cars</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>320+</h3>
                <p>happy clients</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>1500+</h3>
                <p>news cars</p>
            </div>
        </div>

    </section>

    <section data-aos="fade-up" class="vehicles" id="vehicles">

        <h1 class="heading"> popular <span>vehicles</span> </h1>

        <div class="swiper vehicles-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/vehicle-1.png" alt="">
                    <div class="content">
                        <h3>Porsche 911 Carrera 4</h3>
                        <div class="price"> <span>price : </span> $10,000/dia </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> gas
                            <span class="fas fa-circle"></span> 200mph
                        </p>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/vehicle-2.png" alt="">
                    <div class="content">
                        <h3>Porsche 718 Cayman </h3>
                        <div class="price"> <span>price : </span> $30,000/dia </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> gas
                            <span class="fas fa-circle"></span> 150mph
                        </p>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/vehicle-3.png" alt="">
                    <div class="content">
                        <h3>Porsche 718 Cayman GT4 RS</h3>
                        <div class="price"> <span>price : </span> $56,000/dia </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2019
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> gas
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/vehicle-4.png" alt="">
                    <div class="content">
                        <h3>Porsche 911 Carrera Cabriolet</h3>
                        <div class="price"> <span>price : </span> $40,000/dia </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> gas
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/vehicle-5.png" alt="">
                    <div class="content">
                        <h3>Porsche 911 Targa 4</h3>
                        <div class="price"> <span>price : </span> $38,000/dia </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2020
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 283mph
                        </p>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/vehicle-6.png" alt="">
                    <div class="content">
                        <h3>Porsche Cayenne E-Hybrid Coupé</h3>
                        <div class="price"> <span>price : </span> $78,000/dia </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> gasoil
                            <span class="fas fa-circle"></span> 193mph
                        </p>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section data-aos="flip-left" class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>car selling</h3>
                <p>We make sales in our 49 branches in the country, contact us</p>

            </div>

            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>parts repair</h3>
                <p>We carry out repairs on your vehicle in addition to providing you with the rental service.</p>

            </div>

            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>car insurance</h3>
                <p>If during your stay with us you suffer any breakdown in your vehicle, you can contact us</p>

            </div>

            <div class="box">
                <i class="fas fa-car-battery"></i>
                <h3>battery replacement</h3>
                <p>Do you have a problem with your batteries? don't worry, we can help you</p>

            </div>

            <div class="box">
                <i class="fas fa-gas-pump"></i>
                <h3>oil change</h3>
                <p>We have a workshop in all our branches with professional mechanics who will help you</p>
            </div>

            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>24/7 support</h3>
                <p>Count on us at the time you need, if you suffer any problem, whenever, whatever, contact us</p>
            </div>
        </div>
    </section>

    <section data-aos="zoom-in-down" class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> cars </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/car-1.png" alt="">
                    <div class="content">
                        <h3>Mercedes-AMG GT</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/dia</div>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/car-2.png" alt="">
                    <div class="content">
                        <h3>Cayenne E-Hybrid</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$20,000/dia</div>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/car-3.png" alt="">
                    <div class="content">
                        <h3>Renault Clio</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$12,000/dia</div>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/car-4.png" alt="">
                    <div class="content">
                        <h3>Audi Q7</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/dia</div>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/car-5.png" alt="">
                    <div class="content">
                        <h3>Kia Sorento Panorami 2022</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$45,000/dia</div>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/car-6.png" alt="">
                    <div class="content">
                        <h3>Honda Civic</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$12,000/dia</div>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/car-7.png" alt="">
                    <div class="content">
                        <h3>Kia Sonet</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$40,000/dia</div>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/car-8.png" alt="">
                    <div class="content">
                        <h3>Chevrolet Equinox Lt 2023</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/dia</div>
                        <a href="<?= base_url("catalogo") ?>" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- <section class="newsletter">

        <h3>subscribe for latest updates</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, suscipit.</p>

        <form action="">
            <input type="email" placeholder="enter your email">
            <input type="submit" value="subscribe">
        </form>

    </section> -->

    <section data-aos="fade-up" class="reviews" id="reviews">

        <h1 class="heading"> client's <span>review</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/pic-1.png" alt="">
                    <div class="content">
                        <p>I quite liked the user experience of the page and the attention provided in the facilities, plus the seasonal discounts are crazy!</p>
                        <h3>Geanluis Lorenzo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/pic-2.png" alt="">
                    <div class="content">
                        <p>I am impressed with the attention they gave me at the facilities, when I arrived they offered me immediate attention and gave me some sandwiches to eat! incredible</p>
                        <h3>Adriel De La Cruz</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/pic-3.png" alt="">
                    <div class="content">
                        <p>When I arrived in the country I couldn't find a good rent a car, a friend told me to do 0Humo and I immediately contacted them and they attended me quickly, I was simply fantastic</p>
                        <h3>Alan Noel</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/pic-4.png" alt="">
                    <div class="content">
                        <p>I traveled to a small country in Asia, I thought I was not going to find a good rental car to move around the country, 0Humo was there to help me, perfect!</p>
                        <h3>Fidel Geronimo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/pic-5.png" alt="">
                    <div class="content">
                        <p>I had to move from town and I had to buy a new vehicle, I was able to buy mine at the best price in a facility that was close to my house, excellent service</p>
                        <h3>Clara Diaz</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= base_url() ?>/public/assets/image/pic-6.png" alt="">
                    <div class="content">
                        <p>Thank God I was able to hire this rent a car, it was a wonderful experience, I openly recommend it to all consumers</p>
                        <h3>Lisbel Marmol</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section data-aos="fade-up" class="contact" id="contact">

        <h1 class="heading"><span>contact</span> us</h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25459.374071585466!2d-70.84383348722224!3d18.458339969434995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eba98b6e3b3202f%3A0xe4ab2c4383f09f87!2sSabana%20Yegua%2071000!5e0!3m2!1ses!2sdo!4v1649381708019!5m2!1ses!2sdo" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form method="post" action="https://formsubmit.co/8d95b683c1db29374d0485632f5ece29">
                <h3>get in touch</h3>
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="http://0humo.epizy.com/#contact">
                <input name="name" type="text" placeholder="your name" class="box">
                <input name="email" type="email" placeholder="your email" class="box">
                <input name="phone" type="text" placeholder="subject" class="box">
                <textarea name="message" placeholder="your message" class="box" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>
        </div>

    </section>

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>our branches</h3>
                <a> <i class=" fas fa-map-marker-alt"></i> india </a>
                <a> <i class=" fas fa-map-marker-alt"></i> japan </a>
                <a> <i class="fas fa-map-marker-alt"></i> france </a>
                <a> <i class="fas fa-map-marker-alt"></i> russia </a>
                <a> <i class="fas fa-map-marker-alt"></i> USA </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="<?= base_url("catalogo") ?>"> <i class="fas fa-arrow-right"></i> vehicles </a>
                <a href="#services"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#featured"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#reviews"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#contact"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a> <i class="fas fa-phone"></i> +1829-837-xxxx </a>
                <a> <i class="fas fa-phone"></i> +809-884-xxxx </a>
                <a> <i class="fas fa-envelope"></i> fidelgeronimo18@gmail.com </a>
                <a> <i class="fas fa-map-marker-alt"></i> Azua, Sabana yegua - 71000 </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a target="_blank" href="https://www.facebook.com/fidel.geronimo.7545/"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a target="_blank" href="https://www.instagram.com/fideljgr/?hl=es"> <i class="fab fa-instagram"></i> instagram </a>
                <a target="_blank" href="https://www.linkedin.com/in/fidel-geronimo-3b6a04208/"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/script.js"></script>
    <!-- animate on scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>