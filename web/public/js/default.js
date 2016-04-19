$(document).ready(function() {
    
    $('#jornadacenso').click(function(event) {
        event.preventDefault();
        link('jornadacenso/view', '#capa');
    });

});

$(document).ready(function() {
    
    $('#nuevajornadacenso').click(function(event) {
        event.preventDefault();
        link('jornadacenso/add', '#capa');
    });

});

$(document).ready(function() {
    
    $('#censomas').click(function(event) {
        event.preventDefault();
        link('jornadacenso/mas', '#capa');
    });

});

function link(url, update) {
    $.ajax({
        url: url,

        type: 'POST',
        dataType: 'html',
        success: function(respuesta)
        {
		$(update).html(respuesta);
		}
    });

}