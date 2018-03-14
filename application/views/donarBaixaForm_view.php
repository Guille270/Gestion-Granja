<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Baixes</title>
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

        <script>
            function mort() {
                var e = document.getElementById("fEstat");
                var value = e.options[e.selectedIndex].value;
                var text = e.options[e.selectedIndex].text;
                if (text == "Mort") {
                    document.getElementById("fDestinacio").value = "GREFACSA";
                }
            }

        </script>
    </head>

    <body>
        <?php 
    if (isset($msg)) { 
        echo $msg;
    } 
    ?>
        <div class="container">
            <form method="post" action="<?php echo base_url('index.php/donarBaixaAnimal') ?>">
                <label for="fCodiAnimal">Codi Animal: </label>
                <input type="text" id="fCodiAnimal" name="fCodiAnimal" />
                <br>
                <br>
                <label for="fDataSortida">Data Baixa: </label>
                <input type="date" id="fDataBaixa" name="fDataBaixa" />
                <br>
                <br>
                <label for="fMotiuSortida">Causa Venda: </label>
                <select id="fEstat" name="fEstat" onblur="mort()">
                  <option value="Escorxador">Escorxador</option>
                  <option value="Mort">Mort</option>
                </select>
                <br>
                <br>
                <label for="fDestinacio">Destinacio: </label>
                <!--- IF JS MORT == GREFAGSA -->
                <input type="text" id="fDestinacio" name="fDestinacio" />
                <br>
                <br>
                <input type="submit" value="Donar de Baixa Animal" />
            </form>
        </div>

    </body>

    </html>
