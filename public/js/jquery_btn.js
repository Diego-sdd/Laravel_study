$(document).ready(function () {
    $("#create_cliente").hide("none");
    $("#proposta").hide("none");
    $("#tabela_proposta").hide("none");

    $("#lista_cliente").click(function (event) {
        $("#create_cliente").hide("none");
        $("#proposta").hide("none");
        $("#tabela_proposta").hide("none");
        $("#tb_cliente").show("show");
    });

    $("#cadastro_cliente").click(function (event) {
        $("#tb_cliente").hide("none");
        $("#proposta").hide("none");
        $("#tabela_proposta").hide("none");
        $("#create_cliente").show("show");
    });

    $("#cadastra_proposta").click(function (event) {
        $("#tb_cliente").hide("none");
        $("#create_cliente").hide("none");
        $("#tabela_proposta").hide("none");
        $("#proposta").show("show");
    });

    $("#select_proposta").click(function (event) {
        $("#tb_cliente").hide("none");
        $("#create_cliente").hide("none");
        $("#proposta").hide("none");
        $("#tabela_proposta").show("show");
    });
});