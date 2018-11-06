<table>
	<tr>
		<th>No</th>
		<th>Bidhaa</th>
		<th>Zilizonunuliwa</th>
		<th>Baki</th>
	</tr>
<?php
	$SQL="SELECT * FROM `invetory`";
	if($result=$conn->query($SQL)){
		if($count=$result->num_rows){
			echo $count." Items";
			$rows=$result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $row) {
				$id=$row['id'];
				$invetoryName=$row['invetoryName'];
				$Quantity=$row['Quantity'];
				$remainder=$row['Remainder'];
				echo "<tr>";
				echo "<td>$id</td>";
				echo "<td>$invetoryName</td>";
				echo "<td>$Quantity</td>";
				echo "<td>$remainder</td>";
				echo "</tr>";
			}
		}
	}
?>
</table>
