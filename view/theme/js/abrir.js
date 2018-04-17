$(document).ready(function () {
    $('#nav-icon3').click(function () {
        $(this).toggleClass('open');
    });
});


$('.menu-bar').on('click', function () {
    $('.contenido').toggleClass('abrir');
});