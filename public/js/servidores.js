$('.nueva_data').click(function(){
    window.location.href = window.location.href + '/0';
});

$('tr.data').click(function(){
    window.location.href = window.location.href + '/' + $(this).attr('id');;
});

$('#botonEliminar').click(function(){
    $('#modalCenterTitle').html('Quitar al servidor');
    $('.modal-body').html('Esta a punto de borrar un servidor de la base de datos, ¿Desea continuar?');
    $('#modalCenter').modal('show');

});

$('#accionModal').click(function() {
    window.location.href = window.location.href + '/delete';
});