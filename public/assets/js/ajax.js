
$(document).ready(function () {
    $('#example').DataTable({
        "ordering": false
    });
    //validacion del forulario de creacio clientes
    jQuery.extend(jQuery.validator.messages, {
        required: "Rellea Este Campo.",
        email: "Introduce Un Email Valido."
    });
    $("#clientForm").validate();


});