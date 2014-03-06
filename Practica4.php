<!DOCTYPE html>
<?php
	$prod1=20;
	$prod2=20;
	$prod3=20;
	$prod4=40;
	$prod5=100;
	$subtotal=0;
	$iva=0;
	$total=0;
?>
<html>
	<title>Practica 4 de Programaci&oacute;n</title>
	<h4><p Align=center>Practica 4</p></h4>
	<body>
		<table border="1";>
			<tr>
				<td>Producto 1</td>
				<td><?php echo $prod1; ?></td>
			</tr>
			<tr>
				<td>Producto 2</td>
				<td><?php echo $prod2; ?></td>
			</tr>
			<tr>
				<td>Producto 3</td>
				<td><?php echo $prod3; ?></td>
			</tr>
			<tr>
				<td>Producto 4</td>
				<td><?php echo $prod4; ?></td>
			</tr>
			<tr>
				<td>Producto 5</td>
				<td><?php echo $prod5; ?></td>
			</tr>
			<tr>
				<td>Sub-total</td>
				<td><?php 
					$subtotal=$prod1 + $prod2 + $prod3 + $prod4 						+ $prod5;
					echo $subtotal;
					?>
				</td>					
			</tr>
			<tr>
				<td>IVA</td>
				<td><?php
					$iva = $subtotal * .16;
					echo $iva;
					?>
				</td>
			</tr>
			<tr>
				<td>Total</td>
				<td><?php
					$total = $iva + $subtotal;
					echo $total;
					?>
				</td>
			</tr>
		</table>
	</body>	
</html>
