<?php

//connection to the database;
$conn=new mysqli('localhost','root','','sms');

//cehck if there is connection error
if($conn->connect_error){
	die("<strong>ERROR</strong>");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sales System</title>
	<script type="text/javascript" src="foodstore.js"></script>    
	<style type="text/css">
		*{
			margin: 0;						/*Removes the default margin of the page to 0*/
			padding: 0;						/*Removes the default padding of the page to 0*/
		}

		body{
			background:white;
			font:14px/20px 'Arial';
			text-align:center;							/*All contents are centered center*/
			color:#333;
		}
		#main-wrapper{
			width:60%;								/*Takes 60% of the screen*/
			margin:10px auto;						/*centers the main section*/
		}
		header{
			width:100%;								/*Takes 100% of section #main-wrapper*/
			padding: 1%;							
			height:86px;
			color:#006000;
			border-bottom:2px solid #007500;
		}
		h1{
			font-size:180%;
			margin-top:30px;
			float:left;
			width:80%;
		}
		#logo{
			background:url(sales.jpg) center;
			background-size: cover;
			background-repeat: no-repeat;
			width:20%;
			height:93px;
			float:left;							/*put the logo on the left side of header*/
		}
		nav{
			width: 15%;
			float: left;						/*put the nav on the left side of #main-wrapper*/
		}
		nav li{
			list-style-type: none;						/*removes bulletin*/
			border-bottom: 1px solid green;
		}
		nav li a{
			font-weight: bold;
			color: green;							/*change the color of links in li*/
			text-decoration: none;					/*removes underline from the links*/
		}
		section{background:#FFF;width:79%;float:right;min-height:300px;height:auto;border-left:1px solid #4CAF50;margin:10px 0;padding:1%;}
		footer{clear:both;background:#4CAF50;color:#FFF;padding:1%;width:100%;}
		table{margin-top:10px;border-collapse:collapse;width:100%;font:14px/20px 'Courier new';}
		th,td{padding:1%;width:15%;border:1px solid #F0FFF0;}
		th{background:#4CAF50;color:#FFF;}
		tr:nth-child(odd){background:#F2F2F2;}
		input[type='submit']{border: 2px solid #4CAF50;width:50px;float:right;margin:1%;padding:1%;background:url(tick.png) no-repeat center/cover;color:#007500;}
	</style>
	<script type="text/javascript" src="javascript.js"></script>>
</head>
<body onload="process()">							<!--Loads the process everytime the page is loaded-->
	<div id="main-wrapper">
		<header>
			<div id="logo"></div>
			<h1>Sales Management System</h1>
		</header>
		<nav>
			<ul>
				<li><a href="?page=sales">Sales</a></li>
				<li><a href="?page=history">History</a></li>
			</ul>
		</nav>
		<section>
			<?php
			if(isset($_GET['page'])){					//listens if variable page is created from the menu bar
				$page=$_GET['page'];					//variable page e.g home,invetory is declared
				$filename=$page.'.php';					//filename e.g home.php, invetory.php is initiliazed
				if(file_exists($filename)){				//checks if the file exists	
					include $filename;					
				}else{
					include 'home.php';
				}
			}else{
				include 'home.php';
			}
			?>
		</section>
		<footer>
			&copy copyright 2016
		</footer>
	</div>
</body>
</html>
