<?= $this->include("includes/header");
session_start(); ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="d-flex justify-content-between bg-gradient-primary shadow-primary border-radius-lg pt-4">
                        <h4 class="text-white text-capitalize ps-3">Rentas Activas </h4>
                        <button type="button" class="btn btn-info btnSolicitudes me-3">
                            <span>Solicitudes</span>
                            <span class="conteoSolicitudes badge badge-sm badge-circle badge-danger border border-white border-2"><?= $solicitudes ?></span>
                        </button>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">vehiculo</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Precio</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Entrega Y devolucion</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $datos) : ?>
                                    <tr>
                                        <td class="align-middle text-center text-sm idRenta">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['id'] ?></span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['cliente'] ?></span>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-xs"><?= $datos['descripcionvehiculo'] ?></h6>
                                                    <p class="text-xs text-secondary mb-0"><?= $datos['marcavehiculo'] ?></p>
                                                    <p class="text-xs text-secondary mb-0"><?= $datos['modelovehiculo'] ?></p>
                                                </div>
                                                <div>
                                                    <img src="<?= base_url("public/uploads") . '/' . $datos['foto']; ?>" class="avatar avatar-xl me-3">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['preciorenta'] ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <span class="text-secondary text-xs font-weight-normal"><?= $datos['fecharecogida'] ?>---</span>
                                                </div>
                                                <div>
                                                    <span class="text-secondary text-xs font-weight-normal"><?= $datos['fechadevolucion'] ?></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['fecha'] ?></span>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-success btnRecibirVehiculo"><span class="material-icons">done</span></a>
                                            <a class="btn btn-info btnInfo"><span class="material-icons">info</span></a>
                                            <a href="<?= base_url("admin/borrar/" . $datos['id']); ?>" class="btn btn-danger "><span class="material-icons">delete</span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>


<?= $this->include("includes/footer"); ?>

