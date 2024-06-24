$.validator.addMethod("futureDate", function(value, element) {
    // Obtém a data atual
    var now = new Date();
    // Obtém a data do campo
    var inputDate = new Date(value);
    // Retorna verdadeiro se a data do campo for maior que a data atual
    return this.optional(element) || inputDate > now;
}, "Por favor, insira uma data futura.");

$.validator.addMethod("greaterThanZero", function(value, element) {
    // Remove espaços em branco
    value = value.trim();

    // Verifica se o valor é um número, considerando vírgula e ponto como separador decimal
    var validNumber = /^[0-9]+([.,][0-9]+)?$/.test(value);

    // Converte vírgula para ponto
    var floatValue = parseFloat(value.replace(',', '.'));

    // Retorna verdadeiro se for um número válido e maior que 0
    return this.optional(element) || (validNumber && floatValue > 0);
}, "Por favor, insira um valor maior que 0.");
