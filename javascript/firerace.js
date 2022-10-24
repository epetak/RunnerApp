window.addEventListener("DOMContentLoaded", LoadData());
window.addEventListener("DOMContentLoaded", function(){
    btnFilter = document.getElementById("filter1");
    btnFilter.addEventListener("change", function(){
        $(".card").remove();
        var q1 = $("#filter1").val();
        $.ajax({ // GET Application on main race
            type: "GET",
            url: "../php/dbconnection.php",
            data: "firerace=" + "getRunners" + "&q=" + q1, 
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
    })
});

var Runners = ""; 
var list = [];

function LoadData(){
    $.ajax({ // GET Application on fire race
        type: "GET",
        url: "../php/dbconnection.php",
        data: "firerace=" + "getRunners" + "&q=" + 0, 
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
        teamWork();
    })
}

function createTable($data){
    $(".card").remove();
    for(i = 0; i < Runners.length; i++){
        element = $data[i];
        $("#back-card").append("<div class=\"card\"><p class=\"short\">"+ (i+1) +".</p><p class=\"short\">" + element.number + 
        "</p><p class=\"long\">" + element.runnername + "</p><p class=\"short\">" + (element.sex == 1 ? "M": "Ž") + 
        "</p><p class=\"long1\">" + element.birthdate + "</p><p class=\"long1\">" + element.category + "</p><p class=\"long\">"
         + element.klub + "</p> <p class=\"long1\">" + element.result + "</p></div>");
    }
}

function teamWork(){
    for(i = 0; i < Runners.length; i++){
        var k = 0;
        var time = "00:00:00";
        for(j = 0; j < Runners.length; j++){
            if(Runners[i].klub == Runners[j].klub && k < 3 && undefined == (list.find(list => list.team == Runners[i].klub))){
                time = mesureTime(time, Runners[j].result);
                k++;
            }
        }
        if(k == 3 && undefined == (list.find(list => list.team == Runners[i].klub))){
            let team = { "team" : Runners[i].klub, "time" : time};
            list.push(team);
        }
    }
    console.log(list);

    for(i = 0; i < list.length; i++){
        $("#back2-card").append("<div class=\"card\"><p class=\"long\">" + list[i].team + "</p><p class=\"long\">" + list[i].time + "</p></div>");
    }
}

function mesureTime(time1, time2){
    time1 = time1.split(":");
    time2 = time2.split(":");

    sec = parseInt(time1[2]) + parseInt(time2[2]);
    sec1 = sec;
    sec = sec%60;

    min = parseInt(time1[1]) + parseInt(time2[1]);
    min1 = min + Math.trunc(sec1/60);
    min = (min + Math.trunc(sec1/60))%60

    h = parseInt(time1[0]) + parseInt(time2[0]);
    h = h + Math.trunc(min1/60);

    return (h + ":" + min + ":" + sec); 
}