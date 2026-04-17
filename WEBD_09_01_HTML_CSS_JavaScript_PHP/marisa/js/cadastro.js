function mostraPj(id){
    //$(".form1").fadeOut("slow");
    $(".form1, .termo_cpf").hide();
    $(".form1_1, .termo_cnpj").show();
}

function mostraPf(id){
    $(".form1_1, .termo_cnpj").hide();
    $(" .form1, .termo_cpf").show();
}

function enviarDadosCpf(){
    var nome = document.getElementById("nome_id").value;
    //document - acessa o doc html inteiro; value - vai encontrar o elemento pelo id; 
    var nasc = document.getElementById("nasc_id").value;
    var cpf = document.getElementById("cpf_id").value;
    var masc = document.getElementById("masc_id").value;
    var fem = document.getElementById("fem_id").value;
    var ninf = document.getElementById("ninf_id").value;
    var ddd_cel = document.getElementById("ddd_cel_id").value;
    var cel = document.getElementById("cel_id").value;
    var ddd_tel = document.getElementById("ddd_tel_id").value;
    var tel = document.getElementById("tel_id").value;
    var email = document.getElementById("email_id").value;
    var token = document.getElementById("token_id").value;
    var senha = document.getElementById("senha_id").value;
    var conf = document.getElementById("conf_id").value;
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