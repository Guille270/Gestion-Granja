<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Inici</title>
</head>
<body>
<div class="container">
    <ul>
        <li><a href="<?php echo base_url('/index.php/donarAltaAnimal') ?>">1- Entrar Animals Nous</a></li>
        <li><a href="<?php echo base_url('/index.php/donarBaixaAnimal/Escorxador') ?>">2- Enviar Animals al Escorxador (DONAR DE BAIXA)</a></li>
        <li><a href="<?php echo base_url('/index.php/donarBaixaAnimal/Mort') ?>">3- Registrar Animal com a mort</a></li>
        <li><a href="<?php echo base_url('/index.php/llistarTots') ?>">4- Veure dades de tots els animals</a></li>
        <li><a href="<?php echo base_url('/index.php/informes') ?>">5- Generar Informes</a></li>
        <li><a href="<?php echo base_url('/index.php/purgarBD') ?>">6- Esborrar Animals que ja no son a la granja</a></li>
    </ul>
    </div>

</body>
</html>