
$(document).ready(function () {
    // data table
    // $('#example').DataTable({
    //     "ordering": false
    // });
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


    // Clientes End 



});
