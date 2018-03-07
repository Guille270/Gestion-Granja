<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Inici</title>
        <style>
            .dadesAnimal,
            .dadesAdministratives {
                border: 1px solid black;
                padding: 5px;
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
            <form method="post" action="<?php echo base_url('index.php/donarAltaAnimal') ?>">
                <div class="dadesAnimal">
                    <label for="fCodiAnimal">Codi Animal: </label>
                    <input type="text" id="fCodiAnimal" name="fCodiAnimal" />
                    <br>
                    <br>
                    <label for="fDataNaixement">Data Naixement Animal: </label>
                    <input type="date" id="fDataNaixement" name="fDataNaixement" />
                    <br>
                    <br>
                    <label for="fSexe">Sexe: </label>
                    <select id="fSexe" name="fSexe">
                  <option value="M">M</option>
                  <option value="F">F</option>
                </select>
                    <br>
                    <br>
                    <label for="fRaca">Raça: </label>
                    <input type="text" id="fRaca" name="fRaca" />
                    <br>
                    <br>
                    <label for="fDocumentSanitari">Document Sanitari Animal: </label>
                    <input type="text" id="fDocumentSanitari" name="fDocumentSanitari" />
                    <br>
                    <br>
                    <label for="fProcedencia">Procedencia: </label>
                    <input type="text" id="fProcedencia" name="fProcedencia" />
                </div>
                <br>
                <br>
                <div class="dadesAdministratives">
                    <label for="fDataEntrada">Data Entrada Animal: </label>
                    <input type="date" id="fDataEntrada" name="fDataEntrada" />
                    <br>
                    <br>
                    <label for="fMotiuEntrada">Motiu de la Entrada: </label>
                    <select id="fMotiuEntrada" name="fMotiuEntrada">
                  <option value="Compra">Compra</option>
                  <option value="Naixement">Naixement</option>
                </select>

                </div>



                <input type="submit" value="Registrar Animal" />
            </form>
        </div>

    </body>

    </html>
