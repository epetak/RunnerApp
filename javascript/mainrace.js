$ npm i xlsx;
window.addEventListener("DOMContentLoaded", LoadData());
window.addEventListener("DOMContentLoaded", function(){
    btnFilter = document.getElementById("filter1");
    btnFilter.addEventListener("change", function(){
        $(".card").remove();
        var q1 = $("#filter1").val();
        $.ajax({ // GET Application on main race
            type: "GET",
            url: "../php/dbconnection.php",
            data: "mainrace=" + "getRunners" + "&q=" + q1, 
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

function LoadData(){
    $.ajax({ // GET Application on main race
        type: "GET",
        url: "../php/dbconnection.php",
        data: "mainrace=" + "getRunners" + "&q=" + 0, 
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
        "</p><p class=\"long1\">" + element.birthdate + "</p><p class=\"long1\">" + element.category + "</p><p class=\"long\">"
         + element.klub + "</p> <p class=\"long1\">" + element.result + "</p></div>");
    }


    let xlsx = require("json-as-xlsx");
    let settings = {
        fileName: "MySpreadsheet", // Name of the resulting spreadsheet
        extraLength: 3, // A bigger number means that columns will be wider
        writeMode: 'writeFile', // The available parameters are 'WriteFile' and 'write'. This setting is optional. Useful in such cases https://docs.sheetjs.com/docs/solutions/output#example-remote-file
        writeOptions: {}, // Style options from https://github.com/SheetJS/sheetjs#writing-options
        RTL: true, // Display the columns from right-to-left (the default value is false)
      }

      xlsx(Runners, settings);

}