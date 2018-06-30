<?php 

include_once 'knn.php';
		$data= array(
			array(-64,-56,-61,-66,-71,-82,-81),
			array(-64,-56,-61,-66,-71,-82,-81),
			array(-48,-54,-50,-49,-61,-81,-84),
			array(58,-59,-44,-57,-54,-82,-89)
		);

		$result= array(1,2,3,4);

		array_push($data, array(-63,-65,-60,-63,-77,-81,-87));
		array_push($result, 1);
		$knn = new KNN($data,$result);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<table border="1" style="text-align: center">
 		<tr>
 			<?php for ($i=1; $i <=8; $i++) { 
 				if ($i != 8) {
 					echo "<th> SSID ".$i."</th>";
 				}else{
 					echo "<th> Location </th>";
 				}
 				
 			} ?>
 		</tr>
 		
 			<?php for ($i=0; $i <count($data) ; $i++) { 
 				echo "<tr>";
 				for ($j=0; $j <7+1 ; $j++) { 
 					if($j!=7){
 						echo "<td>".$data[$i][$j]."</td>";
 					}else{
 						echo "<td>".$result[$i]."</td>";
 					}
 				}
 				echo "<tr>";
 			} ?>
 	</table>
 </body>
 </html>