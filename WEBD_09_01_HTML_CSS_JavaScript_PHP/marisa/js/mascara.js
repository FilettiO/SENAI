function mascaraData(id){
    let campo = document.getElementById(id);
    //quando preciso chamar outra função com variável de mesmo nome, evita dar erro
    let valor = campo.value.replace(/\D/g, "");  //Remove caracteres não numéricos
    if(valor.length > 8){
        valor = valor.slice(0, 8);  //Limita a até 8 dígitos (numéricos)
    }

    //Aplicando a formatação no padrão dd/mm/yyyy

    if(valor.length >=5){
        //Insere a segunda barra a partir da digitação do 5º dígito
        campo.value = valor.replace(/^(\d{2})(\d{2})(\d{1,4})$/, "$1/$2/$3");
    }else if(valor.length >=3){
        //Insere a primeira barra a partir da digitação do 3º dígito
        campo.value = valor.replace(/^(\d{2})(\d{1,2})$/, "$1/$2");
    }else{
        campo.value = valor
    }
}

function mascaraCpf(id){
    let campo = document.getElementById(id);
    let valor = campo.value.replace(/\D/g, "");  
    if(valor.length > 11){
        valor = valor.slice(0, 11);  
    }
    
    if(valor.length >=10){
        campo.value = valor.replace(/^(\d{3})(\d{3})(\d{3})(\d{1,2})$/, "$1.$2.$3-$4");
    }else if(valor.length >=7){
        campo.value = valor.replace(/^(\d{3})(\d{3})(\d{1,3})$/, "$1.$2.$3");
    }else if(valor.length >=4){
        campo.value = valor.replace(/^(\d{3})(\d{1,3})$/, "$1.$2");
    }else{
        campo.value = valor
    }
}

function mascaraDdd(id){
    let campo = document.getElementById(id);
    let valor = campo.value.replace(/\D/g, "");  
    if(valor.length > 2){
        valor = valor.slice(0, 2);  
    }

    if(valor.length =2){
        campo.value = valor.replace(/^(\d{2})$/, "($1)");
    }else{
        campo.value = valor
    }
}

function mascaraCel(id){
    let campo = document.getElementById(id);
    let valor = campo.value.replace(/\D/g, "");  
    if(valor.length > 9){
        valor = valor.slice(0, 9);  
    }

    if(valor.length >=6){
        campo.value = valor.replace(/^(\d{5})(\d{1,4})$/, "$1-$2")
    }else{
        campo.value = valor
    }
}

function mascaraTel(id){
    let campo = document.getElementById(id);
    let valor = campo.value.replace(/\D/g, "");  
    if(valor.length > 8){
        valor = valor.slice(0, 8);  
    }

    if(valor.length >=5){
        campo.value = valor.replace(/^(\d{4})(\d{1,4})$/, "$1-$2")
    }else{
        campo.value = valor
    }
}

function mascaraCnpj(id){
    let campo = document.getElementById(id);
    let valor = campo.value.replace(/\D/g, "");

    if(valor.length > 14){
        valor = valor.slice(0, 14);
    }

    if(valor.length >=13){
        campo.value = valor.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{1,2})$/, "$1.$2.$3/$4-$5")
    }else if(valor.length >=9){
        campo.value = valor.replace(/^(\d{2})(\d{3})(\d{3})(\d{1,4})$/, "$1.$2.$3/$4")
    }else if(valor.length >=6){
        campo.value = valor.replace(/^(\d{2})(\d{3})(\d{1,3})$/, "$1.$2.$3")
    }else if(valor.length >=3){
        campo.value = valor.replace(/^(\d{2})(\d{1,3})$/, "$1.$2")
    }else{
        campo.value = valor
    }
}