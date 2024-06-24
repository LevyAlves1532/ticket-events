$(function() {
    const alerts = new Alert();
    alerts.init();

    $('#form-ticket-buyers').validate({
        rules: {
            buyer: {
                required: true,
            },
        },
        messages: {
            buyer: {
                required: 'Comprador obrigátorio!',
            },
        },
    });
});
