<a href="../index.php">Inicio</a> <br> <br>
<a href="convertidordemasas.php">Covertidor de masas</a><br><br>


<?php 

// Obtener los parametros ()
// conocer que operacion se va a realizar
// realizar la operacion (obtener el resultado)
//imprimier en pantalla (cadena pantalla)


// mandamos llamar el documento que hicimos en la otra carpeta de controller
include("Controllers/CalculadoraController.php");

$calculadora=new CalculadoraController();
$calculadora->cachaParametros();
$calculadora->ejecutaOperacion();

?>
<form method="get">
<label>
 <form action="">
 	<label for="">

 		<!--tambien podemos usar esta opcion para imprimir en vez de echo -->
 		<?=$calculadora->pantalla?> = <?=$calculadora->resultado?>

 	</label><br>
 	<input type="number" name="entrada" value="" required>
 	<input type="hidden" name="resultado" value="<?=$calculadora->resultado ?>">
 	<input type="hidden" name="pantalla" value="<?=$calculadora->pantalla ?>">
 	
	 <!--botones de para realizar las operaciones-->
 	<button name="suma">Suma</button>
 	<button name="resta">Resta</button>
 	<button name="multiplicacion">multiplicacion</button>
 	<button name="division">Division</button>
 	<br>
 	
 </form>
 <form action="">
 <!--boton de reset -->
 	<button name="reset">reset</button>
 </form>

 