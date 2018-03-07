<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    

        <div class="container">
            <h3>Sortides Animals</h3>
            <table border="1">
                <tr>
                    <th>Data Baixa</th>
                    <th>Codi Identificacio</th>
                    <th>Causa Venda</th>
                    <th>Document Sanitari</th>
                    <th>Destinacio</th>



                </tr>
            <?php 
                foreach($sortides as $animal) {
                echo "<tr>";
                    echo "<td>".date("d-m-Y",strtotime($animal->dataBaixa))."</td>";
                    echo "<td>".$animal->codi."</td>";
                    echo "<td>".$animal->estat."</td>";
                    echo "<td>".$animal->documentSanitari."</td>";
                    echo "<td>".$animal->destinacio."</td>";
                }
                echo "</tr>";
            ?>
            </table>
            <p>Total Vius: <?php echo $total[0]->total; ?></p>
        </div>

    </body>

    </html>
