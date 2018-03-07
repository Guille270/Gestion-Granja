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
            <form method="post" action="<?php echo base_url('index.php/informes') ?>">
                <label for="fDataInici">Desde quin dia vol l'informe</label>
                <input type="date" name="fDataInici" id="fDataInici" required/>
                <input type="submit" value="Generar Informes" />
            </form>
        </div>

    </body>

    </html>
