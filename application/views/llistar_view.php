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
                padding:5px;
            }
            
            tr.baixa td {
                background-color:#b2b2ad;
            }

        </style>
    </head>

    <body>

        <div class="container">
            <table border="1">
                <tr>
                    <th>Codi Animal</th>
                    <th>Data Naixement</th>
                    <th>Raça</th>
                    <th>Motiu Entrada</th>
                    <th>Data Entrada</th>
                    <th>Document Sanitari</th>
                    <th>Sexe</th>
                    <th>Procedencia</th>
                    <th>Data Baixa</th>
                    <th>Estat</th>
                    <th>Destinacio</th>
                </tr>
                <?php 
                foreach($files as $animal) {
                    if ($animal->estat != "Viu") {
                        
                    echo "<tr class='baixa'>";
                    } else {
                        echo "<tr>";
                    }
                    echo "<td>".$animal->codi."</td>";
                    echo "<td>".date("d-m-Y",strtotime($animal->dataNaixement))."</td>";
                    echo "<td>".$animal->raca."</td>";
                    echo "<td>".$animal->motiuEntrada."</td>";
                    echo "<td>".date("d-m-Y",strtotime($animal->dataEntrada))."</td>";
                    echo "<td>".$animal->documentSanitari."</td>";
                    echo "<td>".$animal->sexe."</td>";
                    echo "<td>".$animal->procedencia."</td>";
                    if ($animal->dataBaixa != "") {
                        echo "<td>".date("d-m-Y",strtotime($animal->dataBaixa))."</td>";
                        
                    } else {
                        echo "<td>".$animal->dataBaixa."</td>";
                    }
                    echo "<td>".$animal->estat."</td>";
                    echo "<td>".$animal->destinacio."</td>";
                }
                echo "</tr>";
            ?>
            </table>
                <p>Total Mascles: <?php echo $mascles[0]->mascles; ?> Total Femelles: <?php echo $femelles[0]->femelles;?> Total: <?php echo ($mascles[0]->mascles + $femelles[0]->femelles); ?></p>
        </div>

    </body>

    </html>
