<?php 

include_once 'knn.php';
		$data= array(
			array(-64,-56,-61,-66,-71,-82,-81),
			array(-64,-56,-61,-66,-71,-82,-81),
			array(-68,-57,-61,-65,-71,-85,-85),
			array(-63,-60,-60,-67,-76,-85,-84),
			array(-63,-65,-60,-63,-77,-81,-87),
			array(-64,-55,-63,-66,-76,-88,-83),
			array(-65,-61,-65,-67,-69,-87,-84),
			array(-61,-63,-58,-66,-74,-87,-82),
			array(-40,-55,-56,-41,-70,-74,-73),
			array(-38,-55,-53,-37,-72,-71,-73),
			array(-38,-54,-56,-45,-56,-72,-68),
			array(-38,-55,-53,-37,-72,-71,-73),
			array(-17,-63,-60,-14,-72,-72,-77),
			array(-17,-61,-60,-15,-72,-69,-79),
			array(-17,-74,-60,-15,-73,-71,-80),
			array(-16,-59,-60,-35,-69,-81,-78),
			array(-48,-54,-50,-49,-61,-81,-84),
			array(-45,-54,-48,-49,-65,-78,-81),
			array(-45,-53,-55,-49,-63,-78,-81),
			array(-46,-54,-53,-48,-64,-78,-79),
			array(-46,-56,-53,-53,-61,-87,-77),
			array(-52,-56,-58,-48,-59,-87,-92),
			array(-45,-51,-59,-53,-62,-82,-85),
			array(-46,-56,-57,-55,-66,-82,-85),
			array(-58,-59,-44,-57,-54,-82,-89),
			array(-59,-51,-56,-59,-51,-87,-86),
			array(-59,-52,-56,-59,-51,-89,-84),
			array(-58,-51,-56,-59,-54,-87,-87),
			array(-59,-50,-55,-59,-54,-88,-87),
			array(-59,-50,-55,-59,-53,-86,-87),
			array(-59,-50,-59,-59,-55,-85,-87),
			array(-59,-52,-56,-59,-51,-89,-87)


		);

		$result= array(1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,3,3,3,3,3,3,3,3,4,4,4,4,4,4,4,4);

		$new = array(-40,-55,-78,-30,-40,-83,-82);
		print_r(array_keys($new));
		print_r(array_values($new));
		print_r(array_flip($new));

		$k = 4;
		// array_push($data, array(-63,-65,-60,-63,-77,-81,-87));
		// array_push($result, 1);
		$knn = new KNN($k,$data,$result);
		$knn->setNewData($new);
		$knn->euclideanDistance();
		$distance = $knn->getDistance();
		$kDistance = $knn->getSortDistance();
		// echo print_r($distance);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<h4>Data Set :</h4>
 	<table border="1" style="text-align: center">
 		<tr>
 			<?php for ($i=1; $i <=count($data[0])+1; $i++) { 
 				if ($i != count($data[0])+1) {
 					echo "<th> SSID ".$i."</th>";
 				}else{
 					echo "<th> Location </th>";
 				}
 				
 			} ?>
 		</tr>
 		
 			<?php for ($i=0; $i <count($data) ; $i++) { 
 				echo "<tr>";
 				for ($j=0; $j <count($data[0])+1 ; $j++) { 
 					if($j!=count($data[0])){
 						echo "<td>".$data[$i][$j]."</td>";
 					}else{
 						echo "<td>".$result[$i]."</td>";
 					}
 				}
 				echo "<tr>";
 			} ?>
 	</table>

 	<h4>New Data</h4>
 	<table border="1" style="text-align: center">
 		<tr>
 			<?php for ($i=1; $i <=count($data[0])+1; $i++) { 
 				if ($i != count($data[0])+1) {
 					echo "<th> SSID ".$i."</th>";
 				}else{
 					echo "<th> Location </th>";
 				}
 				
 			} ?>
 		</tr>
 			<?php for ($i=0; $i <count($data[0]) ; $i++) { 
 				echo "<td>".$new[$i]."</td>";
 			}?>
 			<td>?</td>
 	</table>

 	<h4>Euclidean Distance : </h4>
 	<table border="1">
 		<tr>
 			<th>Distance</th>
 			<th>Location</th>
 		</tr>
 		<?php for ($i=0; $i <count($distance) ; $i++) { 
 			echo "<tr>";
 			for ($j=0; $j <2 ; $j++) { 
 				echo "<td>".$distance[$i][$j]."</td>";
 			}
 			echo "</tr>";

 		} ?>


 	</table>


 	<h4>Euclidean Distance with K: </h4>
 	<table border="1">
 		<tr>
 			<th>No</th>
 			<th>Distance</th>
 			<th>Location</th>
 		</tr>
 		<?php for ($i=0; $i <count($kDistance) ; $i++) { 
 			echo "<tr>";
 			echo "<td>".($i+1)."</td>";
 			for ($j=0; $j <2 ; $j++) { 
 				echo "<td>".$kDistance[$i][$j]."</td>";
 			}
 			echo "</tr>";

 		} ?>

 		
 	</table>
 </body>
 </html>