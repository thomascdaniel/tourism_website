<?php

	include('db.php');
	
	$city_name=$_POST["city_name"];
	
	$r=mysql_Query("select * from add_place where cities='$city_name'");

			echo "<select style='width:180px;height:30px' name='place_name'>
					<option value=''>Select</option>";
				while($row=mysql_fetch_array($r))
				{
					echo "<option value='$row[2]'>$row[2]</option>";
				}
			echo "</select>";
			
	
	?>