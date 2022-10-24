window.addEventListener("DOMContentLoaded", LoadData());
window.addEventListener("DOMContentLoaded", function(){
    btnSubmit = document.getElementById("form-application");
    btnSubmit.addEventListener("submit", function(event){
        event.preventDefault();
        if(checkApplication()){
            var numb = $("#number").val();
            var idrun = $("#idrunner").val();
            var idrace = $("#race").find(":selected").val();
            var categ = $("#category").val();
            $.ajax({
                type: "GET",
                url: "../php/dbconnection.php",
                data: "number=" + numb + "&idrunner=" + idrun + "&category=" + categ + "&idrace=" + idrace,
                error: function(){
                    console.log("Doslo je do pogreske u radu s bazom!");
                }
            }).done(function(){
                btnSubmit.reset();
                $("#error").html('');
                LoadDataApplications();
            })
        }
    })

    btnFilter = document.getElementById("runnername");
    btnFilter.addEventListener("keyup", function(){
        $(".card").hide();
        var name = $("#runnername").val();
        $(".card:contains(" + name + ")").show();
    })

});

var Runners = "";
var Applications = "";

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
    LoadDataApplications();
}

function createTable($data){
    $(".card").remove();
    for(i = 0; i < Runners.length; i++){
        element = $data[i];
        btnMod = "<button class=\"btn-add2\" id=\"btnMod-" + element.id + "\" onclick=\"selectRunner(this)\">Odaberi</button>"
        $("#back-card").append("<div class=\"card\"><p class=\"long\">" + element.ime_prezime + "</p><p class=\"short\">" + (element.spol == 1 ? "M": "Ž") + 
        "</p><p class=\"long\">" + element.datumrodenja + "</p><p class=\"long\">" + element.klub + "</p>" + 
         btnMod + "</div>");
    }
}

function selectRunner(btn){
    id = btn.id.split("-")[1];
    var name = "";
    var birthdate = "";
    var sex = "";
    for(var i = 0; i < Runners.length; i++){
        if(Runners[i].id == id){
            $("#idrunner").val(Runners[i].id);
            $("#runner").val(Runners[i].ime_prezime);
            sex = Runners[i].spol;
            birthdate = Runners[i].datumrodenja;
            break;
        }
    }
    $("#category").val(category(sex, birthdate));
    $("#runnername").val("");
    $(".card").hide();
    var name = $("#runnername").val();
    $(".card:contains(" + name + ")").show();
}

function category(sex, birthdate){
    var birthdate = new Date(birthdate);
    var month_diff = Date.now() - birthdate.getTime();
    var age_date = new Date(month_diff);
    var year = age_date.getUTCFullYear();
    var age = Math.abs(year-1970);
    var category;
    switch(true){
        case (age < 30):
            category = (sex == 1 ? "MS1" : "ŽS1");
            break;
        case (age > 29 && age < 40):
            category = (sex == 1 ? "MS2" : "ŽS2");
            break;
        case (age > 39 && age < 50):
            category = (sex == 1 ? "MV1" : "ŽV1");
            break;
        case (age > 49 && age < 60):
            category = (sex == 1 ? "MV2" : "ŽV2");
            break;
        case (age > 59):
            category = (sex == 1 ? "MV3" : "ŽV3");
            break;
    }
    return category;
}

function LoadDataApplications(){
    $.ajax({ // GET Applications for race
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
        if(Applications != ""){
            Applications = JSON.parse(Applications);
        }
    })
}

function checkApplication(){
    $("#error").html('');
    var da = true;
    if(Applications != ""){
        for(var i = 0; i < Applications.length; i++){
            if(($("#number").val() == Applications[i].number && $("#race").find(":selected").val() == Applications[i].idrace) || $("#idrunner").val() == Applications[i].idrunner){
                da = false;
                $("#error").append("Prijava nije ispravna!");
            }
        }
    }
    return da;
}