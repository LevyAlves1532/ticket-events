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

## Como rodar?

- 1. Vá até o arquivo `.env` e configure as seguintes variáveis de ambiente
    - `APP_NAME` para configurar o nome do projeto;
    - `APP_LOCALE` para configurar o idioma da aplicação;
    - `DB_CONNECTION` para configurar o tipo de banco de dados, se é mysql, postgressql e etc;
    - `DB_HOST` para configurar o host do banco de dados;
    - `DB_PORT` para configurar a porta do banco de dados;
    - `DB_DATABASE` para configurar o nome do banco de dados
    - `DB_USERNAME` para configurar o nome do usuário do banco de dados
    - `DB_PASSWORD` para configurar a senha do usuário do banco de dados
- 2. Logo após entre na raiz do projeto e rode o comando `php artisan migrate`
- 3. Ao finalizar você pode iniciar o projeto com o comando `php artisan serve`
