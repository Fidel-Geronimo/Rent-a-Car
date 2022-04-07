<?= $this->include("includes/header"); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3">Vehiculos <a data-bs-toggle="modal" data-bs-target="#modalVehiculo" class="btn bg-gradient-info me-3 float-end"><i class="material-icons opacity-10">add</i> Nuevo</a></h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Precio</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Combustible</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $datos) : ?>
                                    <tr>
                                        <td class="align-middle text-center text-sm idVehiculo">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['id'] ?></span>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="<?= base_url("public/uploads/" . $datos["foto"]) ?>" class="avatar avatar-xl me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-xs"><?= $datos['descripcion'] ?></h6>
                                                    <p class="text-xs text-secondary mb-0"><?= $datos['marca'] ?></p>
                                                    <p class="text-xs text-secondary mb-0"><?= $datos['modelo'] ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['precio'] ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['tipocombustible'] ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['fecha'] ?></span>
                                        </td>

                                        <td class="align-middle">
                                            <a class="btn btn-success btnRentarVehiculo"><span class="material-icons">receipt</span></a>
                                            <a class="btn btn-info btnEditarVehiculo"><span class="material-icons">edit</span></a>
                                            <a href="<?= base_url("admin/vehiculos/borrar/" . $datos['id']); ?>" class="btn btn-danger "><span class="material-icons">delete</span></a>
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
<!-- =========================Alertas============================== -->
<script>
    <?php if (isset($_SESSION["notificacion"])) { ?>
        alertify.set('notifier', 'position', 'top-right');
        alertify.success("<?= $_SESSION["notificacion"] ?>");
    <?php
        unset($_SESSION['notificacion']);
    } ?>
</script>
<!-- ==========================End==================================== -->

<script>
    $(document).ready(function() {


        // boton editar Vehiculo
        $(".btnEditarVehiculo").click(function(e) {

            let idVehiculo = $(this).closest('tr').find(".idVehiculo").text();
            // console.log(idVehiculo);

            $.ajax({
                method: "POST",
                url: "vehiculos/verData",
                data: {
                    'idVehiculo': idVehiculo
                },
                success: function(response) {
                    // console.log(response);
                    $.each(response, function(key, vehiculo) {
                        $("#idVehiculo").val(vehiculo['id']);
                        $("#descripcionEdit").val(vehiculo['descripcion']);
                        $("#modeloEdit").val(vehiculo['modelo']);
                        $("#marcaEdit").val(vehiculo['marca']);
                        $("#precioEdit").val(vehiculo['precio']);
                        $("#placaEdit").val(vehiculo['placa']);
                        $("#chasisEdit").val(vehiculo['chasis']);
                        $("#motorEdit").val(vehiculo['motor']);
                        $("#personasVehiculoEdit").val(vehiculo['personas']);
                        $("#maletasVehiculoEdit").val(vehiculo['maletas']);
                        $("#estadoVehiculoEdit").val(vehiculo['estado']);
                        $("#combustibleVehiculoEdit").val(vehiculo['tipocombustible']);
                        $("#transmisionVehiculoEdit").val(vehiculo['transmision']);
                        $("#tipoVehiculoEdit").val(vehiculo['tipovehiculo']);
                        $("#fotoVehiculo").attr("src", '<?= base_url("/public/uploads") ?>/' + vehiculo['foto']);
                        $("#modalVehiculoEdit").modal("show");
                    });

                }
            });

        });

        // Vehiculo End

        // -=====================Formulario de Renta=========================

        $(".btnRentarVehiculo").click(function(e) {
            let idVehiculoRenta = $(this).closest('tr').find(".idVehiculo").text();
            $("#idVehiculoRenta").val(idVehiculoRenta.split(" ").join(""));

            $.ajax({
                type: "GET",
                url: "clientes/verDataRenta",
                success: function(response) {
                    // console.log(response);
                    $("#clienteRenta").empty();
                    $('#clienteRenta').prepend($('<option />', {
                        text: 'Seleccion El Cliente',
                        value: '0'
                    }));
                    $.each(response, function(key, datos) {
                        $('#clienteRenta').prepend($('<option />', {
                            text: datos['nombre'],
                            value: datos['id']
                        }));
                        $("#vehiculoModalRenta").modal("show")
                    });
                }
            });

        });
        // onchange del select de cliente
        $("#clienteRenta").change(function(e) {
            let idCliente = $("#clienteRenta").val();
            if (idCliente != 0) {
                $("#clienteRenta option[value='0']").remove();
                // console.log(idCliente);
                $.ajax({
                    type: "POST",
                    url: "clientes/rellenarInputs",
                    data: {
                        'idCliente': idCliente
                    },
                    success: function(response) {
                        // console.log(response.email);
                        $.each(response, function(key, datosCliente) {
                            $("#telefonoRenta").val(datosCliente['telefono']);
                            $("#emailRenta").val(datosCliente['email']);
                        });
                    }
                });
            }


        });
        // -=====================Formulario de Renta END=========================

        // ======================Captura Valor fechas ==========================
        $("#fechaRecogida").change(function(e) {
            let min = $("#fechaRecogida").val();
            // console.log(min);
            $("#fechaDevolucion").val(min);
            $("#fechaDevolucion").attr({
                "min": min // values (or variables) here
            });
        });
    });

    // obtencion de los valores antes de facturar
    $('.btnSiguiente').click(function(e) {
        e.preventDefault();
        let idvehiculorenta = $("#idVehiculoRenta").val().replace(/\s+/g, '');

        // captura de todos los datos del formulario de renta Admin
        let idcliente = $("#clienteRenta").val();
        let idVehiculo = idvehiculorenta;
        let telefonoRenta = $("#telefonoRenta").val();
        let emailRenta = $("#emailRenta").val();
        let fechaRecogida = $("#fechaRecogida").val();
        let fechaDevolucion = $("#fechaDevolucion").val();
        let horaRecogida = $("#horaRecogida").val();
        let horaDevolucion = $("#horaDevolucion").val();
        // ========================================================================

        // diferencia entre dos fechas
        let fechaInicio = new Date(fechaRecogida).getTime();
        let fechaFin = new Date(fechaDevolucion).getTime();
        let diferenciaDias = (fechaFin - fechaInicio) / (1000 * 60 * 60 * 24);
        // ========================================================================

        if (idVehiculo == "" || idcliente == "" ||
            telefonoRenta == "" || telefonoRenta == "" || emailRenta == "" ||
            fechaRecogida == "" || fechaDevolucion == "" || horaRecogida == "" || horaDevolucion == "") {
            alertify.set('notifier', 'position', 'top-right');
            alertify.error("Hay Campos Vacios");
        } else {
            $("#vehiculoModalRenta").modal("hide");
            $("#modalInspeccion").modal("show");
            $(".btnRegistrarRenta").one("click", function() {
                let combustible = $('#combustible').val();
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
                // ===============================================================================

                let datos = {
                    'idCliente': idcliente,
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
                $.ajax({
                    type: "post",
                    url: "nuevaRentaAdmin",
                    data: datos,
                    success: function(response) {
                        $('.formularioInspeccion')[0].reset();
                        $('#rentaVehiculo')[0].reset();
                        $("#modalInspeccion").modal("hide");
                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(response.notificacion);
                        // console.log(response);
                    }
                });
            });
        }



    });
</script>