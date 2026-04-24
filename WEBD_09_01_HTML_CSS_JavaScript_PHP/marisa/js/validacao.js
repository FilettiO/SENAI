function validarData(id){
    let data = document.getElementById(id).value;
    // Verifica o formato dd/mm/yyyy com regex
    const regex = /^(\d{2})\/(\d{2})\/(\d{4})$/;
    const match = data.match(regex);

    if (!match) return false;

    const dia = parseInt(match[1], 10);
    const mes = parseInt(match[2], 10);
    const ano = parseInt(match[3], 10);

    // Verifica se a data existe
    if (mes < 1 || mes > 12) return false;
    if (dia < 1) return false;

    // Dias por mês
    const diasNoMes = [
        31,
        (ano % 4 === 0 && ano % 100 !== 0) || (ano % 400 === 0) ? 29 : 28,
        31, 30, 31, 30,
        31, 31, 30, 31, 30, 31
    ];

    return dia <= diasNoMes[mes - 1];
}

function validarCPF(id){
    let cpf = document.getElementById(id).value;
    const regex = /^\d{3}\.\d{3}\.\d{3}\-\d{2}$/;
    if (!regex.test(cpf)) return false;

    cpf = cpf.replace(/[^\d]/g, '');

    // Verifica se todos os dígitos são iguais (inválido)
    if (/^(\d)\1{10}$/.test(cpf)) return false;

    // Validação do primeiro dígito verificador
    let soma = 0;
    for (let i = 0; i < 9; i++) {
        soma += parseInt(cpf.charAt(i)) * (10 - i);
    }

    let resto = soma % 11;
    let digito1 = resto < 2 ? 0 : 11 - resto;

    if (digito1 !== parseInt(cpf.charAt(9))) return false;

    // Validação do segundo dígito verificador
    soma = 0;
    for (let i = 0; i < 10; i++) {
        soma += parseInt(cpf.charAt(i)) * (11 - i);
    }

    resto = soma % 11;
    let digito2 = resto < 2 ? 0 : 11 - resto;

    if (digito2 !== parseInt(cpf.charAt(10))) return false;

    return true;
}

function validarCNPJ(id) {
    let cnpj = document.getElementById(id).value;
    const regex = /^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/;
    if (!regex.test(cnpj)) return false;

    cnpj = cnpj.replace(/[^\d]/g, '');

    if (/^(\d)\1{13}$/.test(cnpj)) return false;

    // Validação do primeiro dígito verificador
    let tamanho = 12;
    let numeros = cnpj.substring(0, tamanho);
    let soma = 0;
    let pos = tamanho - 7;

    for (let i = 0; i < tamanho; i++) {
        soma += parseInt(numeros.charAt(i)) * pos--;
        if (pos < 2) pos = 9;
    }

    let resto = soma % 11;
    let digito1 = resto < 2 ? 0 : 11 - resto;

    if (digito1 !== parseInt(cnpj.charAt(12))) return false;

    // Validação do segundo dígito verificador
    tamanho = 13;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;

    for (let i = 0; i < tamanho; i++) {
        soma += parseInt(numeros.charAt(i)) * pos--;
        if (pos < 2) pos = 9;
    }

    resto = soma % 11;
    let digito2 = resto < 2 ? 0 : 11 - resto;

    if (digito2 !== parseInt(cnpj.charAt(13))) return false;

    return true;
}