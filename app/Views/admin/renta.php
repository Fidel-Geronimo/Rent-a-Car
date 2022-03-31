<?= $this->include("includes/header"); ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3">Rentas Activas <a data-bs-toggle="modal" data-bs-target="#modalVehiculo" class="btn bg-gradient-info me-3 float-end"><i class="material-icons opacity-10">add</i> Nuevo</a></h4>
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
                                <?php foreach ($data as $datos) : ?>
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
</script>