$(document).ready(function() {
    $('#place').change(function() {
        if ($(this).val().length != 0) {
            $.getJSON("listar", {
                placeId: $(this).val()
            }, function(bairros) {
                if (bairros != null)
                    $("#neighborhood").prop("disabled", false);
                $('#neighborhood').hide();
                popularListaDeCidades(bairros);
            });
        } else
            popularListaDeCidades(null);
    });
});

function popularListaDeCidades(bairros, idPlace) {
    var options = '<option value>selecione um bairro</option>';
    if (bairros != null) {
        $.each(bairros, function(index, bairro) {
            if (idPlace == index)
                options += '<option selected="selected" value="' + index + '">' + bairro + '</option>';
            else
                options += '<option value="' + index + '">' + bairro + '</option>';
        });
    }
    $('#neighborhood').html(options);
    $('#neighborhood').show();
}

