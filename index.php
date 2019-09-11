<!--  <?php
 	include 'db.php';
 ?> -->

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Helloworld</title>
 </head>
 <body>
 	<?php
 		
 		
 		function numPattern($n){
 			$num = 1;
 			for($i=0;$i<$n;$i++){
 				for($j=0;$j<=$i;$j++){
 					echo $num." \n";
 				}
 				echo "<br/>";
 				$num = $num+1;
 				
 			}
 		}
 		numPattern(5);
 		echo "<br/></br/>";

 		function testPattern($n){
 			$nums =1;
 			for($i = $n;$i>=1;$i--){
 				for($j =$n;$j>=$nums;$j--){
 					echo $j." ";
 				}
 				$nums++;
 				echo "<br/>";
 			}
 		}
 		testPattern(5);
 	?>
 </body>
 </html>