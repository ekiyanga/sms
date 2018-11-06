<?php
if(isset($_POST['salesButton'])) {					//checks if the button has been clicked

	//variable declaration from input box

	$good=$_POST['good'];
	$price=$_POST['price'];
	$totalItems=$_POST['totalItems'];
	$totalPrice=$_POST['totalPrice'];

	//create SQL query to enter data in table sales
	$SQL="INSERT INTO sales VALUES ('','{$good}','{$price}','{$totalItems}','{$totalPrice}',NOW())";
	
	//run the SQL query
	if($result=$conn->query($SQL)){
		echo "\nSucceeded";
	}else{
		echo "Failed";
		}
}

?>
<form action="" method="POST">
	<table>
		<tr>
			<th>Bidhaa</th>
			<th>Bei(Tshs)</th>
			<th>Idadi</th>
			<th>Jumla(Tshs)</th>
		<tr>
			<td><input type="text" id="userInput" name="good" required="required"/>
			</td>
			<td><input type="text" id="price" name="price" required="required"/></td>
			<td><input type="text" id="totalItems" name="totalItems" required="required"/></td>
			<td><input type="text" id="totalPrice" name="totalPrice" required="required"/></td>
		</tr>
	</table>
	<input type="submit" name="salesButton" value="">
	<div id="underInput" />
</form>