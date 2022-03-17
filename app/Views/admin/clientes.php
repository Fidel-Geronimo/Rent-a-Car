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
                            <td><?= $datos['nombre'] ?></td>
                            <td><?= $datos['apellido'] ?></td>
                            <td><?= $datos['email'] ?></td>
                            <td><?= $datos['telefono'] ?></td>
                            <td><?= $datos['fecha'] ?></td>
                            <td>
                                <a href="" class="btn btn-info"><span class="material-icons">edit</span></a>
                                <a href="" class="btn btn-danger"><span class="material-icons">delete</span></a>
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

<script>
    <?php if (isset($_SESSION["notificacion"])) { ?>
        alertify.set('notifier', 'position', 'top-right');
        alertify.success("<?= $_SESSION["notificacion"] ?>");

    <?php
        unset($_SESSION['notificacion']);
    } ?>
</script>

<!-- <script>
    $(function() {
        // loadClients();

    });

    // Listar Todos los cliente Start=============================
    function loadClients() {

        $.ajax({
            type: "get",
            url: "clientes/getdata",
            success: function(response) {
                let data = '';
                $.each(response.clientes, function(key, value) {
                    data += `<tr>
                        <td>${value['id']}</td>
                        <td>${value['nombre']}</td>
                        <td>${value['apellido']}</td>
                        <td>${value['email']}</td>
                        <td>${value['telefono']}</td>
                        <td>${value['fecha']}</td>
                        <td><button type="button" class="btn btn-info">Editar</button> <button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>`
                });
                $('.clientData').html(data);

            }
        });
    }
    // Listar Todos los cliente End=============================
</script> -->