$(document).ready(function () {
    $(".money").inputmask('decimal', {
        'alias': 'numeric',
        'groupSeparator': '.',
        'autoGroup': true,
        'digits': 2,
        'radixPoint': ",",
        'digitsOptional': false,
        'allowMinus': false,
        //'prefix': 'R$ ',
        'placeholder': '',
        'decimal': ",",
        'thousands': ".",
        'rightAlign': false,
        'clearMaskOnLostFocus': true
    });
});


$('.edit').on('click', function () {
    var row = $(this).closest('tr');
    var descricao = row.find("td:nth-child(1)").text();
    var valor = row.find("td:nth-child(2)").text();
    var data = row.find("td:nth-child(3)").text();

    $("#descricao").val(descricao);
    $("#valor").val(valor);
    $("#data").val(data);
    $("#id").val($(this).attr('href'));
    mascaras();
    $("#modal-edit").modal('show');
    return false;
});

$('.save').on('click', function () {
    var action = $('#action_index').val();
    $.ajax({
        url: "index.php?action=edit_" + action,
        type: "POST",
        data: $("#edit_registry").serialize(),
        success: function (data) {
            if (data.indexOf("sucesso") != -1) {
                window.location.href = 'index.php?action=' + action;
            }
        }
    });
});

$(".delete").on('click', function () {
    var action = $('#action_index').val();
    var result = confirm("Deseja realmente deletar este registro?");
    if (result) {
        event.preventDefault();
        $.ajax({
            url: "index.php?action=delete_" + action,
            type: "POST",
            data: {id: $(this).attr('href')},
            success: function (data) {
                if (data.indexOf("sucesso") != -1) {
                    window.location.href = 'index.php?action=' + action;
                }
            }
        });

    }
    return false;
});


function mascaras() {
    $(".money").inputmask('decimal', {
        'alias': 'numeric',
        'groupSeparator': '.',
        'autoGroup': true,
        'digits': 2,
        'radixPoint': ",",
        'digitsOptional': false,
        'allowMinus': false,
        //'prefix': 'R$ ',
        'placeholder': '',
        'decimal': ",",
        'thousands': ".",
        'rightAlign': false,
        'clearMaskOnLostFocus': true
    });
}