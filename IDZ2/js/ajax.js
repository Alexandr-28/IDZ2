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
    
