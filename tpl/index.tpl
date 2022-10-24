<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RunnerApp</title>

        <link type="text/css" rel="stylesheet" href="css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="javascript/index.js"></script>
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
                <div class="card-login">
                    <div class="logo"><b>Prijava</b><br>unesite svoje podatke</div>
                    <div class="line"></div>
                    <div class="form">
                        <form id="form-login" action="index.php" method="post">
                            <input id="user" name="user" type="text" placeholder="korisničko ime">
                            <input id="userpass" name="userpass" type="password" placeholder="lozinka">
                        </form>
                        <div id="error" class="error"></div>
                        <input form="form-login" type="submit" value="Prijavi se">
                    </div>
                </div>
            </div>
            <div></div>
        </div>

    </body>
</html>