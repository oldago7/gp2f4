<html>
<head>
	<title>CALCULADORA DE SUBXARXES</title>
</head>
	<body>
		<p><u>CALCULADORA DE SUBXARXES</u></p>		
		<?php
			require_once(__DIR__ . '/vendor/autoload.php');

			#Obtenció del primer operand
			$sub = new IPv4\SubnetCalculator();

			if ($_GET["op1"] =="") {
				$ipAddress = $sub->getIPAddress();
			}
			else{
				$operand1 = $_GET["op1"];
			}
			#
			#Obtenció del segon operand
			if ($_GET["op2"] =="") {
				$subnetMask = $sub->getSubnetMask();
			}
			else{
				$operand2 = $_GET["op2"];
			}
			#
			#Obtencio del resultat i mostrant el resultat
			$resultat = $operand1 / $operand2;
			echo "<p>El resultat de $operand1 / $operand2 és igual a $resultat</p>";			
		?>
		<a href="ip.html">Torna a la pàgina anterior</a>
	</body>
</html>