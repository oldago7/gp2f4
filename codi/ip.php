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
			#Obtencio del resultat i mostrant el resultat
			echo "<p>Dirección IP:$operand1/$operand2<p>";
			$sub = new IPv4\SubnetCalculator($_GET["op1"],$_GET["op2"]);
			$network = $sub->getNetworkPortion();
			echo "<p>Red: $network / $operand2<p>";
			$broadcastAddress = $sub->getBroadcastAddress();
			echo "<p>Broadcast: $broadcastAddress <p>";
			$addressableHostRange = $sub->getAddressableHostRange();
			echo "<p>Rang de hosts: $addressableHostRange[0] - $addressableHostRange[1] <p>";
			
						
		?>
		<a href="ip.html">Torna a la pàgina anterior</a>
	</body>
</html>