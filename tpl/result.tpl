<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RunnerApp</title>

        <link type="text/css" rel="stylesheet" href="../css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../javascript/result.js"></script>
    </head>

    <body>
        
        <div class="main-grid">
            <div>
                <div class="background-menu">
                    <div class="logo"><b>RunnerApp</b><br>obrada rezultata</div>
                    <div class="line"></div>
                    {$menu}
                </div>
            </div>
            <div>
                <div id="add-card" class="background-card">
                    <div class="form">
                        <form id="form-result">
                            <input id="number" type="text" placeholder="Startni broj" required>
                            <input id="time" type="text" placeholder="Vrijeme" required>
                        </form>
                        <select name="race" id="race">
                            <option value="1">11. Cross utrka Bedenec 2022.</option>
                            <option value="2">1. Vatrogasna utrka Bedenec 2022.</option>
                            <option value="3">Utrka građana - 6km</option>
                        </select>
                    </div>
                    <div id="error" class="error"></div>
                    <input style="margin-left: 20px;" id="addResult" type="submit" class="btn-add" form="form-result" value="Upiši rezultat">
                    <input id="quitBtn" type="reset" class="btn-quit" form="form-result" value="Odustani">
                </div>
            </div>
            <div></div>
        </div>

    </body>
</html>