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
            
            .dadesAnimal,
            .dadesAdministratives {
                padding: 25px 5px 10px 5px;
            }

            fieldset legend {
                text-align: center;
                font-weight: bold;
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

        <script>
            function calendariAvui() {
                document.getElementById('fDataEntrada').valueAsDate = new Date();
            }

        </script>
		
		<script>
  			document.addEventListener('keydown', function(event) {
   			 if( event.keyCode == 13 || event.keyCode == 17 || event.keyCode == 74 ) {
      			event.preventDefault();
			 }
  });
</script>
    </head>

    <body onload="calendariAvui()">
        <?php 
    if (isset($msg)) { 
        echo $msg;
    } 
    ?>
        <div class="container">
            <form method="post" action="<?php echo base_url('index.php/donarAltaAnimal') ?>">
                <fieldset class="dadesAnimal">
                    <legend>Dades Animal </legend>
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
                </fieldset>
                <br>
                <br>
                <fieldset class="dadesAdministratives">
                    <legend>Dades Administratives</legend>
                    <label for="fDataEntrada">Data Entrada Animal: </label>
                    <input type="date" id="fDataEntrada" name="fDataEntrada" />
                    <br>
                    <br>
                    <label for="fMotiuEntrada">Motiu de la Entrada: </label>
                    <select id="fMotiuEntrada" name="fMotiuEntrada">
                  <option value="Compra">Compra</option>
                  <option value="Naixement">Naixement</option>
                </select>

                </fieldset>



                <input type="submit" value="Registrar Animal" />
            </form>
        </div>

    </body>

    </html>
