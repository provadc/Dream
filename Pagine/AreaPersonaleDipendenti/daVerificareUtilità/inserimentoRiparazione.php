<?php 
include "../../../config.php"; 
session_start(); 
	
	echo file_get_content("../../Template/HeadBase.txt");   

echo file_get_contents("../../Template/HeadBase.txt");
include "../../config.php"; 
      if($_SESSION["user"]){ 
        echo("Benvenuto, ".$_SESSION["nome"]." "); 
        echo("<a href='logout.php'>Logout</a>"); 
      }
?>      
     </div> 
        <div id="breadcrumb"> 
        Ti trovi in: <a href="home.php" tabindex="2">Home</a> / <a href="areaPersonale.php" tabindex="1">Area Personale</a> / Visualizza riparazioni
      </div> 

<label for="show-menu" class="show-menu">Menu</label>
<input type="checkbox" id="show-menu" role="button">
       
      <div id="menu">
         <ul>
            <a href="home.php"><span xml:lang="en" tabindex="2"><li>Home</li></span></a>
            <a href="new.php" tabindex="3"><li>Nuove</li></a>
            <a href="used.php" tabindex="4"><li>Usate</li></a>
            <a href="info.php" tabindex="5"><li>Info</li></a>
	        <a href="testDrive.php" tabindex="7"><li>Test Drive</li></a>
            <a href="chiSiamo.php" tabindex="6"><li>Chi Siamo</li></a>  
	</ul>
      </div>

      <div id="contenuto"> 
  <div id="funzioniPag">
     <ul id ="listaFunz">
     <li><a href='gestioneAnnunci.php'>Gestione Annunci</a></li>
     <li ><a href="gestioneAccountDipendenti.php" tabindex="8">Gestione Account</a></li>
     <li ><a href="gestioneRiparazioniDipendenti.php">Gestione Riparazioni</a> </li>
     </ul>
    </div>
       
  <p>Qui puoi visualizzare lo stato delle tue riparazioni</p> 
       </div> 

	<div id="inserimento">
		<form action='inserisciRip.php' method="POST">
			<fieldset>
				<legend>inserimento riparazione</legend>
				<label for="telaio">telaio:</label>
				<select name='telaio'>
				<?php
					$telaioq="select Num_Telaio from Auto";
					$telaio=mysqli_query($conn,$telaioq);
					if($telaio && $telaio->num_rows>0){
						while($row=$telaio->fetch_assoc()){
							echo"<option value='".$row['Num_Telaio']."'>".$row['Num_Telaio']."</option>";
						}
					}
				?>
				</select></br>
				<label for="descr">descrizione:</label>
				<input type="text" name="descr" value="" /></br>
				<label for="data">data:</label>
				<input type="text" name="data" value="" /></br>
				<label for="ora">ora:</label>
				<input type="text" name="ora" value="" /></br>
				<input type="submit" value="invia" />
			</fieldset>
		</form>
	</div>

	    <footer>
           <p><small>Il sito è stato creato per un progetto nell'ambito del corso di <a href="http://docenti.math.unipd.it/gaggi/tecweb/">Tecnologie Web</a></small>
           </p>
    </footer>
    </body>
</html>

