<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam</title>
    <link rel="stylesheet" href="CSS/layout.css">
    <link rel="stylesheet" href="CSS/steam.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/abe8564c6b.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header (Menu)-->
    <div class="header">
        <nav class="menu">
            <div class="logo"><a href="mainPage.php">GameCC</a></div>
            <div class="games">Games
                <div class="gSubMenu">
                    <li><a href="newGame.php">New Release</a></li>
                    <li><a href="popularGame.php">Popular Games</a></li>
                </div>
            </div>
            <div class="steam"><a href="steam.php">Steam</a></div>
            <div class="playstation"><a href="playStation.php">PlayStation</a></div>
            <div class="epicgames"><a href="epicGames.php">Epic Games</a></div>
            <div class="login">
                <?php
                if (isset($_SESSION['user'])) {
                    echo "<button class='logOutBtn' onclick='logOutConfirm()'><i class='fa-solid fa-arrow-right-from-bracket'></i> ".$_SESSION['user']."</button>";
                } else {
                    echo "<i class='fa-solid fa-arrow-right-to-bracket'></i>Login</div>";
                }
                ?>
            </div>
        </nav>
        <?php
        if (!isset($_SESSION['user'])) {
            ?>
            <!-- Login Drop Down-->
            <div class="lCont">
                <form action="php/login.php" method="POST">
                    <strong>Account:</strong><br>
                    <input type="text" class="acc" name="acc">
                    <strong>Password:</strong>
                    <input type="password" class="pwd" name="pwd">
                    <input type="submit" class="submit" name="submit" value="Log In"><br>
                    <a href="createAccount.html" class="createAcc">Create Account</a>
                </form>
            </div>
            <?php
        }
        ?>

        <!-- Contents -->

        <div class="container">
            <div class="background1">
                <div class="psIntro">
                    <p>Most Popular and Worldwide</p>
                    <p>Game Launcher</p>
                    <P>You can find more than 10,000 games</P>
                </div>
            </div>
            <div class="background2">
                <div class="psIntro2">
                    <button class="steambtn"><a href="https://www.playstation.com/en-ca" target="_bla">Connecting to Steam</a></button>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="footerTile">Game CC</div>
                <div class="pInfo">Holden Chang</div>
                <div class="email">Email: ncsm1752@naver.com</div>
                <div class="insta"><a href="https://www.instagram.com/d.holden.chang/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a></div>
            </div>
        </div>
        <script src="JS/JQuery.js"></script>
        <script src="JS/dropDown.js"></script>
        <script src="JS/background.js"></script>
</body>

</html>