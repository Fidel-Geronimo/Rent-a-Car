<?= $this->include("includes/header");
session_start(); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3">Empleados <a href="" data-bs-toggle="modal" data-bs-target="#modalEmpleado" class="btn bg-gradient-info me-4 float-end"><i class="material-icons opacity-10">add</i> Nuevo</a></h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table id="example" class="table table-borderless align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Empleado</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Funcion</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefono</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $datos) : ?>

                                    <tr>
                                        <td class="idEmpleado">
                                            <p class="text-xs font-weight-bold mb-0"><?= $datos['id'] ?></p>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="<?= base_url("/public/uploads/" . $datos["foto"]) ?>" class="avatar avatar-md me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-xs"><?= $datos['nombre'] ?></h6>
                                                    <p class="text-xs text-secondary mb-0"><?= $datos['email'] ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= $datos['funcion'] ?></p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['telefono'] ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['fecha'] ?></span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="#" class="btn btn-info btnEditar"><span class="material-icons">edit</span></a>
                                            <a href="<?= base_url("admin/empleados/borrar/" . $datos['id']) ?>" class="btn btn-danger"><span class="material-icons">delete</span></a>
                                        </td>

                                    <?php endforeach; ?>
                                    </tr>
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
    // boton editar Empleado
    $(".btnEditar").click(function(e) {

        let idEmpleado = $(this).closest('tr').find(".idEmpleado").text();
        // console.log(idEmpleado)

        $.ajax({
            method: "POST",
            url: "empleados/verData",
            data: {
                'idEmpleado': idEmpleado
            },
            success: function(response) {
                // console.log(response);
                $.each(response, function(key, empleados) {
                    $("#idEmpleado").val(empleados['id']);
                    $("#nombreEmpleado").val(empleados['nombre']);
                    $("#emailEmpleado").val(empleados['email']);
                    $("#telefonoEmpleado").val(empleados['telefono']);
                    $("#funcionEmpleado").val(empleados['funcion']);
                    $("#fotoEmpleado").attr("src", '<?= base_url("/public/uploads") ?>/' + empleados['foto']);
                    $("#modalEmpleadoEdit").modal("show")
                });

            }
        });

    });

    // Empleados End
</script>