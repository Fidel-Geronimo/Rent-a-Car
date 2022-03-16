$(document).ready(function () {

    $(document).on('click', '.btnClientSave', function () {


        let nombre = $.trim($(".nombre").val());
        let apellido = $.trim($(".apellido").val());
        let email = $.trim($(".email").val());
        let telefono = $.trim($(".telefono").val());



        if (nombre.length == 0 || apellido.length == 0 || email.length == 0 || telefono.length == 0) {
            let error = "Dejaste Algun Campo Vacio"
            $(".error").text(error);
        } else {
            let data = {
                'nombre': nombre,
                'apellido': apellido,
                'email': email,
                'telefono': telefono
            }
            $.ajax({
                type: "post",
                url: "clientes/nuevo",
                data: data,
                success: function (response) {

                    $('#clientModal').modal('hide');
                    $('#clientModal').find('input').val('');
                    alertify.set('notifier', 'position', 'top-right')
                    alertify.success(response.status);
                }
            });


        }
    });
});