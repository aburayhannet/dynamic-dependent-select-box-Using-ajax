jQuery(document).ready(function($){

    $("#contray").change(function(){
        $.ajax({
            type:'post',
            url: 'getState.php',
            data: {
                countray_name: $("#contray").val(),
            },
            success: function(content){
                document.getElementById("state").innerHTML = content;
            }
        });
    });


    $("#state").change(function(){
        $.ajax({
            type:'post',
            url: 'getCity.php',
            data: {
                state_name: $("#state").val(),
            },
            success: function(content){
                document.getElementById("city").innerHTML = content;
            }
        });
    });


});