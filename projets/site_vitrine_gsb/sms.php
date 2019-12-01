<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<head>
		<title>Page Blanche</title>		
	</head>
	
	<body>
<!----Associations de la page css----->	
	<link rel="stylesheet" href="style.css">

	<div id="container">
   			 	<div id="block" class="block"></div>
    			<div id="text" class="titre"><h1>Notif SMS</h1></div>
  			</div>


	<marquee id="notif">Notifications</marquee>

	<br><br>


<!----Menu déroulant----->	
	<ul>
        <li><a class="active" href="./index.html">Home</a></li>
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
<!----FIN DU Menu déroulant----->	

<!-----MENU------>
	<div id="menu">
		<div id="titremenu">
			<center><u><h3>MENU</h3></u></center>
		</div>
		<div id="textemenu">	
 			<li>Acceuil</li>
 			<li>Notif SMS</li>
 		</div>
	</div>
<!-----FIN DU MENUt------>


<!----Envoie de message----->
	<div id="sms">
		<script type="text/javascript">

				fonction ajout(){
					var siganture=document.getElementaryById('siganture').value;
					var message=document.getElementaryById('message').value;
					var messagef=signature+" "+message;
					document.forms['form1'].action+=messagef;
				}

		</script>
  		 
		 
		<form name="form1" method="post" action="https://smsapi.free-mobile.fr/sendmsg?user=20537509&pass=Cn2ZKmDLmr8q98&msg=" onsubmit="ajout();">
			
			<br>
			<u><h4>Message:</h4></u> &nbsp; <input type="text" id="message" name="message"><br>		 	
  		 	<u><h4>Signature:</h4></u> <input type="text" id="signature" name="signature">
  		 	<br>
  		 	<br>
  		 	<input type="submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset">
			
		</form>

	</div>

<div id="footer">Verison 1.0</div>
	
</body>
</html>














