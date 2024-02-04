<?php
    session_start();

    $conn = new mysqli("localhost", "root", "", "kawusia");
    

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/starting_panel.css">
    <link rel="stylesheet" href="styles/navbar_panel.css">
    <link rel="stylesheet" href="styles/media_styles/media_navbar.css">
    <link rel="stylesheet" href="styles/content_box.css">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/media_styles/media_menu.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/history.css">
    <link rel="stylesheet" href="styles/reservation.css">
    <link rel="stylesheet" href="styles/contact.css">
    
    <title>Kawomix</title>
</head>

<body>
    <div class="container">

        <div class="title_and_navbar" id="title">

            <div class="title">
                <h1><i><b>Kawomix</b></i></h1>
                <div class="nav_icon ">
                    <div>
                        <span>+</span>
                    </div>
                </div>
            </div>

            <div class="navbar">
                    <div class="menu">
                        Menu
                    </div>
                    <div class="login">
                        Zaloguj się
                    </div>
                    <div class="reservation">
                        Rezerwacja
                    </div>
                    <div class="contact">
                        Kontakt
                    </div>

            </div>

        </div>

        <div class="content_box">

            <div class="center">
                
            </div>

        </div>

        <div class="footer">
            <h2>Stronę wykonał Szymon Barczyk</h2>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="scripts/ajax_scripts.js"></script>
    <script src="scripts/script.js"></script>
    <script src="scripts/menu.js"></script>
    <script src="scripts/login.js"></script>
</body>

</html>