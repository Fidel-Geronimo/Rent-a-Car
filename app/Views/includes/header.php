<?php
session_start();

if (!isset($_SESSION["login"])) { ?>
    <script>
        window.location.href = "<?= base_url("login") ?>";
    </script>
<?php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <title>Admin Panel</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/public/assets/image/favicon.png" type="image/x-icon"> <!-- alertify -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/assets/alertify/alertify.css" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- Data table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/datatables.min.css" />

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> -->
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url() ?>/public/assets/admin/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="<?= base_url('admin') ?>">
                <img src=" <?= base_url() ?>/public/assets/image/favicon.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a id="dashboard" class="nav-link text-white <?= $dashboard ?>" href="<?= base_url("admin") ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10 ">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="clientes" class="nav-link text-white <?= $vehiculos ?>" href="<?= base_url("admin/vehiculos") ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">directions_car</i>
                        </div>
                        <span class="nav-link-text ms-1">Vehiculos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="clientes" class="nav-link text-white <?= $clientes ?>" href="<?= base_url("admin/clientes") ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">groups</i>
                        </div>
                        <span class="nav-link-text ms-1">Clientes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="empleados" class="nav-link text-white <?= $empleados ?> " href="<?= base_url("admin/empleados") ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">engineering</i>
                        </div>
                        <span class="nav-link-text ms-1">Empleados</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="reportes" class="nav-link text-white <?= $reportes ?> " href="<?= base_url("admin/reportes") ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt</i>
                        </div>
                        <span class="nav-link-text ms-1">Reportes</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('logincerrar') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">login</i>
                        </div>
                        <span class="nav-link-text ms-1">Cerrar</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Admin</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Rentas Control</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="<?= base_url('logincerrar') ?>" class="nav-link text-body font-weight-bold px-0">
                                <i class="material-icons opacity-10">login</i>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <script src="<?= base_url() ?>/public/assets/admin/js/core/popper.min.js"></script>
        <script src="<?= base_url() ?>/public/assets/admin/js/core/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>/public/assets/admin/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url() ?>/public/assets/admin/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="<?= base_url() ?>/public/assets/admin/js/plugins/chartjs.min.js"></script>
        <!-- kit de iconos -->

        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="<?= base_url() ?>/public/assets/admin/js/material-dashboard.min.js?v=3.0.0"></script>
</body>
<!-- Modal de clintes -->
<div class="modal fade" id="clientModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="clientModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clientModalLabel">Nuevo Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <span class="ms-3 mt-2 error" style="color: #e91e63;"></span>
            <form id="clientForm" action="<?= base_url('admin/clientes/nuevo') ?>" method="POST">
                <div class="modal-body">
                    <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">Nombre Completo</label>
                        <input required id="nombre" name="nombre" type="text" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">Email</label>
                        <input required id="email" name="email" type="email" class="form-control">
                    </div>
                    <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">Telefono</label>
                        <input required id="telefono" name="telefono" type="tel" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary btnClientSave">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de editar Cliente -->
<div class="modal fade" id="clientModalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="clientModalLabelEdit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clientModalLabelEdit">Edicion Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <span class="ms-3 mt-2 error" style="color: #e91e63;"></span>
            <form id="clientFormEdit" action="<?= base_url('admin/clientes/editar') ?>" method="POST">
                <div class="modal-body">
                    <input name="idCliente" id="idCliente" type="hidden" value="">
                    <div class="input-group input-group-static mb-4">
                        <label>Nombre</label>
                        <input required id="nombreCliente" name="nombre" type="text" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label>Email</label>
                        <input required id="emailCliente" name="email" type="email" class="form-control">
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label>Telefono</label>
                        <input required id="telefonoCliente" name="telefono" type="tel" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary btnClientSave">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de Empleados -->
<div class="modal fade" id="modalEmpleado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="empleadoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="empleadoModal">Nuevo Empleado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <span class="ms-3 mt-2 error" style="color: #e91e63;"></span>
            <form id="empleadoForm" action="<?= base_url('admin/empleados/nuevo') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">Nombre</label>
                        <input required id="nombre" name="nombre" type="text" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">Email</label>
                        <input required id="email" name="email" type="email" class="form-control">
                    </div>
                    <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">Telefono</label>
                        <input required id="telefono" name="telefono" type="tel" class="form-control">
                    </div>
                    <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">Funcion</label>
                        <input required id="funcion" name="funcion" type="text" class="form-control">
                    </div>
                    <div class="">
                        <label for="">Foto</label><br>
                        <input required accept="image/png,image/jpeg,image/jpg" type="file" class="form-control" id="foto" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary btnEmpleadoSave">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de Edicion Empleados -->
<div class="modal fade" id="modalEmpleadoEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="empleadoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="empleadoModal">Edicion Empleado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <span class="ms-3 mt-2 error" style="color: #e91e63;"></span>
            <form id="empleadoFormEdit" action="<?= base_url('admin/empleados/editar') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input name="idEmpleado" id="idEmpleado" type="hidden" value="">
                    <div class="input-group input-group-static mb-4">
                        <label>Nombre</label>
                        <input required id="nombreEmpleado" name="nombre" type="text" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label>Email</label>
                        <input required id="emailEmpleado" name="email" type="email" class="form-control">
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label>Telefono</label>
                        <input required id="telefonoEmpleado" name="telefono" type="tel" class="form-control">
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label>Funcion</label>
                        <input required id="funcionEmpleado" name="funcion" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <img id="fotoEmpleado" src="" class="img-fluid mx-auto d-block shadow border-radius-lg"" alt=" ...">
                    </div>
                    <div class="">
                        <label for="">Foto</label><br>
                        <input accept="image/png,image/jpeg,image/jpg" type="file" class="form-control" id="foto" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary btnEmpleadoSave">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de Vehiculos -->
<div class="modal fade" id="modalVehiculo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="vehiculoModalEdit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="vehiculoModal">Nuevo Vehiculo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <span class="ms-3 mt-2 error" style="color: #e91e63;"></span>
            <form id="vehiculoNuevoForm" action="<?= base_url('admin/vehiculos/nuevo') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">Descripcion</label>
                        <input required id="descripcion" name="descripcion" type="text" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label">Marca</label>
                                <input required id="marca" name="marca" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label">Modelo</label>
                                <input required id="modelo" name="modelo" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label">Precio Alquiler</label>
                                <input required id="precio" name="precio" type="number" class="form-control">
                            </div>
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label">No. Chasis</label>
                                <input required id="chasis" name="chasis" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label">No. Motor</label>
                                <input required id="motor" name="motor" type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label">No. Placa</label>
                                <input required id="placa" name="placa" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="tipoVehiculo" class="ms-0">Tipo De Vehiculo</label>
                                <select required class="form-control" id="tipoVehiculo" name="tipoVehiculo">
                                    <option>Coche</option>
                                    <option>Jeepeta</option>
                                    <option>Furgoneta</option>
                                </select>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="transmisionVehiculo" class="ms-0">Transimision</label>
                                <select required class="form-control" id="transmisionVehiculo" name="transmisionVehiculo">
                                    <option>Automatico</option>
                                    <option>Manual</option>
                                    <option>Hibrido</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="combustibleVehiculo" class="ms-0">Combustible</label>
                                <select required class="form-control" id="combustibleVehiculo" name="combustibleVehiculo">
                                    <option>Gasolina</option>
                                    <option>Gasoil</option>
                                    <option>Gas</option>
                                </select>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="estadoVehiculo" class="ms-0">Estado</label>
                                <select require class="form-control" id="estadoVehiculo" name="estadoVehiculo">
                                    <option>Nuevo</option>
                                    <option>Usado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="maletasVehiculo" class="ms-0">Maletas</label>
                                <select required class="form-control" id="maletasVehiculo" name="maletasVehiculo">
                                    <option>2</option>
                                    <option>4</option>
                                    <option>5+</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="personasVehiculo" class="ms-0">Personas</label>
                                <select required class="form-control" id="personasVehiculo" name="personasVehiculo">
                                    <option>2</option>
                                    <option>4</option>
                                    <option>5+</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <label for="">Foto</label><br>
                        <input accept="image/png,image/jpeg,image/jpg" type="file" class="form-control" id="foto" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary btnVehiculoNuevo">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de Edicion Vehiculos -->
<div class="modal fade" id="modalVehiculoEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="vehiculoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="vehiculoModalEdit">Edicion Vehiculo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <span class="ms-3 mt-2 error" style="color: #e91e63;"></span>
            <form id="edicionVehiculo" action="<?= base_url('admin/vehiculos/editar') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input id="idVehiculo" name="idVehiculo" type="hidden" value="">
                    <div class="input-group input-group-static mb-4">
                        <label>Descripcion</label>
                        <input required id="descripcionEdit" name="descripcionEdit" type="text" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label>Marca</label>
                                <input required id="marcaEdit" name="marcaEdit" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label>Modelo</label>
                                <input required id="modeloEdit" name="modeloEdit" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label>Precio Alquiler</label>
                                <input required id="precioEdit" name="precioEdit" type="number" class="form-control">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label>No. Chasis</label>
                                <input required id="chasisEdit" name="chasisEdit" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label>No. Motor</label>
                                <input required id="motorEdit" name="motorEdit" type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label>No. Placa</label>
                                <input required id="placaEdit" name="placaEdit" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="tipoVehiculoEdit" class="ms-0">Tipo De Vehiculo</label>
                                <select required class="form-control" id="tipoVehiculoEdit" name="tipoVehiculoEdit">
                                    <option>Coche</option>
                                    <option>Jeepeta</option>
                                    <option>Furgoneta</option>
                                </select>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="transmisionVehiculoEdit" class="ms-0">Transimision</label>
                                <select required class="form-control" id="transmisionVehiculoEdit" name="transmisionVehiculoEdit">
                                    <option>Automatico</option>
                                    <option>Manual</option>
                                    <option>Hibrido</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="combustibleVehiculoEdit" class="ms-0">Combustible</label>
                                <select required class="form-control" id="combustibleVehiculoEdit" name="combustibleVehiculoEdit">
                                    <option>Gasolina</option>
                                    <option>Gasoil</option>
                                    <option>Gas</option>
                                </select>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="estadoVehiculoEdit" class="ms-0">Estado</label>
                                <select required class="form-control" id="estadoVehiculoEdit" name="estadoVehiculoEdit">
                                    <option>Nuevo</option>
                                    <option>Usado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="maletasVehiculoEdit" class="ms-0">Maletas</label>
                                <select required class="form-control" id="maletasVehiculoEdit" name="maletasVehiculoEdit">
                                    <option>2</option>
                                    <option>4</option>
                                    <option>5+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="personasVehiculoEdit" class="ms-0">Personas</label>
                                <select required class="form-control" id="personasVehiculoEdit" name="personasVehiculoEdit">
                                    <option>2</option>
                                    <option>4</option>
                                    <option>5+</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <img id="fotoVehiculo" src="" class="img-fluid mx-auto d-block shadow border-radius-lg"" alt=" ...">
                    </div>
                    <div class="">
                        <label for="">Foto</label><br>
                        <input accept="image/png,image/jpeg,image/jpg" type="file" class="form-control" id="foto" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary btnVehiculoSave">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal de Rentar de vehiculos -->
<div class="modal fade" id="vehiculoModalRenta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="vehiculoModalRenta" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="vehiculoModal">Nueva Renta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <span class="ms-3 mt-2 error" style="color: #e91e63;"></span>
            <form id="rentaVehiculo">
                <div class="modal-body">
                    <input name="idVehiculoRenta" id="idVehiculoRenta" type="hidden" value="">
                    <div class="input-group input-group-static mb-4">
                        <label for="clienteRenta" class="ms-0">Cliente</label>
                        <select readonly class="form-control" id="clienteRenta" name="clienteRenta">
                            <option value="" selected>Seleccion El Cliente</option>
                        </select>
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label>Telefono</label>
                        <input required id="telefonoRenta" name="telefonoRenta" type="tel" class="form-control">
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label>Correo Electronico</label>
                        <input readonly required id="emailRenta" name="emailRenta" type="email" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static my-3">
                                <label>Fecha De Recogida</label>
                                <?php $hoy = date("Y-m-d"); ?>
                                <input name="fechaRecogida" id="fechaRecogida" required min="<?= $hoy ?>" type="date" class="form-control">
                            </div>
                            <div class="input-group input-group-static my-3">
                                <label>Hora De Recogida</label>
                                <input name="horaRecogida" id="horaRecogida" required type="time" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static my-3">
                                <label>Fecha De Devolucion</label>
                                <input name="fechaDevolucion" id="fechaDevolucion" required min="" type="date" class="form-control">
                            </div>
                            <div class="input-group input-group-static my-3">
                                <label>Hora De Devolucion</label>
                                <input name="horaDevolucion" id="horaDevolucion" required type="time" class="form-control">
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
<!-- modal de Proceso de inspeccion Admin-->
<div class="modal fade" id="modalInspeccion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalInspeccionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Inspeccion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="formularioInspeccion">
                <div class="modal-body">
                    <div class="form-check">
                        <input class="form-check-input gato" type="checkbox" value="1" id="gato">
                        <label class="form-check-label" for="gato">
                            Gato
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input luces" type="checkbox" value="1" id="luces">
                        <label class="" for="luces">
                            Luces Xenon
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input goma" type="checkbox" value="1" id="goma">
                        <label class="form-check-label" for="goma">
                            Goma De Repuesto
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input kitHerramientas" type="checkbox" value="1" id="herramientas">
                        <label class="form-check-label" for="herramientas">
                            Kit De Herramientas
                        </label>
                    </div>
                    <div class="container mt-4">
                        <label for="combustible" class="ms-0">Cantidad De Conbustible</label>
                        <select class="form-control" id="combustible" name="combustible">
                            <option>1/2</option>
                            <option>1/3</option>
                            <option>3/4</option>
                            <option>Lleno</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button data-bs-toggle="modal" data-bs-target="#vehiculoModalRenta" type="button" class="btn btn-secondary">Atras</button>
                <button type="button" class="btn btn-primary btnRegistrarRenta">Registrar</button>
            </div>
        </div>
    </div>
</div>

<!-- modal de Proceso de inspeccion Solicitudes-->
<div class="modal fade" id="modalInspeccionSolicitudes" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalInspeccionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Inspeccion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="formularioInspeccion">
                <div class="modal-body">
                    <div class="form-check">
                        <input class="form-check-input gato" type="checkbox" value="1" id="gato">
                        <label class="form-check-label" for="gato">
                            Gato
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input luces" type="checkbox" value="1" id="luces">
                        <label class="" for="luces">
                            Luces Xenon
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input goma" type="checkbox" value="1" id="goma">
                        <label class="form-check-label" for="goma">
                            Goma De Repuesto
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input kitHerramientas" type="checkbox" value="1" id="herramientasSolicitud">
                        <label class="form-check-label" for="herramientasSolicitud">
                            Kit De Herramientas
                        </label>
                    </div>
                    <div class="container mt-4">
                        <label for="combustible" class="ms-0">Cantidad De Conbustible</label>
                        <select class="form-control" id="combustibleSolicitud" name="combustible">
                            <option>1/2</option>
                            <option>1/3</option>
                            <option>3/4</option>
                            <option>Lleno</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button data-bs-toggle="modal" data-bs-target="#modalSolicitudes" type="button" class="btn btn-secondary">Atras</button>
                <button type="button" class="btn btn-primary btnRegistrarRentaSolicitada">Registrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Info renta -->
<div class="modal fade" id="modalInfoRenta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="vehiculoModalRenta" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="vehiculoModal">Info Renta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <span class="ms-3 mt-2 error" style="color: #e91e63;"></span>
            <form>
                <div class=" modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="mb-4">
                                <img id="imagenVehiculoInfo" src="" class="img-thumbnail mx-auto d-block" alt="...">
                            </div>
                            <div class="col-6">
                                <h4> Cliente:</h4>
                                <div class="input-group input-group-static mb-4">
                                    <label>Cliente</label>
                                    <input readonly id="clienteRentaInfo" name="clienteRentaInfo" type="text" class="form-control">
                                </div>
                                <div class="input-group input-group-static mb-4">
                                    <label>Telefono</label>
                                    <input readonly id="telefonoRentaInfo" name="telefonoRentaInfo" type="text" class="form-control">
                                </div>
                                <div class="input-group input-group-static mb-4">
                                    <label>Correo Electronico</label>
                                    <input readonly id="emailRentaInfo" name="emailRentaInfo" type="text" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group input-group-static my-3">
                                            <label>Fecha De Recogida</label>
                                            <input id="fechaRecogidaInfo" readonly type="date" class="form-control">
                                        </div>
                                        <div class="input-group input-group-static my-3">
                                            <label>Hora De Recogida</label>
                                            <input id="horaRecogidaInfo" readonly type="time" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group input-group-static my-3">
                                            <label>Fecha De Devolucion</label>
                                            <input id="fechaDevolucionInfo" readonly type="date" class="form-control">
                                        </div>
                                        <div class="input-group input-group-static my-3">
                                            <label>Hora De Devolucion</label>
                                            <input id="horaDevolucionInfo" readonly type="time" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h4>Vehiculo:</h4>
                                <div class="input-group input-group-static mb-4">
                                    <label>Descripcion</label>
                                    <input readonly id="descripcionRentaInfo" name="descripcionRentaInfo" type="text" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Marca</label>
                                            <input readonly id="marcaRentaInfo" name="marcaRentaInfo" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Modelo</label>
                                            <input readonly id="modeloRentaInfo" name="modeloEdit" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Precio Alquiler</label>
                                            <input readonly id="precioRentaInfo" name="precioRentaInfo" type="number" class="form-control">
                                        </div>
                                        <div class="input-group input-group-static mb-4">
                                            <label>No. Chasis</label>
                                            <input readonly id="chasisRentaInfo" name="chasisRentaInfo" type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-static mb-4">
                                            <label>Transmision</label>
                                            <input readonly id="transmisionRentaInfo" name="transmisionRentaInfo" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group input-group-static mb-4">
                                            <label>No. Motor</label>
                                            <input readonly id="motorRentaInfo" name="motorRentaInfo" type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-static mb-4">
                                            <label>No. Placa</label>
                                            <input readonly id="placaRentaInfo" name="placaRentaInfo" type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-static mb-4">
                                            <label>Tipo Vehiculo</label>
                                            <input readonly id="tipoRentaInfo" name="tipoRentaInfo" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal de Proceso de Devolucion e inspeccion -->
<div class="modal fade" id="modalDevolucionInspeccion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalInspeccionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Devolucion/Inspeccion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="formularioDevolucion">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h5>Agregados</h5>
                                <div class="form-check">
                                    <input class="form-check-input gatoDevolucion" type="checkbox" value="1" id="gatoDevolucion">
                                    <label class="form-check-label" for="gatoDevolucion">
                                        Gato
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input kitHerramientasDevolucion" type="checkbox" value="1" id="herramientasDevolucion">
                                    <label class="form-check-label" for="herramientasDevolucion">
                                        Kit De Herramientas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input gomaDevolucion" type="checkbox" value="1" id="gomaDevolucion">
                                    <label class="form-check-label" for="gomaDevolucion">
                                        Goma De Repuesto
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5>Defectos</h5>
                                <div class="form-check">
                                    <input class="form-check-input abolladurasDevolucion" type="checkbox" value="1" id="abolladurasDevolucion">
                                    <label class="form-check-label" for="abolladurasDevolucion">
                                        Abolladuras
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input rayadurasDevolucion" type="checkbox" value="1" id="rayadurasDevolucion">
                                    <label class="form-check-label" for="rayadurasDevolucion">
                                        Rayaduras
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input piezasDevolucion" type="checkbox" value="1" id="piezasDevolucion">
                                    <label class="form-check-label" for="piezasDevolucion">
                                        Falta De Piezas
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary btnConfirmarDevolucion">Confirmar</button>
            </div>
        </div>
    </div>
</div>
<!-- modal para solicitudes -->
<!-- Modal -->
<div class="modal fade" id="modalSolicitudes" tabindex="-1" aria-labelledby="solitudesModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="solitudesModal">Solicitudes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="TablasolicitudesPendientes" class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Vehiculo</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fechas Reservadas</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha Solicitud</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal de Info solicitud vehiculo entrate -->
<div class="modal fade" id="modalInfoVehiculoSolicitud" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="infoVehiculoSolicitud" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoVehiculoSolicitud">Info Vehiculo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <span class="ms-3 mt-2 error" style="color: #e91e63;"></span>
            <form>
                <div class=" modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="mb-4">
                                <img id="imagenVehiculoInfoSolicitud" src="" class="img-thumbnail mx-auto d-block" alt="...">
                            </div>
                            <h4>Vehiculo:</h4>
                            <div class="input-group input-group-static mb-4">
                                <label>Descripcion</label>
                                <input readonly id="descripcionRentaInfoSolicitud" name="descripcionRentaInfoSolicitud" type="text" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Marca</label>
                                        <input readonly id="marcaRentaInfoSolicitud" name="marcaRentaInfoSolicitud" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Modelo</label>
                                        <input readonly id="modeloRentaInfoSolicitud" name="modeloRentaInfoSolicitud" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Precio Alquiler</label>
                                        <input readonly id="precioRentaInfoSolicitud" name="precioRentaInfoSolicitud" type="number" class="form-control">
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>No. Chasis</label>
                                        <input readonly id="chasisRentaInfoSolicitud" name="chasisRentaInfoSolicitud" type="text" class="form-control">
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Transmision</label>
                                        <input readonly id="transmisionRentaInfoSolicitud" name="transmisionRentaInfoSolicitud" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-static mb-4">
                                        <label>No. Motor</label>
                                        <input readonly id="motorRentaInfoSolicitud" name="motorRentaInfoSolicitud" type="text" class="form-control">
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>No. Placa</label>
                                        <input readonly id="placaRentaInfoSolicitud" name="placaRentaInfoSolicitud" type="text" class="form-control">
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Tipo Vehiculo</label>
                                        <input readonly id="tipoRentaInfoSolicitud" name="tipoRentaInfoSolicitud" type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btnInfoVehiculoSolicitud">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

</html>