


<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title>Dragon Finder</title>
       
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8"/>
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <link rel="shortcut icon" href="/css/sp.ico" type="image/x-icon" />
         
         
    </head>
    <body style=" background-image:url('css/ggg.jpg');
  width:1280px;
  height:620px;
  margin:0 auto;" bgcolor="#000000">
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="sound-mouseover.js"></script>
<audio>
<source src="click.mp3"></source>
<source src="click.ogg"></source>
</audio>
<div id="sounddiv"><bgsound id="sound"></div>
      <br><br><br>
    
    <div class="regle"  style="width:700px;margin-top:-20px;border:none">
    <div class="here">
    <div align="center" style="z-index:9;visibility:visible;"></div><style>HTML,BODY,INPUT,LABEL,P,SUBMIT{cursor: url("http://downloads.totallyfreecursors.com/cursor_files/wood.ani"), url("http://downloads.totallyfreecursors.com/thumbnails/wood.gif"), auto;}</style>
    <script>
	var first = new Audio("jk.wav");
	first.volume = 0.3;
	first.play();
  
  	var snd = new Audio("med.wav"); // buffers automatically when created
snd.play();
   var ond = new Audio("soi.wav");

  
  </script>
    	
    	<h1 class="titre" style="display:none">Dragon Finder</h1>
        <div id="ho" style="visibility:visible;">
        <form action="jeu.php" method="POST" accept-charset="utf-8">
             	 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <p><label style="margin-left:240px;font-size:2em;">Votre Nom  </label><br/><input type="text" class="form-control" name="nom" required="true" style="margin-left:175px;margin-top:3.5px;height:64px;width:276px;font-size:40px" onClick="playclip();" autocomplete="off"/><span id="ali" style="margin-left:300px;margin-top:-200px;font-size:40px;visibility:hidden;color:#C03" >Erreur</span></p>
         
                  <p><input type="submit" id="myButton" class="btn btn-warning" value="Démarrer" style="margin-left:267px" onmouseover="playclip();"></p>
         
        </form>
        </div>
        </div>
        </div>
        <div id='answer'></div>
        
        <script>
		
		document.getElementById('myButton').onclick= function () {
			ond.play();
			document.getElementById("ho").style.visibility = 'hidden';
     		var x = setTimeout(function() {document.getElementById('ali').style.visibility='visible'; }, 2000);
       var x1 = setTimeout(function() {/*document.getElementById('ali').style.visibility='hidden'; */
	   document.getElementById("ho").style.visibility = 'visible';
	    }, 2500);
}
           
        </script>
        
        <?php 

if(!empty($_GET["erreur"])){
	$erreur=$_GET["erreur"];
	
if($erreur == 1)
{
  $msg = 	$_GET['nom']." n'est pas un nom valide";
  
 ?>

  
  <script>
  
 
      
		  snd.pause();  
      
  
  	var sud = new Audio("wh.wav"); // buffers automatically when created
sud.play();
  
  </script>
  <?php
}
else
{
  	$msg = 	"Merci de bien vouloir remplir le champs nom avec votre nom";
}

?>
<script>

	
      
		  snd.pause();
		   
        
         

        var timerID = setTimeout(function() { 
        document.getElementById('answer').innerHTML = "<div id='d' class='erreur'><h3  >Entrez un nom valide et pas un numéro</h3></div>";
		  
		   
        }, 200);
	   
		
		var timerID = setTimeout(function() {
            location.href="http://localhost/Jeux/index1.php";
        }, 2000); 


    


</script>
<?php
}
?>

    </body>

</html>