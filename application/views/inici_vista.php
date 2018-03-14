<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Inici</title>
        <style>
            body * {
                font-size: 24px;
            }

            ol li {
                margin-top: 20px;
            }

            li a {
                color: #000000;
                text-decoration: none;
            }

            li a:hover {
                font-size: 26px;
                text-decoration: underline;
            }

            li a:visited {
                color: #000000;
            }

        </style>
    </head>

    <body>
        <div class="container">
            <ol>
                <li><a href="<?php echo base_url('/index.php/donarAltaAnimal') ?>">Entrar Animals Nous</a></li>
                <li><a href="<?php echo base_url('/index.php/donarBaixaAnimal/') ?>">Enviar Animals al Escorxador (DONAR DE BAIXA)</a></li>
                <li><a href="<?php echo base_url('/index.php/llistarTots') ?>">Veure dades de tots els animals</a></li>
                <li><a href="<?php echo base_url('/index.php/informes') ?>">Generar Informes</a></li>
                <li><a href="<?php echo base_url('/index.php/purgardb') ?>">Esborrar Animals que ja no son a la granja</a></li>
            </ol>
        </div>

    </body>

    </html>
