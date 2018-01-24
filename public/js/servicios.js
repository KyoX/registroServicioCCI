$(document).ready(function() {
    if($('#fecha_hora_servicio').length>0){
        jQuery.datetimepicker.setLocale('es');
        $('#fecha_hora_servicio').datetimepicker({
            format:'Y-m-d H:i',
            step:30
        });
    }
});

$('.nueva_data').click(function(){
    window.location.href = window.location.href + '/0';
});

$('tr.data').click(function(){
    window.location.href = window.location.href + '/' + $(this).attr('id');;
});

$('#botonEliminar').click(function(){
    $('#modalCenterTitle').html('Eliminar el servicio');
    $('.modal-body').html('Esta a punto de borrar un servicio, ¿Desea continuar?');
    $('#modalCenter').modal('show');

});

$('#accionModal').click(function() {
    window.location.href = window.location.href + '/delete';
});

