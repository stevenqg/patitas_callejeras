$(document).ready(function() {
var iCnt = 0;
 
// Crear un elemento div añadiendo estilos CSS
var container = $(document.createElement('div'));
 
$('#btAdd').click(function() {
if (iCnt <= 19) {
 
iCnt = iCnt + 1;
 
// Añadir caja de texto.
$(container).append('<input type=text class="form-control" id=tb' + iCnt + ' ' +
'placeholder="Colaborador ' + iCnt + '" />');
 
 
$('#main').after(container);
}
else { //se establece un limite para añadir elementos, 20 es el limite
 
$(container).append('<label>Limite Alcanzado</label>');
$('#btAdd').attr('class', 'bt-disable');
$('#btAdd').attr('disabled', 'disabled');
 
}
});
 
$('#btRemove').click(function() { // Elimina un elemento por click
if (iCnt != 0) { $('#tb' + iCnt).remove(); iCnt = iCnt - 1; }
 
if (iCnt == 0) { $(container).empty();
 
$(container).remove();
$('#btSubmit').remove();
$('#btAdd').removeAttr('disabled');
$('#btAdd').attr('class', 'bt')
 
}
});
 
$('#btRemoveAll').click(function() { // Elimina todos los elementos del contenedor
 
$(container).empty();
$(container).remove();
$('#btSubmit').remove(); iCnt = 0;
$('#btAdd').removeAttr('disabled');

 
});
});
 
