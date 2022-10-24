<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RunnerApp</title>

        <link type="text/css" rel="stylesheet" href="../css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../javascript/runners.js"></script>
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
                        <form id="form-addRunner" method="get">
                            <input id="runnerid" type="hidden">
                            <input id="runnername" type="text" placeholder="Ime i prezime" required>
                            <label for="runnersex">Spol: </label>
                            <input id="runnersex" type="checkbox" value="1">
                            <input id="runnerbirthdate" type="date" required>
                            <input id="runnerklub" type="text" placeholder="Klub" required>
                        </form>
                    </div>
                    <div id="error" class="error"></div>
                    <div id="buttons">
                        <input id="addRunnerBtn" type="submit" class="btn-add" form="form-addRunner" value="Dodaj">
                        <input id="quitBtn" type="reset" class="btn-quit" form="form-addRunner" value="Odustani">
                        <button id="update" class="btn-update2" onclick="update()">Ažuriraj</button>
                        <button id="update-reset" class="btn-quit" onclick="quitUpdate()">Odustani</button>
                    </div>
                </div>
                <div id="back-card" class="background-card">
                    <label style="margin-left: 20px;" for="runnerna">Traži trkača:</label>
                    <input id="runnerna" type="text" placeholder="Ime i prezime trkača" required>
                    <div class="card-header"><p class="short">ID</p><p class="long">Ime i prezime</p><p class="short">Spol</p>
                        <p class="long">Datum rođenja</p><p class="long">Klub</p>
                    </div>
                </div>
            </div>
            <div></div>
        </div>

    </body>
</html>