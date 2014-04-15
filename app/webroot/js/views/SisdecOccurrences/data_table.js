//$(document).ready(function() {
$('#dt_official').dataTable({
    "bAutoWidth": false,
    "bProcessing": false,
    "bServerSide": false,
    "iDisplayLength": 5,
    //"sAjaxSource": "<?php echo $this->Html->Url(array('controller' => 'SisdecOccurrences', 'action' => 'teste')); ?>",
    "oLanguage": {
        "sZeroRecords": "-- informe a situação da ocorrência --",
        "sProcessing": "Processando...",
        "sLengthMenu": "_MENU_",
        "sInfo": "Visualizando de _START_ a _END_ de _TOTAL_ registros",
        "oPaginate": {
            "sPrevious": "Anterior",
            "sNext": "Próximo"
        }
    },
    "aLengthMenu": [[5, 10, 15, 20, 50], [5, 10, 15, 20, 50]],
});

$('.dataTables_filter input').addClass("form-control input-sm").attr("placeholder", "Localizar");
$('.dataTables_length select').addClass("m-wrap small");
$('.dataTables_length select').select2();
//});
