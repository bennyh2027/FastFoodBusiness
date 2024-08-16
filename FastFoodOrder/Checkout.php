<?php 
	session_start(); 
	if(!isset($_SESSION['Cart']))
	{
		$_SESSION['Cart'] = array(); 
		$_SESSION['counter']=0;
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title> Checkout Menu </title>
		<style>
			
			body{
				margin: 0;
				padding: 0;
			}

			.navmenu{
				font-family: FreeMono, monospace;
				text-align: center;
				font-size: 35px;
				margin-left: auto;
				font-style: italic;
				background-color: darkslategray;
				height: 12%;
			}

			.navmenu a{
				text-decoration: none !important;
				font-size: clamp(25px, 1.5vw, 50px);
			}	

			#link1{
				background-color: #f4a261;
				color: brown;
				border-radius: 3px;
			}

			#link2{
				background-color: #e76f51;
				color: wheat;
				border-radius: 3px;
			}

			.ordersummary{
				font-family: cursive;
				font-size: 17px;
				text-align: center;
				height: auto; 
				background-color: mistyrose; 
				padding-bottom: 5rem;
			}

			.heading1{
				background-color: khaki; 
				font-size: clamp(35px, 2vw, 70px);
				border: 3px dotted darkseagreen; 
				border-radius: 10px;
				height: auto;
				width: 75%;
				margin-left: auto;
				margin-right: auto; 
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
				margin-bottom: 10px;
				background-color: black;
				border-radius: 20px;
				padding: 10px;
				font-size: 15px;
				border: 3px dashed lightblue; 
			}

			.heading2 {
				background-color: lightpink; 
				width: 30%; 
				height: auto;
				border-radius: 10px; 
				margin-left: auto;
				margin-right: auto;
			}

			.customerinfo{
				font-family: cursive;
				margin-left: auto;
				margin-right: auto;
				font-size: 18px;
				text-align: center;
				padding: 5rem 20px 20px 20px;
				color: black;
				background-color: papayawhip;
				height: 70%;
			}

			#Fname, #Lname, #Address, #Phone{
				width: 40%;
				border-radius: 5px;
				background-color: lightyellow;
				color: black;
				font-size: 18px;
			}


			#Purchase-Clear{
				font-family: DejaVu Sans Mono, monospace;
				border-radius: 5px;
				background-color: blue;
				color: white;
				font-size: 28px;
			}

			@media(min-width: 2000px){
				.heading1{
					max-width: 80rem;
				}

				.heading2{
					font-size: clamp(15px, 1.5vw, 35px);
				}

				#Fname, #Lname, #Address, #Phone{
					max-width: 35rem;
					font-size: clamp(18px, 1vw, 35px);
				}
			}

			@media(min-width: 3000px) {
				.heading2{
					max-width: 40rem;
				}
			}
	
		</style>
	</head>
	<body>
		<div class="navmenu">
			<b>
				<br>
				<a href="HomeIndex.php" id="link1">..HOME..</a>
				&#160; &#160; 
				<a href="Browse.php" id="link2">..BROWSE..</a>
				&#160; &#160; 
			</b>
		</div>	
		<div class="ordersummary">
			<br><br>
			<b><div class="heading1">🛒Cart</div></b>
			<br>
			<div class="card">
				<?php
					$dbhost= "localhost";
					$dbuser="root";
					$dbpass="";
					$db="asensation";
					$port="80";
				
					$conn= new mysqli ($dbhost, $dbuser, $dbpass,$db, $port) or die ("connect failed: %s/n".$conn -> error); 
					
					$Result=""; 
					$_SESSION['totalprice']=0;
					for ($x=0; $x<$_SESSION['counter']; $x++)
					{	
						$_SESSION['Price']=$_SESSION['Cart'][$x]['Price'] * $_SESSION['Cart'][$x]['Quantity']; 
						$totalprice=$_SESSION['Price'];
						$product=$_SESSION['Cart'][$x]['Name']; 
						$price=$_SESSION['Cart'][$x]['Price'];
						$quantity=$_SESSION['Cart'][$x]['Quantity'];
						
						$ordersummary= "<div>
							<b><font size='5'>" . $product . "</b></font>
							<br><br>
							" .$_SESSION['Cart'][$x]['Description'] . "
							<br><br>	
							<font size='4'>Price per Item: $" . $price . ".00 </font>
							<br><br>
							Quantity: ". $quantity . 
							"<br><br>Grouped Price: $" . $totalprice . ".00
						</div>"; 
							
						$_SESSION['totalprice']+=$_SESSION['Cart'][$x]['Price'] * $_SESSION['Cart'][$x]['Quantity'] ;
						
						echo $ordersummary; 
					}
					
						
				?>
			</div>
			<?php
				echo "<br><br><div class='heading2'>Total Price: $" . $_SESSION['totalprice'] . "</div>"; 
				
			?>
			
		</div>

		<div class="customerinfo">
			<form method="POST">
				<b><div class="heading1">Customer Information</div></b>
				<br><br>
				<input type="text" name="fname" id="Fname" placeholder="First Name">
				<br><br>
				<input type="text" name="lname" id="Lname" placeholder="Last Name">
				<br><br>
				<input type="text" name="address" id="Address" placeholder="Address">
				<br><br>
				<input type="number" name="phone" id="Phone" placeholder="Phone Number">
				<br><br>
				<input type="submit" name='Submit1' id="Purchase-Clear" value="Purchase">
				<input type="submit" name='Submit2' id="Purchase-Clear" value="Clear">
			</form>
			<?php
				if (isset($_POST['Submit1']))
				{
					if ($_POST['fname']== "" || $_POST['lname']== "" || $_POST['address']== "" || $_POST['phone']== "")
					{
						echo "<center><br>All fields must contain an input."; 
					}
					
					else 
					{
						$fname=$_POST['fname']; 
						$lname=$_POST['lname']; 
						$address=$_POST['address'];
						$phone=$_POST['phone']; 
						
						$sql= "INSERT INTO orders (FirstName, LastName, Address, PhoneNumber, Product, Price, Quantity, TotalPrice) 
						VALUES ('".$fname ."', '".$lname ."', '".$address ."', '".$phone ."', '".$product."', '".$price ."' , '".$quantity ."', '".$totalprice ."')";
						$Result=$conn->query($sql); 

						if ($Result) //checks if the query made is successful
						{
							echo "<br>Your order has been made, thank you for buying at ASensation Restaurant!";
						}
					}

				}	

				if (isset($_POST['Submit2']))
				{
					unset ($_SESSION['Cart']); 
					$_SESSION['counter'] = 0; 
    					echo "<script>window.location.href = window.location.href;</script>"; // this allows for the window to refresh so the cart is now empty and items aren't there 
    					exit();
				}
			?>
		</div>

	</body>
</html>
