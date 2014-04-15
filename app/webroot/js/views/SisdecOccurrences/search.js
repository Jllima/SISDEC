$(document).ready(function() {
    $("#sisdec_situation_id").change(function() {
        //alert("testando")

        $.ajax("resultSearch",
                {
                    type: "GET",
                    data: {id: $(this).val()},
                    //URL: "/estagio/sisdec_occurrences/teste",
                    dataType: 'html',
                    success: function(data) {
                        $('#teste').html(data);
                    }
                });

        /*
         $.getJSON("teste2",
         {
         situationId: $(this).val()  
         },function(data){
         
         });*/
        /*
         $('.dataTables_filter input').addClass("form-control input-sm").attr("placeholder", "Localizar");
	$('.dataTables_length select').addClass("m-wrap small");
	$('.dataTables_length select').select2();*/
       
      
    });
   
   
});





