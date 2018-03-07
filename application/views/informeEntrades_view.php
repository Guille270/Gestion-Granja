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
            
           .titolInforme {
                text-align: center;
                font-family: arial;
                font-size:16px;
            }
            
        </style>
    </head>

    <body>
        <p class="titolInforme">Registre d'incidencies i moviments amb altes i baixes a la mateixa linia. Subexplotacions bovines (vedells)</p>
        <div class="container">
            <h3>Entrades Animals</h3>
            <table border="1">
                <tr>
                    <th>Data Entrada</th>
                    <th>Codi Identificacio</th>
                    <th>Sexe</th>
                    <th>Raça</th>
                    <th>Data Naixement</th>
                    <th>Motiu Entrada</th>
                    <th>Document Sanitari</th>
                    <th>Procedencia</th>


                </tr>
            <?php 
                foreach($entrades as $animal) {
                echo "<tr>";
                    echo "<td>". date("d-m-Y",strtotime($animal->dataEntrada))."</td>";
                    echo "<td>".$animal->codi."</td>";
                    echo "<td>".$animal->sexe."</td>";
                    echo "<td>".$animal->raca."</td>";
                    echo "<td>".date("d-m-Y",strtotime($animal->dataNaixement))."</td>";
                    echo "<td>".$animal->motiuEntrada."</td>";
                    echo "<td>".$animal->documentSanitari."</td>";
                    echo "<td>".$animal->procedencia."</td>";
                }
                echo "</tr>";
            ?>
            </table>
        </div>
<!--
    </body>

    </html>
-->