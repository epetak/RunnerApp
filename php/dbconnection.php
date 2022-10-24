<?php

    include "db.php";

    if(isset($_GET["runners"]) && $_GET["runners"] == "getRunners"){
        $query = "SELECT * FROM runner ORDER BY namesurname ASC";
        $result = DBFunctions($query);

        if($result->num_rows > 0){
            $array = Array();
            while($row = mysqli_fetch_assoc($result)){
                $a = Array(
                    "id" => $row["idrunner"],
                    "ime_prezime" => $row["namesurname"],
                    "spol" => $row["sex"],
                    "datumrodenja" => $row["birthdate"],
                    "klub" => $row["klub"]
                );
                array_push($array, $a);
            }
        }
        $json = json_encode($array);
        echo $json;
    }

    if(!isset($_GET["update"]) && $_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"]) && isset($_GET["sex"]) && isset($_GET["birthdate"])){
        $id = $_GET["id"];
        $name = $_GET["name"];
        $sex = $_GET["sex"];
        $birthdate = $_GET["birthdate"];
        $klub = $_GET["klub"];
        $query = "INSERT INTO runner (idrunner, namesurname, sex, birthdate, klub) VALUES ('$id', '$name', '$sex', '$birthdate', '$klub')";

        $result = DBFunctions($query);
    }

    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["update"]) && $_GET["update"] == "true"){
        $id = $_GET["id"];
        $name = $_GET["name"];
        $sex = $_GET["sex"];
        $birthdate = $_GET["birthdate"];
        $klub = $_GET["klub"];
        $query = "UPDATE runner SET namesurname='$name', sex='$sex', birthdate='$birthdate', klub='$klub' WHERE idrunner=$id";

        $result = DBFunctions($query);
    }


    if(isset($_GET["applications"]) && $_GET["applications"] == "getApplic"){
        $query = "SELECT * FROM results";
        $result = DBFunctions($query);

        if($result->num_rows > 0){
            $array = Array();
            while($row = mysqli_fetch_assoc($result)){
                $a = Array(
                    "number" => $row["number"],
                    "idrunner" => $row["runner_idrunner"],
                    "result" => $row["result"],
                    "idrace" => $row["race_idrace"]
                );
                array_push($array, $a);
            }
        }
        $json = json_encode($array);
        echo $json;
    }

    if(isset($_GET["number"]) && isset($_GET["idrunner"]) && isset($_GET["category"]) && isset($_GET["idrace"])){
        $idrunner = $_GET["idrunner"];
        $idrace = $_GET["idrace"];
        $number = $_GET["number"];
        $category = $_GET["category"];
        $query = "INSERT INTO results (number, category, runner_idrunner, race_idrace) VALUES ('$number', '$category', '$idrunner', '$idrace')";

        $result = DBFunctions($query);
    }

    function QueryCategory($value){
        $q2 = "";
        switch($value){
            case 0:
                $q2 = "";
                break;
            case 1:
                $q2 = "AND a.category = 'MS1'";
                break;
            case 2:
                $q2 = "AND a.category = 'ŽS1'";
                break;
            case 3:
                $q2 = "AND a.category = 'MS2'";
                break;
            case 4:
                $q2 = "AND a.category = 'ŽS2'";
                break;
            case 5:
                $q2 = "AND a.category = 'MV1'";
                break;
            case 6:
                $q2 = "AND a.category = 'ŽV1'";
                break;
            case 7:
                $q2 = "AND a.category = 'MV2'";
                break;
            case 8:
                $q2 = "AND a.category = 'ŽV2'";
                break;
            case 9:
                $q2 = "AND a.category = 'MV3'";
                break;        
            case 10:
                $q2 = "AND a.category = 'ŽV3'";
                break;
        }
        return $q2;
    }

    if(isset($_GET["mainrace"]) && $_GET["mainrace"] == "getRunners"){
        $value = $_GET["q"];
        $q1 = QueryCategory($value);
        $query = "SELECT a.number, r.namesurname, r.klub ,r.sex, r.birthdate, a.category, a.result FROM results a, runner r WHERE a.runner_idrunner = r.idrunner " .$q1 ." AND a.race_idrace = 1 ORDER BY result";
        $result = DBFunctions($query);

        if($result->num_rows > 0){
            $array = Array();
            while($row = mysqli_fetch_assoc($result)){
                $a = Array(
                    "number" => $row["number"],
                    "runnername" => $row["namesurname"],
                    "sex" => $row["sex"],
                    "birthdate" => $row["birthdate"],
                    "category" => $row["category"],
                    "klub" => $row["klub"],
                    "result" => $row["result"]
                );
                array_push($array, $a);
            }
        }
        $json = json_encode($array);
        echo $json;
    }

    if(isset($_GET["firerace"]) && $_GET["firerace"] == "getRunners"){
        $value = $_GET["q"];
        $q1 = QueryCategory($value);
        $query = "SELECT a.number, r.namesurname, r.klub ,r.sex, r.birthdate, a.category, a.result FROM results a, runner r WHERE a.runner_idrunner = r.idrunner " .$q1 ." AND a.race_idrace = 2 ORDER BY result";
        $result = DBFunctions($query);

        if($result->num_rows > 0){
            $array = Array();
            while($row = mysqli_fetch_assoc($result)){
                $a = Array(
                    "number" => $row["number"],
                    "runnername" => $row["namesurname"],
                    "sex" => $row["sex"],
                    "birthdate" => $row["birthdate"],
                    "category" => $row["category"],
                    "klub" => $row["klub"],
                    "result" => $row["result"]
                );
                array_push($array, $a);
            }
        }
        $json = json_encode($array);
        echo $json;
    }

    if(isset($_GET["race"]) && $_GET["race"] == "getRunners"){
        $query = "SELECT a.number, r.namesurname, r.klub ,r.sex, r.birthdate, a.category, a.result FROM results a, runner r WHERE a.runner_idrunner = r.idrunner AND a.race_idrace = 3 ORDER BY result";
        $result = DBFunctions($query);

        if($result->num_rows > 0){
            $array = Array();
            while($row = mysqli_fetch_assoc($result)){
                $a = Array(
                    "number" => $row["number"],
                    "runnername" => $row["namesurname"],
                    "sex" => $row["sex"],
                    "birthdate" => $row["birthdate"],
                    "category" => $row["category"],
                    "klub" => $row["klub"],
                    "result" => $row["result"]
                );
                array_push($array, $a);
            }
        }
        $json = json_encode($array);
        echo $json;
    }

    if(isset($_GET["number"]) && isset($_GET["time"]) && isset($_GET["race"])){
        $time = $_GET["time"];
        $number = $_GET["number"];
        $race = $_GET["race"];
        $query = "UPDATE results SET result = '$time' WHERE number = '$number' AND race_idrace = '$race'";
        $result = DBFunctions($query);
    }

    function DBFunctions($query){
        $connection = new Baza();
        $connection->spojiDB(); /* connect to DB */
        $result = $connection->upitDB($query); /* execute query */
        $connection->zatvoriDB();   /* close connection */

        return $result;
    }

?>