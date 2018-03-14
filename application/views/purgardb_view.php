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
                font-size: 18px;
            }

            table {
                border-collapse: collapse;
            }

            td,
            th {
                text-transform: capitalize;
                border: 2px solid black;
                padding: 5px;
            }

            input:focus,select:focus, select option:hover {
                background-color: #f2f29f;
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
        <p><?php 
            if (isset($msg)) {
                echo $msg;
            } ?></p>
        <div class="container">
            <p>Ha entrat a la opció d'eliminar tots els animals que no son a la granja, desde el primer registre que es tingui fins a la data que vulgueu. S'ha de ser molt curós a l'hora d'escollir aquesta opció, ja que per defecte l'aplicacio no esborra del tot els animals morts o portats al escorxador per tenir un registre o per raons estadistiques. Si esborra els animals que ja no estan a la granja ja no els podra recuperar mai mes.</p>
            <form method="post" action="<?php echo base_url('index.php/purgardb') ?>">
                <label for="fData">Desde quin dia vol eliminar els animals que ja no son a la granja?</label>
                <input type="date" name="fData" />
                <br>
                <input type="submit" value="Eliminar registres" />
            </form>
        </div>

    </body>

    </html>
