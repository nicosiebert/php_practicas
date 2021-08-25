$('#btne').click(function(e){
    e.preventDefault();
    var emailg = document.getElementById('emailc').value;
    var passg = document.getElementById('passw').value;

    var parametros = {"emails":emailg, "passs": passg};
    $.ajax({
     data: parametros,
     url:'validacion.php',
     type: 'POST'
    }).done(function(res){
        $('#respuesta').html(res)
    })
});

