$("#searchData").keydown(function (e) {
    if (e.keyCode == 13) {
        $.ajax({    
            url: "../php/search-method.php",
            type: "post",
            data:{
                'method':'1',
                'x':$("#searchData").val(),
                'y':'n',
                'z':'Loa'
            },  
            dataType: "text",
            success: function(string){
                window.location.href = 'http://localhost/AssWeb/search';
             }
        });
    }
});