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