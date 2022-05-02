//desabilitar campos de endereço
function desabilitaEnd() {
    var input = document.querySelector("#cep");
    input.value = '';
    input.disabled = true;
    var input = document.querySelector("#endereco");
    input.value = '';
    input.disabled = true;
    var input = document.querySelector("#estado");
    input.value = '';
    input.disabled = true;
    var input = document.querySelector("#cidade");
    input.value = '';
    input.disabled = true;
    var input = document.querySelector("#complemento");
    input.value = '';
    input.disabled = true;

}
//habilita campos de endereço
function habilitaEnd() {
    var input = document.querySelector("#cep");
    input.disabled = false;
    var input = document.querySelector("#endereco");
    input.disabled = false;
    var input = document.querySelector("#estado");
    input.disabled = false;
    var input = document.querySelector("#cidade");
    input.disabled = false;
    var input = document.querySelector("#complemento");
    input.disabled = false;
}


//FUNCIONALIDADE PARA O CARD DE PESQUISA
function esconderCampos(id_campo1, id_campo2, id_campo3) {
    document.getElementById(id_campo1).style.display = "none";
    document.getElementById(id_campo2).style.display = "none";
    document.getElementById(id_campo3).style.display = "none";
}

function esconderCampo(id_campo1, id_campo2, id_campo3, id_select) {
    x = document.getElementById(id_select).value;
    if (x == 'CPF/CNPJ') {
        document.getElementById(id_campo1).style.display = "block";
        document.getElementById(id_campo2).style.display = "none";
    } else if (x == 0) {
        document.getElementById(id_campo1).style.display = "none";
        document.getElementById(id_campo2).style.display = "none";
    } else if (x == 'Status') {
        document.getElementById(id_campo1).style.display = "none";
        document.getElementById(id_campo2).style.display = "none";
        document.getElementById(id_campo3).style.display = "block";
    } else {
        document.getElementById(id_campo1).style.display = "none";
        document.getElementById(id_campo2).style.display = "block";
    }

}