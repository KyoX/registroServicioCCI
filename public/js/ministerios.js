function getRandomColor(max,min) {
    var red = Math.floor(Math.random()* (max - min) + min);
    var green = Math.floor(Math.random()* (max - min) + min);
    var blue = Math.floor(Math.random()* (max - min) + min);
    return 'rgba('+red+','+green+','+blue+',1)';
}

$(document).ready(function() {
    $('.contenedor_ministerio').each(function(){
        var color = getRandomColor(124,0);
        $(this).css('background-color',color);
        color = getRandomColor(254,200);
        $(this).css('color',color);
    });
});

$('.contenedor_ministerio').click(function(){
    window.location.href = window.location.href + '/' + $(this).attr('id');
});

$('#botonEliminar').click(function(){
    $('#modalCenterTitle').html('Eliminar el ministerio');
    $('.modal-body').html('Esta a punto de borrar un ministerio, ¿Desea continuar?');
    $('#modalCenter').modal('show');

});

$('#accionModal').click(function() {
    window.location.href = window.location.href + '/delete';
});