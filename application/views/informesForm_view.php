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
            
            input[type=submit] {
                background: #00ff09;
                background-image: -webkit-linear-gradient(top, #00ff09, #25421b);
                background-image: -moz-linear-gradient(top, #00ff09, #25421b);
                background-image: -ms-linear-gradient(top, #00ff09, #25421b);
                background-image: -o-linear-gradient(top, #00ff09, #25421b);
                background-image: linear-gradient(to bottom, #00ff09, #25421b);
                -webkit-border-radius: 13;
                -moz-border-radius: 13;
                border-radius: 13px;
                -webkit-box-shadow: 2px 4px 9px #666666;
                -moz-box-shadow: 2px 4px 9px #666666;
                box-shadow: 2px 4px 9px #666666;
                font-family: Arial;
                color: #ffffff;
                font-size: 20px;
                padding: 10px 20px 10px 20px;
                text-decoration: none;
                margin-top: 10px;
            }

            input[type=submit]:hover {
                background: #436310;
                text-decoration: none;
                
            }
        </style>
    </head>

    <body>
        <?php 
    if (isset($msg)) { 
        echo $msg;
    } 
    ?>
        <div class="container">
            <form method="post" action="<?php echo base_url('index.php/informes') ?>">
                <label for="fDataInici">Desde quin dia vol l'informe</label>
                <input type="date" name="fDataInici" id="fDataInici" required/>
                <br>
                <br>
                <input type="submit" value="Generar Informes" />
            </form>
        </div>

    </body>

    </html>
