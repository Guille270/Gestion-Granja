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

            td,
            th {
                text-transform: capitalize;
            }

            .titolInforme {
                text-align: center;
                font-family: arial;
                font-size: 16px;
            }

            table {
                border-collapse: collapse;
            }

        </style>
        <style type="text/css" media="print">
            @page {
                size: auto;
                /* auto is the initial value */
                margin: 0;
                /* this affects the margin in the printer settings */
            }

        </style>


        <script>
            function imprimir() {
                document.getElementById("botoImprimir").style.display = 'none';
                window.print();
            }

        </script>
    </head>

    <body>
        <p class="titolInforme">Registre d'incidencies i moviments amb altes i baixes a la mateixa linia. Subexplotacions bovines (vedells)</p>
        <div class="container">
            <table border="1">
                <tr>
                    <th>Data</th>
                    <th>Nº Ident</th>
                    <th>Sexe</th>
                    <th>Raça</th>
                    <th>Data Naixement</th>
                    <th>Incid.</th>
                    <th>Causa</th>
                    <th>Procedencia/Destí</th>
                    <th>Doc. Sanitari</th>
                    <th>Mascles</th>
                    <th>Femelles</th>


                </tr>
                <?php 
                foreach($entrades as $animal) {
                echo "<tr>";
                    echo "<td>". date("d-m-Y",strtotime($animal->dataEntrada))."</td>";
                    echo "<td>".$animal->codi."</td>";
                    echo "<td>".$animal->sexe."</td>";
                    echo "<td>".$animal->raca."</td>";
                    echo "<td>".date("d-m-Y",strtotime($animal->dataNaixement))."</td>";
                    echo "<td>A</td>";
                    echo "<td>".$animal->motiuEntrada."</td>";
                    echo "<td>".$animal->procedencia."</td>";
                    echo "<td>".$animal->documentSanitari."</td>";
                    if ($animal->sexe == 'M') {
                        $mascles++;
                    } else {
                        $femelles++;
                    }
                    echo "<td>".$mascles."</td>";
                    echo "<td>".$femelles."</td>";
                }
                echo "</tr>";
            ?>
        
      
            <?php 
                foreach($sortides as $animal) {
                echo "<tr>";
                    echo "<td>".date("d-m-Y",strtotime($animal->dataBaixa))."</td>";
                    echo "<td>".$animal->codi."</td>";
                    echo "<td>".$animal->sexe."</td>";
                    echo "<td>".$animal->raca."</td>";
                    echo "<td>".date("d-m-Y",strtotime($animal->dataNaixement))."</td>";
                    echo "<td>B</td>";
                    echo "<td>".$animal->estat."</td>";
                    echo "<td>".$animal->destinacio."</td>";
                    echo "<td>".$animal->documentSanitari."</td>";
                    if ($animal->sexe == 'M') {
                        $mascles--;
                    } else {
                        $femelles--;
                    }
                    echo "<td>".$mascles."</td>";
                    echo "<td>".$femelles."</td>";
                }
                echo "</tr>";
            ?>
            </table>
         
            <p>Total Mascles: <?php echo $mascles;?> Total Femelles: <?php echo $femelles;?> <strong>Total: <?php echo ($mascles + $femelles); ?></strong></p>
            <button id="botoImprimir" onclick="imprimir()">Imprimir Informe</button>
            <p style="text-align:right;margin-right:130px;">Signatura del titular:</p>
     

        </div>
        
    </body>

    </html>