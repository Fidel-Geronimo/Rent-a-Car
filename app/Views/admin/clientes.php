<?= $this->include("includes/header");
session_start();
?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3">Clientes <a data-bs-toggle="modal" data-bs-target="#clientModal" class="btn bg-gradient-info me-3 float-end"><i class="material-icons opacity-10">add</i> Nuevo</a></h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table id="example" class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NOMBRE</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">EMAIL</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">telefono</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">fecha</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $datos) : ?>
                                    <tr>
                                        <td class="idEmpleado align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['id'] ?></span>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-xs"><?= $datos['nombre'] ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['email'] ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['telefono'] ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal"><?= $datos['fecha'] ?></span>
                                        </td>

                                        <td class="align-middle">
                                            <a class="btn btn-info btnEditarCliente"><span class="material-icons">edit</span></a>
                                            <a href="<?= base_url("admin/clientes/borrar/" . $datos['id']); ?>" class="btn btn-danger "><span class="material-icons">delete</span></a>
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
    // boton editar Empleado
    $(".btnEditarCliente").click(function(e) {

        let idCliente = $(this).closest('tr').find(".idEmpleado").text();
        console.log(idCliente);

        $.ajax({
            method: "POST",
            url: "clientes/verData",
            data: {
                'idCliente': idCliente
            },
            success: function(response) {
                // console.log(response);
                $.each(response, function(key, cliente) {
                    $("#idCliente").val(cliente['id']);
                    $("#nombreCliente").val(cliente['nombre']);
                    $("#emailCliente").val(cliente['email']);
                    $("#telefonoCliente").val(cliente['telefono']);
                    $("#clientModalEdit").modal("show")
                });

            }
        });

    });

    // Empleados End
</script>