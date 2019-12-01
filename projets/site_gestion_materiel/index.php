<!DOCTYPE html>
<?php

error_reporting(0);

require_once 'class.societe.php';
 
    function tri_bulle(&$tableau)
    {
      $taille = count($tableau);
      for($i = 1; $i < $taille; $i++)
      {
        for($j = $taille-1; $j >= $i; $j--)
        {
          if($tableau[$j+1] > $tableau[$j])
          {
          $temp = $tableau[$j+1];
          $tableau[$j+1] = $tableau[$j];
          $tableau[$j] = $temp;
          }
        }
      }
    } 


$societe = new Societe;
$societe->setSociete($SiteAurillac);



function VerifDate($date) { 
    if (false === strtotime($date)) { 
        return false;
    } 
    list($year, $month, $day) = explode('/', $date); 
    return checkdate($month, $day, $year);
}





?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Materiel Informatique</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    	
    	<img src="gsb.png" id="logo">

        <div id="bandeau">

           <h1 id="titre">Demande de materiel informatique</h1>
        
        </div>


    	<form id="form"  method="post">

            <fieldset id="fieldset1"style="">

            	<legend>Renseignement</legend>

	    		Nom :
	    		<input type="text" id="nom" name="nom" style="cursor: pointer;">
	    		
                <br>
                <hr>

	            Prénom :
	            <input type="text" id="prenom" name="prenom" style="cursor: pointer;">
	    		
                <br>
                <hr>

	            Code employé :
	            <input type="text" id="code_employe" name="code_employe" style="cursor: pointer;">

                <br>
                <hr>
	    		
	            Responsable :
	            <input type="text" id="responsable" name="responsable" style="cursor: pointer;">
	    		
                <br>
                <hr>

	            Mail Responsable :
	            <input type="text" id="mail_responsable" name="mail_responsable" style="cursor: pointer;">
            
            </fieldset>

            <br><br><br>

            <fieldset style=" ">
                
                <legend>Besoin</legend>

                PC Portable :
                <input type=checkbox name="pc_portable" style="cursor: pointer;">
                
                <hr>

                Smartphone :
                <input type=checkbox name="smartphone" style="cursor: pointer;">

                <hr>
                
                Station de travail :<input type=checkbox name="station_travail" style="cursor: pointer;">
                
                <hr>

                2ème écran :
                <input type=checkbox name="ecran_2" style="cursor: pointer;">

                <hr>
                
                Date Limite :<input id="deadline" type=input name="deadline" style="cursor: pointer;">JJ/MM/AA
                
                <?php 
                if (VerifDate($_POST['deadline'])) {
                   
                   echo "date ok";

                }elseif (isset($_POST['deadline'])) {
                    echo "champ non rempli";
                }
                else {
                    echo "date pas ok";
                }
                
                ?>

                <hr>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                Sites :
                <select name="site">
                  
                  <?php

			        $ligne = 1; 

                    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') 
                    {

                        $fic = fopen("./csv/sites.csv", "r");

                    } 
                    else 
                    {

                        $fic = fopen("/var/www/html/csv/sites.csv", "r");

                    }
					while($tab=fgetcsv($fic,1024,','))
					{
						$champs = count($tab);	
					
						$ligne ++;
					
						for($i=0; $i<$champs; $i ++)
						{
                        
                            echo "<option>".$tab[$i]."</option>\n";

						}
					}
        		?>

        		</select>

                &nbsp;&nbsp;&nbsp;&nbsp;

                Services :
                <select name="services">
                <?php



			        $ligne = 1; 
					
                    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') 
                    {

                        $fic = fopen("./csv/services.csv", "r");

                    } 
                    else 
                    {

                        $fic = fopen("/var/www/html/csv/services.csv", "r");

                    }

					while($tab=fgetcsv($fic,1024,';'))
					{
						$champs = count($tab);	
					
						$ligne ++;
					
						for($i=0; $i<$champs; $i ++)
						{

                        tri_bulle($tab[$i]);

						echo "<option>".$tab[$i]."</option>\n";

						}
					}
				?>
                </select>

            </fieldset>

            

            <?php 
            
            $selected_sites = $_GET['site'];
            $selected_services = $_GET['services'];

            echo $societe->getSociete();

            ?>

            <button id="reset" type="reset">Réinitialiser</button>

            <button id="valider" type="submit">Valider</button> 
            
            <br>
            <br>
            
    </body>
</html>
