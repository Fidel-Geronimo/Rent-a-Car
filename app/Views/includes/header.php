<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url() ?>/public/assets/admin/img/favicon.png">
    <title>
        Admin
    </title>
    <!-- alertify -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/assets/alertify/alertify.css" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- Data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url() ?>/public/assets/admin/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <img src="<?= base_url() ?>/public/assets/admin/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
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
                    <a id="perfil" class="nav-link text-white <?= $perfil ?> " href="">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Perfil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">login</i>
                        </div>
                        <span class="nav-link-text ms-1">Sign In</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="./pages/sign-up.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">assignment</i>
                        </div>
                        <span class="nav-link-text ms-1">Sign Up</span>
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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
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
                        <label class="form-label">Nombre</label>
                        <input required id="nombre" name="nombre" type="text" type="text" class="form-control">
                    </div>

                    <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">Apellido</label>
                        <input required id="apellido" name="apellido" type="text" class="form-control">
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
                <h5 class="modal-title" id="clientModalLabelEdit">Nuevo Cliente</h5>
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
                        <label>Apellido</label>
                        <input required id="apellidoCliente" name="apellido" type="text" class="form-control">
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
                                <select class="form-control" id="tipoVehiculo" name="tipoVehiculo">
                                    <option>Coche</option>
                                    <option>Jeepeta</option>
                                    <option>Furgoneta</option>
                                </select>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="transmisionVehiculo" class="ms-0">Transimision</label>
                                <select class="form-control" id="transmisionVehiculo" name="transmisionVehiculo">
                                    <option>Automatico</option>
                                    <option>Manual</option>
                                    <option>Hibrido</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="combustibleVehiculo" class="ms-0">Combustible</label>
                                <select class="form-control" id="combustibleVehiculo" name="combustibleVehiculo">
                                    <option>Gasolina</option>
                                    <option>Gasoil</option>
                                    <option>Gas</option>
                                </select>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="estadoVehiculo" class="ms-0">Estado</label>
                                <select class="form-control" id="estadoVehiculo" name="estadoVehiculo">
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
                                <select class="form-control" id="maletasVehiculo" name="maletasVehiculo">
                                    <option>2</option>
                                    <option>4</option>
                                    <option>5+</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="personasVehiculo" class="ms-0">Personas</label>
                                <select class="form-control" id="personasVehiculo" name="personasVehiculo">
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
            <form id="vehiculoNuevoForm" action="<?= base_url('admin/vehiculos/editar') ?>" method="POST" enctype="multipart/form-data">
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
                                <select class="form-control" id="tipoVehiculoEdit" name="tipoVehiculoEdit">
                                    <option>Coche</option>
                                    <option>Jeepeta</option>
                                    <option>Furgoneta</option>
                                </select>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="transmisionVehiculoEdit" class="ms-0">Transimision</label>
                                <select class="form-control" id="transmisionVehiculoEdit" name="transmisionVehiculoEdit">
                                    <option>Automatico</option>
                                    <option>Manual</option>
                                    <option>Hibrido</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="combustibleVehiculoEdit" class="ms-0">Combustible</label>
                                <select class="form-control" id="combustibleVehiculoEdit" name="combustibleVehiculoEdit">
                                    <option>Gasolina</option>
                                    <option>Gasoil</option>
                                    <option>Gas</option>
                                </select>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="estadoVehiculoEdit" class="ms-0">Estado</label>
                                <select class="form-control" id="estadoVehiculoEdit" name="estadoVehiculoEdit">
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
                                <select class="form-control" id="maletasVehiculoEdit" name="maletasVehiculoEdit">
                                    <option>2</option>
                                    <option>4</option>
                                    <option>5+</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mb-4">
                                <label for="personasVehiculoEdit" class="ms-0">Personas</label>
                                <select class="form-control" id="personasVehiculoEdit" name="personasVehiculoEdit">
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
            <form id="vehiculoNuevoForm" action="<?= base_url('admin/vehiculos/nuevo') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group input-group-static mb-4">
                        <label for="clienteRenta" class="ms-0">Cliente</label>
                        <select class="form-control" id="clienteRenta" name="clienteRenta">

                        </select>
                    </div>
                    <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">Telefono</label>
                        <input readonly required id="telefonoRenta" name="telefonoRenta" type="tel" class="form-control">
                    </div>
                    <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">Correo Electronico</label>
                        <input readonly required id="emailRenta" name="emailRenta" type="tel" class="form-control">
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

</html>