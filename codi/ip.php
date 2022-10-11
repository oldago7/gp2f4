<html>
<head>
	<title>CALCULADORA DE SUBXARXES</title>
</head>
	<body>
		<p><u>CALCULADORA DE SUBXARXES</u></p>		
		<?php
			require_once(__DIR__ . '/vendor/autoload.php');

			#Obtenció del primer operand

			if ($_GET["op1"] =="") {
				$operand1 = 0;
				
			}
			else{
				$operand1 = $_GET["op1"];
			}
			#
			#Obtenció del segon operand
			if ($_GET["op2"] =="") {
				$operand2 = 0;
			}
			else{
				$operand2 = $_GET["op2"];
			}
			#
			echo "<p>Dirección IP:<p>";
			#Obtencio del resultat i mostrant el resultat
			$sub = new IPv4\SubnetCalculator([$_GET["op1"],$_GET["op2"]]);
			$network= $sub->getNetworkPortion();
			$broadcastAddress = $sub->getBroadcastAddress();
			$addressableHostRange = $sub->getAddressHostRange();
			
						
		?>
		<a href="ip.html">Torna a la pàgina anterior</a>
	</body>
</html>