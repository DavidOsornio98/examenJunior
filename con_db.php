<?php
	extract($_REQUEST, EXTR_PREFIX_ALL|EXTR_REFS, 'recibir');
	$conex = mysqli_connect("localhost", "root", "", "tienda");
?>