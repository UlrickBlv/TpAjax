 /*$("#section1").on("click",
    function(){
        $("#section1").load("import.html");
    });*/
   /* $(function(){ 
   $("select[name ='arrondissements']").on("change",
     function(){
         $("#ecoles").load("import1bis.php", {"arrondissements" : $(this).val() });
     });    
    $.get("ficher.php")*/
 $(function(){ 
     $("select[name='arrondissements']").on("change",
        function(){
     $.get("import1bis.php",{"arrondissements": $(this).val() },
     foncRetour1,"json");
    //function(data){$("#details").html(data)});
     })
     function foncRetour1 (data){
    $("#ecoles").empty();
    $("#detail").empty();
    $("#ecoles").append("<option disabled selected>...</option>");   
    for(var key in data){
        $("#ecoles").append("<option value ="+data[key].code+">"+data[key].nom+"</option>");
    }
}

   $("select[name='ecoles']").on("change",
        function(){
            $.get("import2bis.php",{"code": $(this).val() },
            foncRetour2,"json");
        })
            function foncRetour2 (data){
             $("#detail").empty();   
            for(var key in data){
             $("#detail").append("<tr>"+data[key].nom+"</tr><tr>"+data[key].arrondissement+"</tr><tr>"+data[key].genre+"</tr><tr>"+data[key].adresse+"</tr>");
    }
            }        
         
}); // fin fonction principale //
