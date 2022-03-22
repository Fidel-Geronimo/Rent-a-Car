<?= $this->include("includes/header");
session_start();
?>
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header">
            <h3>Clientes <a href="" data-bs-toggle="modal" data-bs-target="#clientModal" class="btn bg-gradient-primary float-end"><i class="material-icons opacity-10">add</i> Nuevo</a></h3>
        </div>
        <div class="card-body table-responsive">
            <table id="example" class="table table-borderless">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Fecha</th>
                        <th></th>
                    </tr>

                </thead>
                <tbody class="clientData">
                    <?php foreach ($data as $datos) : ?>
                        <tr>
                            <td class="idEmpleado"><?= $datos['id'] ?></td>
                            <td><?= $datos['nombre'] ?></td>
                            <td><?= $datos['apellido'] ?></td>
                            <td><?= $datos['email'] ?></td>
                            <td><?= $datos['telefono'] ?></td>
                            <td><?= $datos['fecha'] ?></td>
                            <td>
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
        // console.log(idCliente);

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
                    $("#apellidoCliente").val(cliente['apellido']);
                    $("#emailCliente").val(cliente['email']);
                    $("#telefonoCliente").val(cliente['telefono']);
                    $("#clientModalEdit").modal("show")
                });

            }
        });

    });

    // Empleados End
</script>