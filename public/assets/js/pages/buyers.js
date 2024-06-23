$(function() {
    const alerts = new Alert();
    alerts.init();

    $('#phone').mask('(99) 9 9999-9999');

    $('#form-buyer').validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
            },
            phone: {
                required: true,
            },
        },
        messages: {
            name: {
                required: 'Nome é obrigatório!',
                minlength: 'Nome precisa ter no mínimo 3 caracteres!',
            },
            phone: {
                required: 'Telefone é obrigatório!',
            },
        },
    });
});
