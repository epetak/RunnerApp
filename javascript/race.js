window.addEventListener("DOMContentLoaded", LoadData());

var Runners = ""; 

function LoadData(){
    $.ajax({ // GET Application on main race
        type: "GET",
        url: "../php/dbconnection.php",
        data: "race=" + "getRunners", 
        success: function(podaci){
            console.log(podaci);
            Runners = podaci;
        },
        error: function(){
            console.log("DB connection error!");
        }
    }).done(function(){
        Runners = JSON.parse(Runners);
        createTable(Runners);
    })
}

function createTable($data){
    $(".card").remove();
    for(i = 0; i < Runners.length; i++){
        element = $data[i];
        $("#back-card").append("<div class=\"card\"><p class=\"short\">"+ (i+1) +".</p><p class=\"short\">" + element.number + 
        "</p><p class=\"long\">" + element.runnername + "</p><p class=\"short\">" + (element.sex == 1 ? "M": "Ž") + 
        "</p><p class=\"long1\">" + element.birthdate + "</p><p class=\"long\">"
         + element.klub + "</p> <p class=\"long1\">" + element.result + "</p></div>");
    }
}