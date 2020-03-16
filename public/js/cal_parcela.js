function calcular() {
    var_quant = 0;
    var valor = document.getElementById("valor").value;

    var quantidade = document.getElementById("quantidade").value;

    var valor = parseFloat(valor.replace(/\./gi, '').replace(/,/gi, '.'));
    var var_quant = valor / quantidade;

    document.getElementById("var_qnt").value = var_quant;
}
