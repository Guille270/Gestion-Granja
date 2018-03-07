<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Inici</title>
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
               <!-- <input type="hidden" name="Estat" value="<?php //echo $Estat; ?>"/> -->
                <br>
                <br>
                <label for="fMotiuSortida">Causa Venda: </label>
                <select id="fEstat" name="fEstat">
                  <option value="Escorxador">Escorxador</option>
                  <option value="Mort">Mort</option>
                </select>
                <br>
                <br>
                <label for="fDestinacio">Destinacio: </label>
                <!--- IF JS MORT == GREFAGSA -->
                <input type="text" id="fDestinacio" name="fDestinacio" />
                <input type="submit" value="Donar de Baixa Animal" />
            </form>
        </div>

    </body>

    </html>
