# Planejamento

## Entidades e Relacionamentos

### Eventos:

*Eventos X Ingressos do Comprador*
- Um evento pode ter vários ingressos dos compradores - hasMany

### Compradores:

*Compradores X Ingressos do Comprador*
- Um comprador pode ter vários ingressos - hasMany

### Ingressos do Comprador

*Ingressos do Comprador X Eventos*
- Um ingresso do comprador SEMPRE vai pertencer a um evento - belongsTo

*Ingressos do Comprador X Compradores*
- Um ingresso do comprador SEMPRE vai pertencer a um comprador - belongsTo

## Detalhamento das Migrations

*Eventos (events):*
- id
- titulo
- descricao
- data
- Quantidade de Ingressos
- Valor do Ingresso

*Compradores (buyers):*
- id
- nome
- telefone

*Ingressos do Comprador (ticket_buyers):*
- id
- Número do Ticket
- Comprador
- Evento
