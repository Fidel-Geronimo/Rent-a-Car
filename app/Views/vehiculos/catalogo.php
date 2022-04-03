<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">s

    <!-- estilos personalizados -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/style.css">


</head>


<body>
    <!-- Modal -->

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

        <!-- Modal info Vehiculo -->
        <div class="modal fade" id="modalInfoVehiculo" tabindex="-1" aria-labelledby="modalInfoVehiculoLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalInfoVehiculoLabel">Detalle Vehiculo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <img class="img-fluid" src="<?= base_url('public/uploads/1648082799_9c50ced5f45361121ceb.png') ?>" alt="">
                        </div>
                        <form>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="descripcionVehiculo" class="form-label">Descripcion</label>
                                            <input readonly type="text" class="form-control inputs-personalizados" id="descripcionVehiculo">
                                        </div>
                                        <div class="mb-3">
                                            <label for="precio" class="form-label">Precio</label>
                                            <input readonly type="text" class="form-control inputs-personalizados" id="precio" value="200">
                                        </div>

                                        <div class="mb-3">
                                            <label for="descripcionVehiculo" class="form-label">Transmision</label>
                                            <input readonly type="text" class="form-control inputs-personalizados" id="descripcionVehiculo">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="descripcionVehiculo" class="form-label">Modelo</label>
                                                    <input readonly type="text" class="form-control inputs-personalizados" id="descripcionVehiculo">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="descripcionVehiculo" class="form-label">Marca</label>
                                                    <input readonly type="text" class="form-control inputs-personalizados" id="descripcionVehiculo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="descripcionVehiculo" class="form-label">Tipo Combustible</label>
                                            <input readonly type="text" class="form-control inputs-personalizados" id="descripcionVehiculo">
                                        </div>
                                        <div class="mb-3">
                                            <label for="descripcionVehiculo" class="form-label">Tipo vehiculos</label>
                                            <input readonly type="text" class="form-control inputs-personalizados" id="descripcionVehiculo">
                                        </div>

                                        <div class="mb-3">
                                            <label for="descripcionVehiculo" class="form-label">Estado</label>
                                            <input readonly type="text" class="form-control inputs-personalizados" id="descripcionVehiculo">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="descripcionVehiculo" class="form-label">Maletas</label>
                                                    <input readonly type="text" class="form-control inputs-personalizados" id="descripcionVehiculo">

                                                </div>

                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="descripcionVehiculo" class="form-label">Personas</label>
                                                    <input readonly type="text" class="form-control inputs-personalizados" id="descripcionVehiculo">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-edit" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn-edit btnReservar">Reservar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal de Rentar de vehiculos -->
        <div class="modal fade" id="modalRentaVehiculo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="vehiculoModalRenta" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="vehiculoModal">Renta Vehiculo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <input class="form-control inputs-personalizados" name="idVehiculoRenta" id="idVehiculoRenta" type="hidden" value="">
                            <div class="mb-3">
                                <label>Nombre Completo <span style="color: #e91e63;">*</span></label>
                                <input required id="nombre" name="nombre" type="text" class="form-control inputs-personalizados">
                            </div>
                            <div class="mb-3">
                                <label>Telefono <span style="color: #e91e63;">*</span></label>
                                <input required id="telefonoRenta" name="telefonoRenta" type="tel" class="form-control inputs-personalizados">
                            </div>
                            <div class="mb-3">
                                <label>Correo Electronico <span style="color: #e91e63;">*</span></label>
                                <input required id="emailRenta" name="emailRenta" type="email" class="form-control inputs-personalizados">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label>Fecha De Recogida <span style="color: #e91e63;">*</span></label>
                                        <?php $hoy = date("Y-m-d"); ?>
                                        <input name="fechaRecogida" id="fechaRecogida" required min="<?= $hoy ?>" type="date" class="form-control inputs-personalizados">
                                    </div>
                                    <div class="mb-3">
                                        <label>Hora De Recogida <span style="color: #e91e63;">*</span></label>
                                        <input name="horaRecogida" id="horaRecogida" required type="time" class="form-control inputs-personalizados">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label>Fecha De Devolucion <span style="color: #e91e63;">*</span></label>
                                        <input name="fechaDevolucion" id="fechaDevolucion" required min="" type="date" class="form-control inputs-personalizados">
                                    </div>
                                    <div class="mb-3">
                                        <label>Hora De Devolucion <span style="color: #e91e63;">*</span></label>
                                        <input name="horaDevolucion" id="horaDevolucion" required type="time" class="form-control inputs-personalizados">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary btnSiguiente">Siguiente</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <section class="featured" id="featured">
            <div class="featured-catalogo">
                <?php foreach ($data as $datos) : ?>
                    <div class="box">
                        <input id="" type="hidden" value="<?= $datos['id'] ?>">
                        <img src=" <?= base_url("public/uploads") .  '/' . $datos['foto'] ?>" alt="">
                        <div class="content">
                            <h3 id="id"><?= $datos['descripcion'] ?></h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$<?= $datos['precio'] ?>/dia</div>
                            <!-- <a href="#" class="btn"></a> -->
                            <button value="<?= $datos['id'] ?>" class="btn btnRevisar">Revisar</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </div>
    </section>
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

    <!-- 
    <!-- jquery 3.6.0 -->
    <script src="<?= base_url() ?>/public/assets/js/jquery-3.6.0.min.js"></script>

    <!-- bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>



    <script src="<?= base_url() ?>/public/assets/js/script.js"></script>
    <script>
        $(document).ready(function() {
            $(".btnRevisar").click(function(e) {
                let idVehiculo = $(this).val();
                $("#modalInfoVehiculo").modal('show');
            });

            $(".btnReservar").click(function(e) {
                $("#modalInfoVehiculo").modal('hide');
                $("#modalRentaVehiculo").modal('show');

            });
        });
    </script>
</body>

</html>