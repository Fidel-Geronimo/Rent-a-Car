<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0Humo</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/public/assets/image/favicon.png" type="image/x-icon">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- alertify -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/assets/alertify/alertify.css">

    <!-- bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">s

    <!-- estilos personalizados -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/style.css">


</head>


<body>
    <!-- Modal -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="<?= base_url("/") ?>" class="logo"> <span>0</span>Humo </a>
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
                        <div class="svg-loader">
                            <svg class="svg-container" height="100" width="100" viewBox="0 0 100 100">
                                <circle class="loader-svg bg" cx="50" cy="50" r="45"></circle>
                                <circle class="loader-svg animate" cx="50" cy="50" r="45"></circle>
                            </svg>
                        </div>
                        <form id="detalleForm" style="display: none;">
                            <div class="container">
                                <div class="row">
                                    <div class="container">
                                        <img id="fotoVehiculo" class="rounded mx-auto d-block" src="" alt="">
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <input type="hidden" id="idVehiculo">
                                            <label for="descripcionVehiculo" class="form-label">Descripcion</label>
                                            <input readonly type="text" class="form-control inputs-personalizados" id="descripcionVehiculo">
                                        </div>
                                        <div class="mb-3">
                                            <label for="precioVehiculo" class="form-label">precioVehiculo</label>
                                            <input readonly type="text" class="form-control inputs-personalizados" id="precio" value="200">
                                        </div>

                                        <div class="mb-3">
                                            <label for="transmisionVehiculo" class="form-label">Transmision</label>
                                            <input readonly type="text" class="form-control inputs-personalizados" id="transmisionVehiculo">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="modeloVehiculo" class="form-label">Modelo</label>
                                                    <input readonly type="text" class="form-control inputs-personalizados" id="modeloVehiculo">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="marcaVehiculo" class="form-label">Marca</label>
                                                    <input readonly type="text" class="form-control inputs-personalizados" id="marcaVehiculo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="combustibleVehiculo" class="form-label">Tipo Combustible</label>
                                            <input readonly type="text" class="form-control inputs-personalizados" id="combustibleVehiculo">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tipoVehiculo" class="form-label">Tipo vehiculos</label>
                                            <input readonly type="text" class="form-control inputs-personalizados" id="tipoVehiculo">
                                        </div>

                                        <div class="mb-3">
                                            <label for="estadoVehiculo" class="form-label">Estado</label>
                                            <input readonly type="text" class="form-control inputs-personalizados" id="estadoVehiculo">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="maletasVehiculos" class="form-label">Maletas</label>
                                                    <input readonly type="text" class="form-control inputs-personalizados" id="maletasVehiculos">

                                                </div>

                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="personasVehiculos" class="form-label">Personas</label>
                                                    <input readonly type="text" class="form-control inputs-personalizados" id="personasVehiculos">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-edit btnCerrar">Cerrar</button>
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
                    <div style="display: none;" class="svg-loader">
                        <svg class="svg-container" height="100" width="100" viewBox="0 0 100 100">
                            <circle class="loader-svg bg" cx="50" cy="50" r="45"></circle>
                            <circle class="loader-svg animate" cx="50" cy="50" r="45"></circle>
                        </svg>
                    </div>
                    <form autocomplete="off" id="rentaCliente" method="post">
                        <div class=" modal-body">
                            <input class="form-control inputs-personalizados" name="idVehiculoRenta" id="idVehiculoRenta" type="hidden" value="">
                            <div class="mb-3">
                                <label for="nombre">Nombre Completo <span style="color: #e91e63;">*</span></label>
                                <input required id="nombre" name="nombre" type="text" class="form-control inputs-personalizados">
                            </div>
                            <div class="mb-3">
                                <label for="telefonoRenta">Telefono <span style="color: #e91e63;">*</span></label>
                                <input required id="telefonoRenta" name="telefonoRenta" type="number" class="form-control inputs-personalizados">
                            </div>
                            <div class="mb-3">
                                <label for="emailRenta">Correo Electronico <span style="color: #e91e63;">*</span></label>
                                <input required id="emailRenta" name="emailRenta" type="email" class="form-control inputs-personalizados">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="fechaRecogida">Fecha De Recogida <span style="color: #e91e63;">*</span></label>
                                        <?php $hoy = date("Y-m-d"); ?>
                                        <input name="fechaRecogida" id="fechaRecogida" required min="<?= $hoy ?>" type="date" class="form-control inputs-personalizados">
                                    </div>
                                    <div class="mb-3">
                                        <label for="horaRecogida">Hora De Recogida <span style="color: #e91e63;">*</span></label>
                                        <input name="horaRecogida" id="horaRecogida" required type="time" class="form-control inputs-personalizados">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="fechaDevolucion">Fecha De Devolucion <span style="color: #e91e63;">*</span></label>
                                        <input name="fechaDevolucion" id="fechaDevolucion" required min="" type="date" class="form-control inputs-personalizados">
                                    </div>
                                    <div class="mb-3">
                                        <label for="horaDevolucion">Hora De Devolucion <span style="color: #e91e63;">*</span></label>
                                        <input name="horaDevolucion" id="horaDevolucion" required type="time" class="form-control inputs-personalizados">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btnConfirmar">Confirmar</button>
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
                <a> <i class=" fas fa-map-marker-alt"></i> india </a>
                <a> <i class=" fas fa-map-marker-alt"></i> japan </a>
                <a> <i class="fas fa-map-marker-alt"></i> france </a>
                <a> <i class="fas fa-map-marker-alt"></i> russia </a>
                <a> <i class="fas fa-map-marker-alt"></i> USA </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="<?= base_url("/#home") ?>"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="<?= base_url("catalogo") ?>"> <i class="fas fa-arrow-right"></i> vehicles </a>
                <a href="<?= base_url("/#services") ?>"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="<?= base_url("/#featured") ?>"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="<?= base_url("/#reviews") ?>"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="<?= base_url("/#contact") ?>"> <i class="fas fa-arrow-right"></i> contact </a>
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
    <!-- <div class="svg-loader">
        <svg class="svg-container" height="100" width="100" viewBox="0 0 100 100">
            <circle class="loader-svg bg" cx="50" cy="50" r="45"></circle>
            <circle class="loader-svg animate" cx="50" cy="50" r="45"></circle>
        </svg>
    </div> -->

    <!-- 
    <!-- jquery 3.6.0 -->
    <script src="<?= base_url() ?>/public/assets/js/jquery-3.6.0.min.js"></script>
    <!-- validacion de formularios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <!-- alertify -->
    <script src="<?= base_url() ?>/public/assets/alertify/alertify.js"></script>

    <!-- bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/script.js"></script>
    <!-- alertify -->
    <script src="<?= base_url() ?>/public/assets/alertify/alertify.js"></script>
    <script>
        $(document).ready(function() {
            //=============================== boton revisar======================
            $(".btnRevisar").click(function(e) {
                let idVehiculo = $(this).val();
                $('#detalleForm')[0].reset();
                $("#detalleForm").hide();
                $(".svg-loader").show();
                $("#modalInfoVehiculo").modal('show');
                $.ajax({
                    method: "POST",
                    url: "rentacar/vehiculos/verData",
                    data: {
                        'idVehiculo': idVehiculo
                    },
                    success: function(response) {
                        $.each(response, function(key, vehiculo) {
                            $("#idVehiculo").val(vehiculo['id']);
                            $("#descripcionVehiculo").val(vehiculo['descripcion']);
                            $("#precio").val(vehiculo['precio']);
                            $("#transmisionVehiculo").val(vehiculo['transmision']);
                            $("#modeloVehiculo").val(vehiculo['modelo']);
                            $("#marcaVehiculo").val(vehiculo['marca']);
                            $("#combustibleVehiculo").val(vehiculo['tipocombustible']);
                            $("#tipoVehiculo").val(vehiculo['tipovehiculo']);
                            $("#estadoVehiculo").val(vehiculo['estado']);
                            $("#maletasVehiculos").val(vehiculo['maletas']);
                            $("#personasVehiculos").val(vehiculo['personas']);
                            $("#fotoVehiculo").attr("src", '<?= base_url("/public/uploads") ?>/' + vehiculo['foto']);
                            $(".svg-loader").slideUp();
                            $("#detalleForm").fadeIn(1000);
                        });
                    }
                });
            });
            $(".btnCerrar").click(function(e) {
                $("#modalInfoVehiculo").modal('hide');
            });
            //=============================== boton revisar end ======================

            //=============================== boton Reservar======================
            $(".btnReservar").click(function(e) {
                $("#modalInfoVehiculo").modal('hide');
                $("#modalRentaVehiculo").modal('show');
            });
            //=============================== boton Reservar end ======================

            //=============================== Cambio de fecha ======================
            $("#fechaRecogida").change(function(e) {
                let min = $("#fechaRecogida").val();
                // console.log(min);
                $("#fechaDevolucion").val(min);
                $("#fechaDevolucion").attr({
                    "min": min // values (or variables) here
                });
            });
            //=============================== Cambio de fecha end ======================

            //=============================== boton Confirmar ======================
            $("#rentaCliente").validate({
                event: "blur",
                rules: {
                    'nombre': "required",
                    'emailRenta': "required email",
                    'telefonoRenta': "required",
                    'fechaRecogida': "required",
                    'fechaDevolucion': "required",
                    'horaRecogida': "required",
                    'horaDevolucion': "required"
                },
                messages: {
                    'nombre': "Coloca Tu Nombre Animal",
                    'emailRenta': "Coloca Un Email Valido, No Seas Imbecil",
                    'telefonoRenta': "Telefono Obligatorio",
                    'fechaRecogida': "Selecciona Una Fecha",
                    'fechaDevolucion': "Selecciona Una Fecha",
                    'horaRecogida': "Selecciona Una Hora",
                    'horaDevolucion': "Selecciona Una Hora"
                },
                errorElement: "label",
                submitHandler: function(form) {
                    let idVehiculoReserva = $("#idVehiculo").val();
                    let nombreCliente = $("#nombre").val();
                    let telefonoCliente = $("#telefonoRenta").val();
                    let emailRenta = $("#emailRenta").val();
                    let fechaRecogida = $("#fechaRecogida").val();
                    let horaRecogida = $("#horaRecogida").val();
                    let fechaDevolucion = $("#fechaDevolucion").val();
                    let horaDevolucion = $("#horaDevolucion").val();

                    // diferencia entre dos fechas
                    let fechaInicio = new Date(fechaRecogida).getTime();
                    let fechaFin = new Date(fechaDevolucion).getTime();
                    let diferenciaDias = (fechaFin - fechaInicio) / (1000 * 60 * 60 * 24);
                    // ========================================================================

                    let datos = {
                        'nombreCliente': nombreCliente,
                        'idVehiculoReserva': idVehiculoReserva,
                        'telefonoCliente': telefonoCliente,
                        'emailRenta': emailRenta,
                        'fechaRecogida': fechaRecogida,
                        'fechaDevolucion': fechaDevolucion,
                        'horaRecogida': horaRecogida,
                        'horaDevolucion': horaDevolucion,
                        'diasTotales': diferenciaDias
                    }
                    $("#rentaCliente").slideUp(500, function() {
                        $(".svg-loader").fadeIn(250);
                    });

                    $.ajax({
                        type: "post",
                        url: "catalogo/rentar",
                        data: datos,
                        success: function(response) {
                            $('#rentaCliente')[0].reset();
                            $("#rentaCliente").show(1000);
                            $("#modalRentaVehiculo").modal("hide");
                            alertify.set('notifier', 'position', 'top-right');
                            alertify.success(response.respuesta);
                            // console.log(response);
                        }
                    });
                }
            });
            //=============================== boton Confirmar end ======================


        });
    </script>
</body>

</html>