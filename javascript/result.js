Applications = "";
window.addEventListener("DOMContentLoaded", function(){
    $.ajax({ // GET Application
        type: "GET",
        url: "../php/dbconnection.php",
        data: "applications=" + "getApplic", 
        success: function(podaci){
            Applications = podaci;
        },
        error: function(){
            console.log("DB connection error!");
        }
    }).done(function(){
        Applications = JSON.parse(Applications);
    })
})

window.addEventListener("DOMContentLoaded", function(){
    btnSubmit = document.getElementById("form-result");
    btnSubmit.addEventListener("submit", function(event){
        event.preventDefault();
        $("#error").html('');
        var success = 1;
        var numb = $("#number").val();
        var race = $("#race").find(":selected").val();
        if(Applications != ""){
            for(var i = 0; i < Applications.length; i++){
                if(Applications[i].number == numb && Applications[i].result != null && Applications[i].idrace == race){
                    success = 0;
                    break;
                }
            }
        }
        if(!success){
            $("#error").append("Trkaču je već upisan rezultat!");
        }
        else{
            var time = $("#time").val();
            $.ajax({ // Write result
                type: "GET",
                url: "../php/dbconnection.php",
                data: "writeApplic=" + "write" + "&number=" + numb + "&time=" + time + "&race=" + race, 
                error: function(){
                    console.log("DB connection error!");
                }
            })
            btnSubmit.reset();
            $("#number").trigger("focus");
        }
    })
})