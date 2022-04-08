
$(document).ready(function () {
    // data table
    $('#example').DataTable({
        "ordering": false,
        stateSave: true,
        language: {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "<<",
                "sLast": ">>",
                "sNext": ">",
                "sPrevious": "<"
            },
            "sProcessing": "Procesando...",
        },
    });

    // =======================================================================================

    // Clientes Start
    //validacion del forulario de creacion clientes
    jQuery.extend(jQuery.validator.messages, {
        required: "Rellea Este Campo.",
        email: "Introduce Un Email Valido."
    });
    $("#clientForm").validate(); //validacion del formulario Cliente
    $("#clientFormEdit").validate(); //validacion del formulario al Editar un Cliente
    $("#empleadoForm").validate(); //validacion del formulario al crear un empleado
    $("#empleadoFormEdit").validate(); //validacion del formulario al Editar un empleado
    $("#vehiculoNuevoForm").validate(); //validacion del formulario al Editar un empleado
    $("#edicionVehiculo").validate(); //validacion del formulario al Editar un empleado


    // Clientes End 



});
