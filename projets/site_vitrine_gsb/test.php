<!DOCTYPE html>
<html>
	
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Page Blanche</title>		
		<link rel="stylesheet" href="test.css">
		<link rel="stylesheet" media="(orientation:portrait)" href="style.css">
		<link rel="stylesheet" media="(orientation:landscape)" href="style.css">
		<link rel="stylesheet" media="screen" href="style.css" type="text/css" />
	</head>
	


<body>

<div id="main">

		<header>

			<div id="container">
   			 	<div id="block" class="block"></div>
    			<div id="text" class="titre"><h1>SITE</h1></div>
  			</div>


<!--
			<div id="bandeau">
				<div >
				<center><h1 class="titre">Site</h1></center>	
				</div>
			</div>
-->
		</header>



		<marquee id="notif">Notifications</marquee>


		<br><br>

<!-----MENU---->
	<nav>
	<ul>
        <li><a class="active" href="./index.html">Acceuil</a></li>
        	<li class="dropdown">
            <a href="#" class="dropbtn">Applications</a>
            	<div class="dropdown-content">
                	<a href="./sms.html">sms</a>
                	<a href="#">Logiciel test</a>
                	<a href="#">Logiciel test</a>
            	</div>
        	</li>
    	</ul>
	</nav>
<!-----FIN DU MENU---->

<!-----ARTICLE---->
	<div id="article">

		<div id="article1">
 			<h3>Article 1</h3>
		</div>

	</div>

	<div id="article">

		<div id="article2">
 			<h3>Article 2</h3>
		</div>

	</div>
<!-----FIN ARTICLE---->

<!-----MENU------>
	<div id="menudroit">

	</div>
<!-----FIN DU MENUt------>




	</div>
<!-----BAS DE PAGE------>
	<div id="footer">

		<div id="version">Verison 1.0</div>
		<div id="date">
			<script>
				today = new Date();
				document.write("<font color=\"black\">Nous sommes le ", today.getDate(),"/",today.getMonth()+1)
				document.write(", Il est ",today.getHours(),"h",today.getMinutes(),"</font>" );
			</script>
		</div>

	</div>
<!-----FIN DE BAS DE PAGE------>
</body>

</html>














