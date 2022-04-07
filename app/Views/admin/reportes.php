<?= $this->include("includes/header");
session_start();
?>

<div class="container py-4">
    <div class="row">
        <div class="col-8">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3">Reportes</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-lg">
                        <table id="tablaReporte" class="table align-items-center mb-0 tablaReporte">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CLIENTE</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripcion</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">fecha</th>
                                </tr>
                            </thead>
                            <tbody id="bodyReporte">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body selects">
                    <div class="input-group input-group-static mb-4">
                        <label for="selectTodo" class="ms-0">Mostrar:</label>
                        <select class="form-control" id="selectTodo">
                            <option value="1">Todo</option>
                            <option value="2">Abiertas</option>
                            <option value="3">Cerradas</option>
                        </select>
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label for="filtrarPorSelect" class="ms-0">Filtrar Por:</label>
                        <select class="form-control" id="filtrarPorSelect">
                            <option value="1">Filtra por categorias</option>
                            <option value="2">Vehiculo</option>
                            <option value="3">Clientes</option>
                        </select>
                    </div>
                    <div style="display: none;" class="input-group input-group-static mb-4" id="selecClientes">
                        <label for="clienteSelect" class="ms-0">Clientes:</label>
                        <select class="form-control" id="clienteSelect">
                            <option value="1">Todo</option>
                            <option value="2">Abiertas</option>
                            <option value="3">Cerradas</option>
                        </select>
                    </div>
                    <div style="display: none;" class="input-group input-group-static mb-4" id="selecVehiculos">
                        <label for="vehiculoSelect" class="ms-0">Vehiculos:</label>
                        <select class="form-control" id="vehiculoSelect">
                            <option value="1">Todo</option>
                            <option value="2">Abiertas</option>
                            <option value="3">Cerradas</option>
                        </select>
                    </div>
                    <div class="container">
                        <div class="row">
                            <button id="btnFiltrar" class="btn btn-primary">Filtrar</button>
                        </div>
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
        function iniciarDataTable() {
            $('#tablaReporte').DataTable({
                language: {
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sSearch": "Buscar:",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "sProcessing": "Procesando...",
                },
                //para usar los botones   
                responsive: "true",
                dom: 'Bfrtilp',
                buttons: [{
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel"></i> ',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-success'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fas fa-file-pdf"></i> ',
                        titleAttr: 'Exportar a PDF',
                        className: 'btn btn-danger'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i> ',
                        titleAttr: 'Imprimir',
                        className: 'btn btn-info'
                    },
                ]
            });
        }

        function ListarRentas() {
            $.ajax({
                type: "get",
                url: "reportesInfo",
                success: function(response) {
                    // console.log(response);
                    $("#bodyReporte").hide(250, function() {
                        $("#tablaReporte").dataTable().fnDestroy();
                        $("#bodyReporte").empty();
                        $.each(response, function(indexInArray, datos) {
                            let estado;
                            if (datos.estado == 0) {
                                estado = "Abierto"
                            } else {
                                estado = "Cerrado";
                            }
                            $("#bodyReporte").append(`
                        <tr>
                            <td class="idEmpleado align-middle text-center text-sm">
                                <span class="text-secondary text-xs font-weight-normal">${datos.id}</span>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs nombre">${datos.cliente}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="<?= base_url() ?>/public/uploads/${datos.foto}" class="avatar avatar-md me-3">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs">${datos.descripcionvehiculo}</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-normal">${estado}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span  class="botonprueba text-secondary text-xs font-weight-normal">${datos.fecha}</span>
                            </td>
                        </tr>
                        `);
                        });
                        iniciarDataTable();
                    });
                    $("#bodyReporte").show(250);
                }
            });
        }

        function ListarClientes() {
            $.ajax({
                type: "GET",
                url: "clientes/verDataRenta",
                success: function(response) {
                    // console.log(response);
                    $("#clienteSelect").empty();
                    $('#clienteSelect').prepend($('<option />', {
                        text: 'Seleccion El Cliente',
                        value: '0'
                    }));
                    $.each(response, function(key, datos) {
                        $('#clienteSelect').prepend($('<option />', {
                            text: datos['nombre'],
                            value: datos['id']
                        }));
                        // $("#vehiculoModalRenta").modal("show")
                    });
                }
            });
        }

        function ListarReportes(data) {

            if (data != "") {

                $("#bodyReporte").hide(500, function() {
                    $("#tablaReporte").dataTable().fnDestroy();
                    $("#bodyReporte").empty();
                    $.each(data, function(id, datos) {
                        let estado;
                        if (datos.estado == 0) {
                            estado = "Abierto"
                        } else {
                            estado = "Cerrado";
                        }
                        $("#bodyReporte").append(`
                        <tr>
                            <td class="idEmpleado align-middle text-center text-sm">
                                <span class="text-secondary text-xs font-weight-normal">${datos.id}</span>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs nombre">${datos.cliente}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="<?= base_url() ?>/public/uploads/${datos.foto}" class="avatar avatar-md me-3">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs">${datos.descripcionvehiculo}</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-normal">${estado}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-normal">${datos.fecha}</span>
                            </td>
                        </tr>
                        `);

                    });
                    iniciarDataTable();
                });


                $("#bodyReporte").show(250);


            } else {
                $("#tablaReporte").dataTable().fnDestroy();
                $("#bodyReporte").empty();
                $('#tablaReporte').DataTable({
                    "ordering": false
                });
                // console.log("nope");
            }

        }

        function ListarVehiculo() {
            $.ajax({
                type: "GET",
                url: "vehiculo/rellenarDataSelects",
                success: function(response) {
                    // console.log(response);
                    $("#vehiculoSelect").empty();
                    $('#vehiculoSelect').prepend($('<option />', {
                        text: 'Seleccion El Vehiculo',
                        value: '0'
                    }));
                    $.each(response, function(key, datos) {
                        $('#vehiculoSelect').prepend($('<option />', {
                            text: datos['descripcion'],
                            value: datos['id']
                        }));
                        // $("#vehiculoModalRenta").modal("show")
                    });
                }
            });
        }
        $(".aja").click(function(e) {
            e.preventDefault();
            alert("sdasd");

        });
        let primerSelect = $("#selectTodo").val();
        let segundoSelect = $("#filtrarPorSelect").val();

        if (primerSelect == 1 && segundoSelect == 1) {
            ListarRentas();
        }


        $("#btnFiltrar").click(function(e) {
            let primerSelect = $("#selectTodo").val();
            let segundoSelect = $("#filtrarPorSelect").val();
            let clientesSelect = $("#clienteSelect").val();
            let vehiculoSelect = $("#vehiculoSelect").val();
            // console.log(clientesSelect);
            // console.log(vehiculoSelect);

            // =======================todos registros===================
            if (primerSelect == 1 && segundoSelect == 1) {
                ListarRentas();
                // console.log("Todo y Filtrar categoria");
            } else if (primerSelect == 1 && segundoSelect == 2 && vehiculoSelect != 0) {
                let vehiculoSelect = $("#vehiculoSelect").val();
                // console.log(vehiculoSelect);
                $.ajax({
                    type: "post",
                    url: "Reportes",
                    data: {
                        'tipoReporte': 1,
                        'idvehiculo': vehiculoSelect
                    },
                    success: function(response) {
                        // console.log(response);
                        ListarReportes(response);
                    }
                });
                // console.log("todo, vehiculo, vehiculo " + vehiculoSelect)
            } else if (primerSelect == 1 && segundoSelect == 3 && clientesSelect != 0) {
                let clientesSelect = $("#clienteSelect").val();
                $.ajax({
                    type: "post",
                    url: "Reportes",
                    data: {
                        'tipoReporte': 2,
                        'idcliente': clientesSelect
                    },
                    success: function(response) {
                        // console.log(response);
                        ListarReportes(response);
                    }
                });
                // console.log("todo, Cliente, Cliente " + clientesSelect)
            } // =======================todos registros end===================
            // =======================registros Abiertos===================
            else if (primerSelect == 2 && segundoSelect == 1) {
                $.ajax({
                    type: "post",
                    url: "Reportes",
                    data: {
                        'tipoReporte': 3,
                        'estado': 0
                    },
                    success: function(response) {
                        // console.log(response);
                        ListarReportes(response);
                    }
                });
                // console.log("Abiertos y Filtrar categoria");
            } else if (primerSelect == 2 && segundoSelect == 2 && vehiculoSelect != 0) {
                let vehiculoSelect = $("#vehiculoSelect").val();
                $.ajax({
                    type: "post",
                    url: "Reportes",
                    data: {
                        'tipoReporte': 4,
                        'estado': 0,
                        'idvehiculo': vehiculoSelect
                    },
                    success: function(response) {
                        // console.log(response);
                        ListarReportes(response);
                    }
                });
                // console.log("Abiertos, vehiculo, vehiculo " + vehiculoSelect)
            } else if (primerSelect == 2 && segundoSelect == 3 && clientesSelect != 0) {
                let clientesSelect = $("#clienteSelect").val();
                $.ajax({
                    type: "post",
                    url: "Reportes",
                    data: {
                        'tipoReporte': 5,
                        'estado': 0,
                        'idcliente': clientesSelect
                    },
                    success: function(response) {
                        // console.log(response);
                        ListarReportes(response);
                    }
                });
                // console.log("Abiertos, Cliente, Cliente " + clientesSelect)
            } // =======================registros Abiertos end===================
            // =======================registros Cerrados===================
            else if (primerSelect == 3 && segundoSelect == 1) {
                $.ajax({
                    type: "post",
                    url: "Reportes",
                    data: {
                        'tipoReporte': 6,
                        'estado': 1
                    },
                    success: function(response) {
                        // console.log(response);
                        ListarReportes(response);
                    }
                });
                // console.log("Cerrados y Filtrar categoria");
            } else if (primerSelect == 3 && segundoSelect == 2 && vehiculoSelect != 0) {
                let vehiculoSelect = $("#vehiculoSelect").val();
                $.ajax({
                    type: "post",
                    url: "Reportes",
                    data: {
                        'tipoReporte': 7,
                        'estado': 1,
                        'idvehiculo': vehiculoSelect
                    },
                    success: function(response) {
                        // console.log(response);
                        ListarReportes(response);
                    }
                });
                // console.log("Cerrados, vehiculo, vehiculo " + vehiculoSelect)
            } else if (primerSelect == 3 && segundoSelect == 3 && clientesSelect != 0) {
                let clientesSelect = $("#clienteSelect").val();
                $.ajax({
                    type: "post",
                    url: "Reportes",
                    data: {
                        'tipoReporte': 8,
                        'estado': 1,
                        'idcliente': clientesSelect
                    },
                    success: function(response) {
                        // console.log(response);
                        ListarReportes(response);
                    }
                });
                // console.log("Cerrados, Cliente, Cliente " + clientesSelect)
            } // =======================registros Cerrados end===================





        });
        $("#filtrarPorSelect").change(function(e) {
            let segundoSelect = $("#filtrarPorSelect").val();
            if (segundoSelect == 1) {
                $("#selecVehiculos").hide();
                $("#selecClientes").hide();
            } else if (segundoSelect == 2) {
                $("#selecClientes").hide();
                ListarVehiculo();
                $("#selecVehiculos").show();
            } else if (segundoSelect == 3) {
                ListarClientes();
                $("#selecVehiculos").hide();
                $("#selecClientes").show();
            }
        });
        $(".botonprueba").click(function(e) {
            e.preventDefault();
            alert("asdasd");

        });




    });
</script>