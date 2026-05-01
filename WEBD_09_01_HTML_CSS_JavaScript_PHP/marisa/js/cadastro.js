function mostraPj(id){
    //$(".form1").fadeOut("slow");
    $(".form1, .termo_cpf").hide();
    $(".form1_1, .termo_cnpj").show();
}

function mostraPf(id){
    $(".form1_1, .termo_cnpj").hide();
    $(".form1, .termo_cpf").show();
}

function showCond(id){
    $(".cadastro_box3_1").show();
}

function hideCond(id){
    $(".cadastro_box3_1").hide();
}

function enviarDadosCpf(){
    if(validarNomePf("nome_id") && validarData("nasc_id") 
        && validarCPF("cpf_id") && validarGenero() 
        && validarDdd1("ddd_cel_id") && validarCel("cel_id") 
        && validarDdd2("ddd_tel_id") && validarTel("tel_id") 
        && validarEmail("email_id") && validarToken("token_id") 
        && validarSenha("senha_id") && validarSenha2("conf_id") 
        && compararSenhas("compararSenhas(id)") && validarTermoPf("chk_id")        
){  var nome = document.getElementById("nome_id").value; 
    var nasc = document.getElementById("nasc_id").value;
    var cpf = document.getElementById("cpf_id").value;
    var masc = document.getElementById("masc_id").value;
    var fem = document.getElementById("fem_id").value;
    var ninf = document.getElementById("ninf_id").value;

        if(document.getElementById("masc_id").checked == true){
            var genero = "Masculino";
        }else if(document.getElementById("fem_id").checked == true){
            var genero = "Feminino";
        }else{
            var genero = "Não Informado";
        }

    var ddd_cel = document.getElementById("ddd_cel_id").value;
    var cel = document.getElementById("cel_id").value;
    var ddd_tel = document.getElementById("ddd_tel_id").value;
    var tel = document.getElementById("tel_id").value;
    var email = document.getElementById("email_id").value;    
    var token = document.getElementById("token_id").value;
    var senha = document.getElementById("senha_id").value;
    var conf = document.getElementById("conf_id").value;
    var chk = document.getElementById("chk_id").value;
    //document - acessa o doc html inteiro; value - vai encontrar o elemento pelo id;

    enviaDadosPf(nome, nasc, cpf, genero, ddd_cel, cel, ddd_tel, tel, email, token, senha);
    }    
}

function enviaDadosPf(nome, nasc, cpf, genero, ddd_cel, cel, ddd_tel, tel, email, token, senha){
    $.ajax({
        url: 'http://localhost/marisa/classes/process_cadastroPf.php',
        type: 'post',
        dataType: 'html',
        data: {nome: nome, nasc:nasc, cpf:cpf, genero:genero, ddd_cel:ddd_cel, cel:cel, ddd_tel:ddd_tel, tel:tel, email:email, token:token, senha:senha},
        beforeSend : function(){
            
        },
        success: function(result){
            $("#retornoCpf").html(result);
        },
        error: function(result){
            $("#retornoCpf").html(result);
        }
    });
}

function enviarDadosCnpj(){
    var razao = document.getElementById("razao_id").value;
    var resp = document.getElementById("resp_id").value;
    var cnpj = document.getElementById("cnpj_id").value;
    var uf = document.getElementById("uf_id").value;
    var icms = document.getElementById("icms_id").value;
    var insc = document.getElementById("insc_id").value;
    var ddd_cel = document.getElementById("ddd_cel_id").value;
    var cel = document.getElementById("cel_id").value;
    var ddd_tel = document.getElementById("ddd_tel_id").value;
    var tel = document.getElementById("tel_id").value;
    var email = document.getElementById("email_id").value;
    var token = document.getElementById("token_id").value;
    var senha = document.getElementById("senha_id").value;
    var conf = document.getElementById("conf_id").value;
}

function mostraSenha1(id){
    $("#" + id).hide();
    $("#hide_pass1").show();
    document.getElementById("senha_id").type = "text";
}

function ocultaSenha1(id){
    $("#" + id).hide();
    $("#show_pass1").show();
    document.getElementById("senha_id").type = "password";
}

function mostraSenha2(id){
    $("#" + id).hide();
    $("#hide_pass2").show();
    document.getElementById("conf_id").type = "text";
}

function ocultaSenha2(id){
    $("#" + id).hide();
    $("#show_pass2").show();
    document.getElementById("conf_id").type = "password";
}