<script>
    $(document).ready(function() {

        //========================== modal info================
        $(".btnInfo").click(function(e) {
            let idRenta = $(this).closest('tr').find(".idRenta").text().replace(/\s+/g, ''); //captura del valor del id Renta
            $.ajax({
                type: "post",
                url: "admin/info",
                data: {
                    'idRenta': idRenta
                },
                success: function(response) {
                    $("#imagenVehiculoInfo").attr("src", '<?= base_url("/public/uploads") ?>/' + response.foto);
                    $("#clienteRentaInfo").val(response.cliente);
                    $("#telefonoRentaInfo").val(response.telefono);
                    $("#emailRentaInfo").val(response.email);
                    $("#fechaRecogidaInfo").val(response.fecharecogida);
                    $("#horaRecogidaInfo").val(response.horarecogida);
                    $("#fechaDevolucionInfo").val(response.fechadevolucion);
                    $("#horaDevolucionInfo").val(response.horadevolucion);
                    $("#descripcionRentaInfo").val(response.descripcionvehiculo);
                    $("#marcaRentaInfo").val(response.marcavehiculo);
                    $("#modeloRentaInfo").val(response.modelovehiculo);
                    $("#precioRentaInfo").val(response.preciorenta);
                    $("#chasisRentaInfo").val(response.chasisvehiculo);
                    $("#transmisionRentaInfo").val(response.transmisionvehiculo);
                    $("#motorRentaInfo").val(response.motorvehiculo);
                    $("#placaRentaInfo").val(response.placavehiculo);
                    $("#tipoRentaInfo").val(response.tipovehiculo);
                    $("#modalInfoRenta").modal("show");
                    // console.log(response.cliente);
                }
            });
        });
        //========================== modal info end================
        //================== modal Recibir Vehiculo================

        $('.btnRecibirVehiculo').click(function(e) {
            // captura de todos los datos del formulario de renta Admin
            let idRenta = $(this).closest('tr').find(".idRenta").text().replace(/\s+/g, '');
            $("#modalDevolucionInspeccion").modal("show");
            $('.btnConfirmarDevolucion').one('click', function(e) {
                let gatoDevolucion = 0;
                let kitHerramientasDevolucion = 0;
                let gomaDevolucion = 0;
                let rayadurasDevolucion = 0;
                let abolladurasDevolucion = 0;
                let piezasFaltantesDevolucion = 0;
                if ($('.gatoDevolucion').is(':checked')) {
                    gatoDevolucion = 1;
                }
                if ($('.kitHerramientasDevolucion').is(':checked')) {
                    kitHerramientasDevolucion = 1;
                }
                if ($('.gomaDevolucion').is(':checked')) {
                    gomaDevolucion = 1;
                }
                if ($('.abolladurasDevolucion').is(':checked')) {
                    abolladurasDevolucion = 1;
                }
                if ($('.rayadurasDevolucion').is(':checked')) {
                    rayadurasDevolucion = 1;
                }
                if ($('.piezasDevolucion').is(':checked')) {
                    piezasFaltantesDevolucion = 1;
                }
                let datosDevolucion = {
                    'idRenta': idRenta,
                    'gatoDevolucion': gatoDevolucion,
                    'kitHerramientasDevolucion': kitHerramientasDevolucion,
                    'gomaDevolucion': gomaDevolucion,
                    'abolladurasDevolucion': abolladurasDevolucion,
                    'rayadurasDevolucion': rayadurasDevolucion,
                    'piezasFaltantesDevolucion': piezasFaltantesDevolucion
                }
                let tabla;
                $.ajax({
                    type: "post",
                    url: "admin/Devolucion",
                    data: datosDevolucion,
                    success: function(response) {
                        window.location.href = "admin";
                        // $('.formularioDevolucion')[0].reset();
                        // $("#modalDevolucionInspeccion").modal("hide");
                        // alertify.set('notifier', 'position', 'top-right');
                        // alertify.success(response.notificacion);
                        // console.log(response);
                    }
                });
            });

        });
    });
    //================== modal Recibir Vehiculo end================
    //================== modal Solicitudes================
    $(".btnSolicitudes").click(function(e) {
        $("#TablasolicitudesPendientes > tbody").empty();
        $.ajax({
            type: "get",
            url: "admin/solicitudesPendientes",
            success: function(response) {
                $.each(response.datos, function(indexInArray, datos) {
                    $("#TablasolicitudesPendientes>tbody").append(`<tr>
                    <td class="align-middle text-center">
                         <span class="text-secondary text-xs font-weight-normal">${datos['cliente']}</span>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img alt='${datos['idvehiculo']}' src="<?= base_url() ?>/public/uploads/${datos['fotovehiculo']}" class="imagenVehiculoSolicitud avatar avatar-xl me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <input class="idVehiculoSolicitud" type="hidden" value="${datos['idvehiculo']}">
                                <input class="idSolicitud" type="hidden" value="${datos['id']}">
                                <h6 class="prueba mb-0 text-xs">${datos['descripcionvehiculo']}</h6>
                                <p class="text-xs text-secondary mb-0">${datos['marcaVehiculo']}</p>
                                <p class="text-xxs text-secondary mb-0">${datos['modeloVehiculo']}</p>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                         <span class="text-secondary text-xs font-weight-normal">${datos['telefono']}</span>
                    </td>
                    <td class="align-middle text-center">
                         <span class="text-secondary text-xs font-weight-normal">${datos['email']}</span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <span class="text-secondary text-xs font-weight-normal">${datos['fecharecogida']}---</span>
                            </div>
                            <div>
                                <span class="text-secondary text-xs font-weight-normal">${datos['fechadevolucion']}</span>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <span class="text-secondary text-xs font-weight-normal">${datos['horarecogida']}---</span>
                            </div>
                            <div>
                                <span class="text-secondary text-xs font-weight-normal">${datos['horadevolucion']}</span>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                         <span class="text-secondary text-xs font-weight-normal">${datos['fecha']}</span>
                    </td>
                    <td class="align-middle">
                        <button value="${datos['idcliente']}" class="btn btn-success btnAceptarSolicitud"><span class="material-icons">done</span></button>
                        <button value="${datos['idcliente']}" class="btn btn-danger btnEliminarSolicitud"><span class="material-icons">delete</span></button>
                    </td>
                // </tr>`);
                });
                $("#modalSolicitudes").modal('show');
                // console.log(response);
                acciones();
            }
        });


    });
    //================== modal Solicitudes end================

    //================== Detalle Vehiculo Solicitud================
    function acciones() {
        $(".imagenVehiculoSolicitud").click(function(e) {
            let idVehiculoSolicitud = $(this).attr("alt");
            // console.log(idVehiculoSolicitud);
            $.ajax({
                type: "post",
                url: "admin/infoVehiculoSolicitud/verData",
                data: {
                    "idVehiculo": idVehiculoSolicitud
                },
                success: function(response) {
                    $("#modalSolicitudes").modal("hide");
                    $.each(response, function(key, datos) {
                        $("#imagenVehiculoInfoSolicitud").attr("src", '<?= base_url("/public/uploads") ?>/' + datos['foto']);
                        $("#descripcionRentaInfoSolicitud").val(datos['descripcion']);
                        $("#marcaRentaInfoSolicitud").val(datos['marca']);
                        $("#modeloRentaInfoSolicitud").val(datos['modelo']);
                        $("#precioRentaInfoSolicitud").val(datos['precio']);
                        $("#chasisRentaInfoSolicitud").val(datos['chasis']);
                        $("#motorRentaInfoSolicitud").val(datos['motor']);
                        $("#transmisionRentaInfoSolicitud").val(datos['transmision']);
                        $("#placaRentaInfoSolicitud").val(datos['placa']);
                        $("#tipoRentaInfoSolicitud").val(datos['tipovehiculo']);
                        $("#modalInfoVehiculoSolicitud").modal("show");
                        console.log(response);
                    });

                }
            });

        });
        $(".btnInfoVehiculoSolicitud").click(function(e) {
            $("#modalInfoVehiculoSolicitud").modal("hide");
            $("#modalSolicitudes").modal("show");
        });
        $(".btnAceptarSolicitud").click(function(e) {
            let idClienteSolicitud = $(this).val();
            let idSolicitud = $(".idSolicitud").val();
            $.ajax({
                type: "post",
                url: "admin/procesarSolicitud",
                data: {
                    "idCliente": idClienteSolicitud
                },
                success: function(response) {
                    $("#modalSolicitudes").modal("hide");
                    $("#modalInspeccionSolicitudes").modal("show");
                    registrarNuevarenta(response, idClienteSolicitud, idSolicitud);
                    // console.log(response);
                }
            });

        });

        function registrarNuevarenta(data, idClienteSolicitud, idSolicitud) {
            $(".btnRegistrarRentaSolicitada").one("click", function() {
                let combustible = $('#combustibleSolicitud').val();
                let idVehiculo;
                let telefonoRenta;
                let emailRenta;
                let fechaRecogida;
                let fechaDevolucion;
                let horaRecogida;
                let horaDevolucion;
                let diferenciaDias;
                // validacion de los chech box
                let gato = 0;
                let luces = 0;
                let goma = 0;
                let kitHerramientas = 0;
                if ($('.gato').is(':checked')) {
                    gato = 1;
                }
                if ($('.luces').is(':checked')) {
                    luces = 1;
                }
                if ($('.goma').is(':checked')) {
                    goma = 1;
                }
                if ($('.kitHerramientas').is(':checked')) {
                    kitHerramientas = 1;
                }
                $.each(data.datos, function(id, datosSolicitud) {
                    idVehiculo = datosSolicitud['idvehiculo']
                    telefonoRenta = datosSolicitud['telefono']
                    emailRenta = datosSolicitud['email']
                    fechaRecogida = datosSolicitud['fecharecogida']
                    fechaDevolucion = datosSolicitud['fechadevolucion']
                    horaRecogida = datosSolicitud['horarecogida']
                    horaDevolucion = datosSolicitud['horadevolucion']
                    diferenciaDias = datosSolicitud['diastotales']
                });
                // console.log(data);

                // ===============================================================================

                let datos = {
                    'idCliente': idClienteSolicitud,
                    'idVehiculo': idVehiculo,
                    'telefonoRenta': telefonoRenta,
                    'emailRenta': emailRenta,
                    'fechaRecogida': fechaRecogida,
                    'fechaDevolucion': fechaDevolucion,
                    'horaRecogida': horaRecogida,
                    'horaDevolucion': horaDevolucion,
                    'gato': gato,
                    'luces': luces,
                    'goma': goma,
                    'kitHerramientas': kitHerramientas,
                    'combustible': combustible,
                    'diasTotales': diferenciaDias
                }
                // console.log(datos);
                $.ajax({
                    type: "post",
                    url: "admin/nuevaRentaAdmin",
                    data: datos,
                    success: function(response) {
                        // $('.formularioInspeccion')[0].reset();
                        // $('#rentaVehiculo')[0].reset();
                        // $("#modalInspeccion").modal("hide");
                        // alertify.set('notifier', 'position', 'top-right');
                        // alertify.success(response.notificacion);
                        $.ajax({
                            type: "post",
                            url: "admin/eliminarSolicitud",
                            data: {
                                "idSolicitud": idSolicitud
                            },
                            success: function(response) {
                                window.location.href = "admin";
                                // console.log(response);
                            }
                        });

                        // console.log(response);
                    }
                });
            });
        }
    }
    //================== Detalle Vehiculo Solicitud end================




    //================== Actualizacion de la notificacion de solicitudes================
    setInterval(() => {
        $.ajax({
            type: "get",
            url: "admin/solicitudes",
            success: function(response) {
                $(".conteoSolicitudes").text(response.conteo);
                if (response.notificacion) {
                    alertify.set('notifier', 'position', 'bottom-right');
                    alertify.warning(response.notificacion);
                }
            }
        });
    }, 1000);

    //================== Actualizacion de la notificacion de solicitudes END================
</script>