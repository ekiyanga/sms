<table>
	<tr>
		<th>No</th>
		<th>Bidhaa</th>
		<th>Bei</th>
		<th>Idadi</th>
		<th>Jumla(Tshs)</th>
		<th>Tarehe</th>
	</tr>
<?php
	$SQL="SELECT * FROM sales ORDER BY `salesNo` DESC";				//create SQL query to receive data and arrange them in descending order
	if($result=$conn->query($SQL)){									//run the query									
		if($count=$result->num_rows){								//returns the number of rows
			echo $count." Items sold";								//display the number of rows
			$rows=$result->fetch_all(MYSQLI_ASSOC);					//fetch rows
	

			//A loop to receive all the rows and display the on a table	

			foreach ($rows as $row) {
				$salesNo=$row['salesNo'];
				$good=$row['good'];
				$price=$row['price'];
				$totalItems=$row['totalItems'];
				$totalPrice=$row['totalPrice'];
				$date=$row['date']; 
				echo "<tr>";
				echo "<td>$salesNo</td>";
				echo "<td>$good</td>";
				echo "<td>$price</td>";
				echo "<td>$totalItems</td>";
				echo "<td>$totalPrice</td>";
				echo "<td>$date</td>";
				echo "</tr>";
			}
		}
	}
?>
</table>