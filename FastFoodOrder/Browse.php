<?php 
	session_start();
	if(!isset($_SESSION['Cart']))
	{
		$_SESSION['Cart'] = array(); 
		$_SESSION['counter']=0;
	}
	//session_unset();
	//session_destroy();
	
?>
<html>
	<head>
		<title> Products Page</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			
			body{
				margin: 0; 
				padding: 0;
				background-color: oldlace; 
			}

			img{
				height: 45%;
				width: 95%;
				border-radius: 15px;
			}

			.navmenu{
				font-family: FreeMono, monospace;
				text-align: center;
				margin-left: auto;
				font-style: italic;
				background-color: darkslategray;
				height: 12%;
			}

			a{
				text-decoration: none !important;
			}	

			#link1{
				background-color: #f4a261;
				color: brown;
				border-radius: 3px;
				font-size: clamp(25px, 1.5vw, 45px);
			}

			#link2{
				background-color: #e76f51;
				color: wheat;
				border-radius: 3px;
				font-size: clamp(25px, 1.5vw, 45px);
			}
			
			.card{
				display: grid;
				grid-template-columns: 33.3% 33.3% 33.3%;
				margin-left: auto;
				height: auto;
			}

			.card>div{
				font-family: Trebuchet MS, sans-serif;
				margin-left: auto;
				margin-right: auto;
				text-align: center;
				width: 80%;
				color: white;
				margin-top: 10px;
				margin-bottom: 5px;
				background-color: black;
				border-radius: 20px;
				padding: 10px;
				font-size: clamp(15px, 1.5vw, 40px);
			}

			input{
				font-family: Trebuchet MS;
				background-color: lightblue;
				color: black;
				border-radius: 10px;
				font-size: clamp(20px, 1.5vw, 40px);
			} 

			.checked{
				color: orange;
			}

		</style>
	</head>
	<body>
		<div class="navmenu">
			<b>
				<br>
				<a href="HomeIndex.php" id="link1">..HOME..</a>
				&#160; &#160; 
				<a href="Checkout.php" id="link2">..CHECKOUT..</a>
				&#160; &#160; 
			</b>
		</div>	

		<div class="card">
			<?php
				$dbhost= "localhost";
				$dbuser="root";
				$dbpass="";
				$db="asensation";
				$port="80";
			
				$conn= new mysqli ($dbhost, $dbuser, $dbpass,$db, $port) or die ("connect failed: %s/n".$conn -> error);
			
				$result=$conn->query("Select * from product ORDER BY rating DESC;"); 
			
				while($row = mysqli_fetch_array($result))
				{
					$TotalRating = "";
					for($x = 1; $x <= 5; $x++)
					{
						if($x <= $row['Rating'])
						{
							$TotalRating .= '<span class="fa fa-star checked"></span>';
						} 
						else
						{
							$TotalRating .= '<span class="fa fa-star "></span>';
						}
					}

				$product = 
					"<div>
						<br><img src='". $row['Picture'] . "'>
						<br><br>
						<b>" .$row['Name'] . "</b>
						<br><br>
						$TotalRating
						<br><br>
						" .$row['Description'] . "
						<br><br>
						$" .$row['Price'] . ".00
						<br><br>
						
						<form action='' method='POST'>	
							<input type='text' name='ID' value = '". $row['ID'] . "' hidden>
							<input type='number' name='Quantity' placeholder='Quantity' required>
							<br><br>
							<input type='submit' name='Add' value='Add to Cart'>
							<br><br><br><br>
						</form>
					</div>";
						
					echo $product; 
				}
			?>
		</div>
			<?php 
				if(isset($_POST['Add']))
				{
					$result = $conn->query("SELECT * FROM product WHERE ID = " . $_POST['ID']);
					
					while($row = mysqli_fetch_array($result))
					{
						$row['Quantity'] = $_POST['Quantity'];
						array_push($_SESSION['Cart'], $row);
						$_SESSION['counter']++; 
						break; 
					} 
					
					$_SESSION['ID']=$_POST['ID']; 
					 
				}
				
			?>
	</body>
</html>
