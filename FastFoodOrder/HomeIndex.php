<html>
	<head>
		<title> Home Page </title>
		<style>
			body{
				margin: 0; 
				padding: 0; 
			}

			html{
				scroll-behavior: smooth; 
			}

			a{
				text-decoration: none !important;
			}	

			.navmenu{
				font-family: FreeMono, monospace;
				font-size: 25px;
				text-align: center;
				margin-left: auto;
				font-style: italic;
				background-color: darkslategray;
				height: 12%;
			}

			#link1, #link2, #link3, #link4{
				background-color: #2a9d8f;
				color: snow;
				border-radius: 3px;
				font-size: 25px;
			}

			.intro1{
				position: absolute;
				top: 50%;
				left: 50%;
				font-family: Brush Script MT, cursive;
				transform: translate(-50%, -50%);
				font-size: 55px;
				color: white;
				text-align: center;
				border-radius: 15px;
				padding: 15px;
			}

			.grid{
				display: flex;
				width: 100%;
				height: auto;
				filter: brightness(60%);
			}
			
			.burgerPic, .chickenPic, .tacosPic{
				height: 50%; 
				width: 30%;
				flex-grow: 1;
			}

			.descText{
				position: absolute;
				top: 120%;
				left: 5%;
				font-family: cursive; 
				text-align: center;
				color: white;
				font-size: clamp(70px, 6.8vw, 250px);
			}

			#about{
				background-color: #f7ede2;
				color: black;
				font-family: georgia;
				font-size: 15px;
				text-align: center;
				width: 100%; 
				height: auto;
			}

			#about>div{
				margin-left: auto;
				margin-right: auto;
				background-color: #f19c79;
				max-width: 35rem;
				padding: 15px;
				border-radius: 10px;
				font-style: italic;
				box-shadow: 10px 10px 10px 0px navajowhite;
			}

			h3{
				font-family: Trebuchet MS;
				text-align: left;
				margin-left: 35%;
				border: 4px dotted salmon;
				max-width: 20rem;
				padding: 10px;
			
			}

			#contact{
				background-color: slategray;
				font-family: courier;
				text-align: center;
				color: white;
				font-size: 15px;
			}

			#form{
				font-family: verdana;
				font-size: clamp(20px, 1.3vw, 40px);
				margin-top: 10px;
				width: 40%;
				height: 8%;
				border-radius: 10px;
				background-color: black;
				color: white;
			}

			#button{
				font-size: clamp(20px, 1.5vw, 50px);
				color: white;
				background-color: lightsalmon;
				font-family: cursive;
				border-radius: 12px;
				margin-left: auto;
				margin-right: auto;
			}

			@media(min-width: 1601px) {
				#about>div{
					max-width: calc(45rem + 10vw);
					font-size: clamp(20px, 1.5vw, 50px);
				}

				.aboutPic{
					max-width: calc(70rem + 20vw) !important;
				}

				h3{
					font-size: clamp(20px, 1.5vw, 40px);
					max-width: calc(30rem + 10vw);
				}
			}	

			@media(min-width: 1921px) {
				.intro1{
					font-size: clamp(55px, 2.9vw, 75px);
				}

				.navmenu a{
					font-size: clamp(35px, 1.4vw, 80px) !important; 
					gap: calc(1% + 10px);
				}
			}

			@media(min-width: 2240px) {
				.intro1{
					font-size: clamp(80px, 2.9vw, 100px);
				}

				.descText{
					left: calc(5% + 5rem);
				}
			}

			@media(min-width: 2878px) {
				#about>div{
					max-width: calc(45rem + 25vw);
				}

				.aboutPic{
					max-width: calc(70rem + 30vw) !important;
				}

				h3{
					max-width: calc(30rem + 20vw);
				}
			}

		</style>
	</head>
	<body>
		<div class="navmenu">
			<b>
				<br>
				<a href="#about" id="link1" style="background-color: #2a9d8f; color: snow;">..ABOUT..</a>
				&#160; &#160; 
				<a href="#contact" id="link2" style="background-color: #e9c46a; color: black;">..CONTACT..</a>
				&#160; &#160; 
				<a href="Browse.php" id="link3" style="background-color: #f4a261; color: brown;">..BROWSE..</a>
				&#160; &#160; 
				<a href="Checkout.php" id="link4" style="background-color: #e76f51; color: wheat;">..CHECKOUT..</a>
				&#160; &#160; 
			</b>
		</div>
		
		<img src="https://images.squarespace-cdn.com/content/v1/57ad8de5ff7c50d12ce76b68/1557410521467-U93CM432S7SJER8T2GSL/Restaurant+Colour+Scheme+Affects+Restaurant+Ambience" style="filter: brightness(40%); height: 100%; width: 100%;">

		<div class="intro1">
			Welcome To
			<br>
			<font face="cursive"><b>ASensation Restaurant</font>
		</div>

		<div class="grid">
			<img src="https://res.cloudinary.com/hz3gmuqw6/image/upload/c_fill,q_60,w_750/best-nyc-burger-phpm4xlPf" class = "burgerPic">
			<img src="https://storage.googleapis.com/leye_bucket/wp-content/uploads/5c4b6692-chicken_fingers_stripburger_las-vegas.jpg" class = "chickenPic">
			<img src="https://hips.hearstapps.com/hmg-prod/images/gallery-1520956952-chicken-tacos-horizontal-1525445001.jpg" class="tacosPic">
		</div>

		<div class = "descText">
			Our Most Recommended Dishes 
		</div>

		<div id="about">
			<br><br><br><br>
			<font size="7">ABOUT</font>
			<br><br>
			<div>
				ASensation was founded in 2005 in Belize by Mr. Benny He. As the popularity of this restaurant 
				grew, so did the staff. Today, ASensation is well-known in many parts of the world including China, Japan, Canada, 
				Chile, Mexico, Saudi Arabia, Britian, and Switzerland, to name a few. Everyday, there are about 20 positive reviews  
				made from happy customers who come to ASensaton for the tastiest meals they can find. If you've dined here before, you
				know that not only do we bring you the best food there is but we also provide top-notch service. All cost of meals are
				refunded if they do not meet your expectations. Most of the time, though, we do. So bring your family and friends because 
				ASensation is here for you. 
			</div>
			<br><br>
			<img src="https://t3.ftcdn.net/jpg/01/90/80/78/360_F_190807846_5g5QR9v5IVOoZFTalaYwUfg0BCEBwlls.jpg" class = "aboutPic" style="height: 85%; max-width: 60rem; border-radius:10px">
			<br><br>
			<h3>
				<b>OPENING HOURS</b>
				<br><br>
				Monday <br> 9:00 AM - 7:00 PM <br><br>
				Tuesday <br> 9:00 AM - 7:00 PM <br><br>
				Wednesday <br> 9:00 AM - 7:00 PM <br><br>
				Thursday <br> 9:00 AM - 7:00 PM <br><br>
				Friday <br> 10:00 AM - 5:00 PM <br><br>
				Saturday <br> 10:00 AM - 3:00 PM <br><br>
				Sunday <br> Closed 
			</h3>
			<br>
		</div>

		<div id="contact">
			<br><br><br>
			<font size="7">CONTACT</font>
			<br><br>
			<input type="text" id="form" placeholder="Your Name"><br>
			<input type="email" id="form" placeholder="Your Email"><br>
			<input type="number" id="form" placeholder="Your Phone Number"><br>
			<input type="text" id="form" placeholder="Message*"><br>
			<br>
			<input type="button" id="button" value="SEND">
			<br><br>
			<b><font size="5">YOU CAN ALSO FIND US AT 1215 RESDUE STREET OR CALL US AT 223-2158-2214</font></b>
			<br>
		</div>
	</body>
</html>
<script>
	button.onclick=function()
	{
		contact.innerHTML+="<br><br><br><font size='5'>Thank you for your contacting us, we will get back to you as soon as possible!"; 
	}
</script>