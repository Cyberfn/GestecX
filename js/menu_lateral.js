$(document).ready(function () {
    $(".toggle-submenu").click(function () {
        $(this).toggleClass("active");
        $(this).next(".submenu").slideToggle();  // Alterna a visibilidade do submenu
    });

    $(".submenu .list-group-item-action").click(function () {
        $(".submenu .list-group-item-action").removeClass("active");  // Remove a classe 'active' de todos os itens
        $(this).addClass("active");  // Adiciona a classe 'active' no item clicado
    });
});
