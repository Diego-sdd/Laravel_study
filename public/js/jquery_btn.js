$(document).ready(function () {
    $("#tb_cliente").hide("none");
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

var todasTabs = document.getElementsByClassName('nav-item');


function onTabClick() {
    var tab = this;
    var tabs = tab.parentNode.getElementsByClassName('nav-item');
    var contents = tab.parentNode.getElementsByClassName('content');

    for (var i = 0; i < tabs.length; i++) {
        if (tab.dataset.tab == tabs[i].dataset.tab) {
            tabs[i].classList.add('focus');
        } else {
            tabs[i].classList.remove('focus');
        }
    }

    for (var i = 0; i < contents.length; i++) {
        if (tab.dataset.tab == contents[i].dataset.tab) {
            contents[i].classList.remove('hide');
        } else {
            contents[i].classList.add('hide');
        }
    }
};

for (var i = 0; i < todasTabs.length; i++) {
    todasTabs[i].onclick = onTabClick;
}