$(function() {
    const alerts = new Alert();
    alerts.init();

    $('#form-event').validate({
        rules: {
            title: {
                required: true,
                minlength: 3,
            },
            due_date: {
                required: true,
                futureDate: true,
            },
            qtd_tickets: {
                required: true,
                number: true,
                greaterThanZero: true,
            },
            price_ticket: {
                required: true,
                greaterThanZero: true,
            },
            description: {
                required: true,
                minlength: 6,
            },
        },
        messages: {
            title: {
                required: 'Título é obrigatório!',
                minlength: 'Título precisa ter no mínimo 3 caracteres!',
            },
            due_date: {
                required: 'Data e Horário é obrigatório!',
                futureDate: 'Data e Horário precisa ser maior que a data atual!',
            },
            qtd_tickets: {
                required: 'Quantidade é obrigatório!',
                number: 'Quantidade tem que ser um número!',
                greaterThanZero: 'Quantidade precisa ser maior que zero!',
            },
            price_ticket: {
                required: 'Preço é obrigatório!',
                number: 'Preço tem que ser um número!',
                greaterThanZero: 'Preço precisa ser maior que zero!',
            },
            description: {
                required: 'Descrição é obrigatório!',
                minlength: 'Descrição precisa ter no mínimo 6 caracteres!',
            },
        },
    });
})
