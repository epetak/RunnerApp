window.addEventListener("DOMContentLoaded", function(){
    btnSubmit = document.getElementById("form-login");
    btnSubmit.addEventListener("submit", function(event){
        $("#error").html('');
        event.preventDefault();

        var user = $("#user").val();
        var pass = $("#userpass").val();

        if(user == "admin" && pass == "admin"){
            $("#form-login").submit();
        }
        else{
            $("#error").append("Pogrešno uneseni podaci!");
        }
    })
})