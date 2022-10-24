window.addEventListener("DOMContentLoaded", LoadData());
window.addEventListener("DOMContentLoaded", function(){
    $("#update").css("display", "none");
    $("#update-reset").css("display", "none");
    checkRunner();

    btnFilter = document.getElementById("runnerna");
    btnFilter.addEventListener("keyup", function(){
        $(".card").hide();
        var name = $("#runnerna").val();
        $(".card:contains(" + name + ")").show();
    })
})
var Runners = "";

function LoadData(){
    $.ajax({ // GET Runners
        type: "GET",
        url: "../php/dbconnection.php",
        data: "runners=" + "getRunners", 
        success: function(podaci){
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
/* ---------- RUNNERS TABLE -----------*/
function createTable($data){
    $(".card").remove();
    for(i = 0; i < Runners.length; i++){
        element = $data[i];
        btnMod = "<button class=\"btn-update\" id=\"btnMod-" + element.id + "\" onclick=\"updateRunner(this)\">Ažuriraj</button>"
        $("#back-card").append("<div class=\"card\"><p class=\"short\">" + element.id + 
        "</p><p class=\"long\">" + element.ime_prezime + "</p><p class=\"short\">" + (element.spol == 1 ? "M": "Ž") + 
        "</p><p class=\"long\">" + element.datumrodenja + "</p><p class=\"long\">" + element.klub + "</p>" + 
         btnMod + "</div>");
    }
}

function checkRunner(event){
    btnSubmit = document.getElementById("form-addRunner");
    btnSubmit.addEventListener("submit", function(event){
        event.preventDefault();
        $("#error").html('');
        var exists = 0;
        var name = $("#runnername").val();
        var sex = ($("#runnersex:checked").val() == 1 ? 01 : 00);
        var birthdate = $("#runnerbirthdate").val();
        var klub = $("#runnerklub").val();
        Runners.forEach(element => {
            if(element.ime_prezime == name){
                exists = 1;
            }
        });

        if(exists){
            $("#error").append("Trkač već postoji!");
        }
        else{
            $.ajax({
                type: "GET",
                url: "../php/dbconnection.php",
                data: "id=" + (Runners.length + 1) + "&name=" + name + "&sex=" + sex + "&birthdate=" + birthdate + "&klub=" + klub,
                error: function(){
                    console.log("Doslo je do pogreske u radu s bazom!");
                }
            }).done(function(){
                btnSubmit.reset();
                LoadData();
            })
        }
    });
}

function updateRunner(btn){
    id = btn.id.split("-")[1];
    for(var i = 0; i < Runners.length; i++){
        if(Runners[i].id == id){
            $("#runnerid").val(Runners[i].id);
            $("#runnername").val(Runners[i].ime_prezime);
            $("#runnersex").attr('checked', (Runners[i].spol == 1 ? true : false));
            $("#runnerbirthdate").val(Runners[i].datumrodenja);
            $("#runnerklub").val(Runners[i].klub);
            break;
        }
    }
    $("#update").css("display", "inline-block");
    $("#update-reset").css("display", "inline-block");
    $("#addRunnerBtn").css("display", "none");
    $("#quitBtn").css("display", "none");
}

function quitUpdate(){
    $("#error").html('');
    $("#update").css("display", "none");
    $("#update-reset").css("display", "none");
    $("#addRunnerBtn").css("display", "inline-block");
    $("#quitBtn").css("display", "inline-block");
    forma = document.getElementById("form-addRunner");
    forma.reset();
}

function update(){
    var id = $("#runnerid").val()
    var name = $("#runnername").val();
    var sex = ($("#runnersex:checked").val() == 1 ? 1 : 0);
    var birthdate = $("#runnerbirthdate").val();
    var klub = $("#runnerklub").val();
    $.ajax({
        type: "GET",
        url: "../php/dbconnection.php",
        data: "update=" + "true" + "&id=" + id + "&name=" + name + "&sex=" + sex + "&birthdate=" + birthdate + "&klub=" + klub,
        error: function(){
            console.log("Doslo je do pogreske u radu s bazom!");
        }
    }).done(function(){
        quitUpdate();
        LoadData();
    })
}