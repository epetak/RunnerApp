<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RunnerApp</title>

        <link type="text/css" rel="stylesheet" href="../css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../javascript/runnerapplication.js"></script>
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
                        <form id="form-application">
                            <input id="number" type="text" placeholder="Startni broj" required>
                            <input id="idrunner" type="hidden">
                            <input id="runner" type="text" placeholder="Ime i prezime trkača" required>
                            <input id="birthdate" type="hidden">
                            <input id="category" type="text" placeholder="Kategorija"><br>
                            <label style="margin-left: 20px;" for="race">Utrka:</label>
                            <select name="race" id="race">
                                <option value="1">11. Cross utrka Bedenec 2022.</option>
                                <option value="2">1. Vatrogasna utrka Bedenec 2022.</option>
                                <option value="3">Utrka građana - 6km</option>
                            </select>
                        </form>
                    </div>
                    <div id="error" class="error"></div>
                    <input id="addApplication" type="submit" class="btn-update2" form="form-application" value="Prijavi">
                    <input id="quitBtn" type="reset" class="btn-quit" form="form-application" value="Odustani">
                </div>
                <div id="back-card" class="background-card">
                    <label style="margin-left: 20px;" for="runnername">Traži trkača:</label>
                    <input id="runnername" type="text" placeholder="Ime i prezime trkača" required>
                    <div class="card-header"><p class="long">Ime i prezime</p><p class="short">Spol</p>
                        <p class="long">Datum rođenja</p><p class="long">Klub</p>
                    </div>
                </div>
            </div>
            <div></div>
        </div>

    </body>
</html>