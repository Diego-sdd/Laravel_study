// -----------------CPF
function mascaraMutuarioCPF(o, f) {
    v_obj = o
    v_fun = f
    setTimeout('execmascaraCPF()', 1)
}
function execmascaraCPF() {
    v_obj.value = v_fun(v_obj.value)
}
function CPF(v) {

    //Remove tudo o que não é dígito
    v = v.replace(/\D/g, "")
    if (v.length <= 14) { //CPF
        //Coloca um ponto entre o terceiro e o quarto dígitos
        v = v.replace(/(\d{3})(\d)/, "$1.$2")
        //Coloca um ponto entre o terceiro e o quarto dígitos
        //de novo (para o segundo bloco de números)
        v = v.replace(/(\d{3})(\d)/, "$1.$2")
        //Coloca um hífen entre o terceiro e o quarto dígitos
        v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
        return v
    }

}


// -----------------CNPJ
function mascaraMutuario(o, f) {
    v_obj = o
    v_fun = f
    setTimeout('execmascara()', 1)
}
function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}
function Cnpj(v) {

    //Remove tudo o que não é dígito
    v = v.replace(/\D/g, "")

    //Coloca ponto entre o segundo e o terceiro dígitos
    v = v.replace(/^(\d{2})(\d)/, "$1.$2")

    //Coloca ponto entre o quinto e o sexto dígitos
    v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")

    //Coloca uma barra entre o oitavo e o nono dígitos
    v = v.replace(/\.(\d{3})(\d)/, ".$1/$2")

    //Coloca um hífen depois do bloco de quatro dígitos
    v = v.replace(/(\d{4})(\d)/, "$1-$2")

    return v
}








// ------------------------------ Telefone

function mascaraTelefone(o, f) {
    v_obj = o
    v_fun = f
    setTimeout('execmascaraTel()', 1)
}
function execmascaraTel() {
    v_obj.value = v_fun(v_obj.value)
}
function Telefone(tel) {
    //Remove tudo o que não é dígito
    tel = tel.replace(/\D/g, "")
    tel = tel.replace(/^(\d{2})(\d)/g, "($1) $2");
    tel = tel.replace(/(\d)(\d{4})$/, "$1-$2");
    return tel
}



// ------------------------------ Celular

function mascaraCelular(o, f) {
    v_obj = o
    v_fun = f
    setTimeout('execmascaraCel()', 1)
}
function execmascaraCel() {
    v_obj.value = v_fun(v_obj.value)
}
function Celular(Cel) {
    //Remove tudo o que não é dígito
    Cel = Cel.replace(/\D/g, "")
    Cel = Cel.replace(/^(\d{2})(\d)/g, "($1) $2");
    Cel = Cel.replace(/(\d)(\d{4})$/, "$1-$2");
    return Cel
}