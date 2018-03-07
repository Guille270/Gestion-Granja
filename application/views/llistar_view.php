<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Inici</title>
        
        <style>
            td,th {
                text-transform: capitalize;
            }
        </style>
    </head>

    <body>

        <div class="container">
            <table border="1">
                <tr>
                    <th>Codi Animal</th>
                    <th>Motiu Entrada</th>
                    <th>Data Entrada</th>
                    <th>Document Sanitari</th>
                    <th>Procedencia</th>
                    <th>Data Sortida</th>
                    <th>Estat</th>
                    <th>Destinacio</th>
                </tr>
            <?php 
                foreach($files as $animal) {
                echo "<tr>";
                    echo "<td>".$animal->codi."</td>";
                    echo "<td>".$animal->motiuEntrada."</td>";
                    echo "<td>".$animal->dataEntrada."</td>";
                    echo "<td>".$animal->documentSanitari."</td>";
                    echo "<td>".$animal->procedencia."</td>";
                    echo "<td>".$animal->dataSortida."</td>";
                    echo "<td>".$animal->Estat."</td>";
                    echo "<td>".$animal->destinacio."</td>";
                }
                echo "</tr>";
            ?>
            </table>
        </div>

    </body>

    </html>
