$(function() {
    const alerts = new Alert();
    alerts.init();

    $('#form-ticket-buyers').validate({
        rules: {
            buyer_id: {
                required: true,
            },
        },
        messages: {
            buyer_id: {
                required: 'Comprador obrigátorio!',
            },
        },
    });
});
