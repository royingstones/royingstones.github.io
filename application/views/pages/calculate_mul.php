<center>
	<?php
		echo "<table border=\"1\" style='margin-bottom:300px; border:2px inset; text-align:center;'>";
		for ($r = 1; $r <= $row; $r++)
		{
			echo "<tr >";
			for ($c = 1; $c <= $col; $c++)
				echo "<td style='color: ".((($r-$c)%2)?'white':'black')."; background-color: ".((($r-$c)%2)?'rgba(0,50,40,0.5)':'rgba(242, 231, 152,0.4)')."; border:3px inset gray;'  >" .$c*$r."</td>";
				echo '</tr>'; 
			
		}
		 echo"</table>";
	?>
</center>