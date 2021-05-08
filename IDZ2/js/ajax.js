function delete_click(name, nameOrig){
    $(function(){
        $.ajax({
            url:"delete.php",
            method: "POST",
            data : {name: nameOrig},
            success: function(data){
                $("#tbl td:contains('"+name+"')").closest('tr').remove();
                
            }
        });
    });
}

$.get('ajax/test.html', function(data) {
    2
      $('.result').html(data);
    3
      alert('Загрузка завершена.');
    4
    });

    $.post( "ajax/test.html", function( data ) {
        $( ".result" ).html( data );
      });
    