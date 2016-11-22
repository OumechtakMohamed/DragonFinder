<?php

session_start();

$as = "A";
$roi="R";
$dos="X";



// teste si reçoit un nom depuis la page index

if( !empty($_POST['nom']))
{
	$nom = $_POST['nom'];
	// teste si nom est une valeur numérique
	
	if( is_numeric($nom))
	{
		// redirection vers accueil car nom est //incorrecte cause valeur numérique
		header("Location: http://localhost/Jeux/index.php?erreur=1&nom=$nom");
	
	} 
	
	 /* else if(empty(trim($_POST['nom']))){
		header("Location: http://localhost/jeux/index.php?erreur=2");
		} 
	*/
	
	else //ici le nom est admis
{
	$_SESSION['nom']=$nom; // stockage du nom dans la //session php
	$_SESSION['ale']=0;
	$gain = 500;
	$chance=2;
	$tour= 0;
	$choix= 0;
	$ale = 4;
	$_SESSION['gain']=$gain;
	$_SESSION['chance']=$chance;
	$_SESSION['tour']=$tour;
	$_SESSION['choix']=$choix;
	
}
		
} 

// INFO : nombre max: 2147483647
// calcul de la variable gagnante
if(!empty($_SESSION['ale'])){
	$ale=$_SESSION['ale'];
	}
	else{
$x = mt_rand(0,3000000);
$y = $x /1000000;
$ale = ceil($y);
$_SESSION['ale']= $ale;
$ale=0;}

// teste si poste est vide
if(empty($_POST))
{
	$_SESSION['ale']=0;// mélange des cartes : la bonne //réponse
	$_SESSION['choix'];
	$chance=2;
	$tour= 0;
	$choix= 0;
	$ale =0;
	$_SESSION['chance']=$chance;
	$_SESSION['choix']=$choix;
	$_SESSION['tour']= $tour;
	
	
	
}

		

// teste de la présence d'un nom dans la session
if(!empty($_SESSION['nom']))
{
	$nom= $_SESSION['nom'];
	
}

//test des variables en session
if(!empty($_SESSION['gain']) && !empty($_SESSION['chance']))
{
	$gain = $_SESSION['gain'];
	$chance = $_SESSION['chance'];
;
	
}
// teste de la présence de nombre de tour et du choix
if($_SESSION['tour']==0 && $_SESSION['choix'] == 0)
{
	$tour= $_SESSION['tour'];
	$choix= $_SESSION['choix'];
	
}
else{
	$tour= $_SESSION['tour'];
	$choix= $_SESSION['choix'];
	}

// test si on reçoit une carte au choix
if( !empty($_POST['carte'])){
	$tour++;
	$_SESSION['tour'] = $tour;
	$choix= $_POST['carte'];
	if($_SESSION['choix'] != $choix && $_SESSION['choix'] != 0){
		$chance--;
		$_SESSION['chance']=  $chance;
		}
	$_SESSION['choix']=$choix;
	
	
}



?>

<pre>

<?php 
if(!empty($_SESSION)) {(print_r($_SESSION)); }




// test de la variable ale pour connaître sa valeur
switch($ale){
	
	case 1: {
				$carte1= $roi;
				$carte2= $as;
				$carte3= $as;
			}
			break;
	case 2: {
				$carte1= $as;
				$carte2= $roi;
				$carte3= $as;
			}
			break;
	case 3: {
				$carte1= $as;
				$carte2= $as;
				$carte3= $roi;
			}
			break;
	case 0: {
				$carte1= $dos;
				$carte2= $dos;
				$carte3= $dos;
			}
			break;
	
	}

?>
</pre>

<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title>Dragon Finder</title>
      <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8"/>
        <link rel="icon" type="image/jpg" href="css/dgg.jpg">
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <script>
       
	   var timer2 = setTimeout(function(){ var first = new Audio("xv.mp3");first.volume = 0.3;first.play();},10000);
       
	    
        
    </script>
    </head>
    <script language="javascript" type="text/javascript">
	

/*
var compte = 5;

function decompte()
{
	     
        if(compte <= 1) {
        pluriel = "";
        } else {
        pluriel = "s";
        }
 
    document.getElementById("compt").innerHTML = compte;
    if(compte == 9 || compte <=9){
		document.getElementById("compt").innerHTML = "&nbsp;"+compte;
		}
        if(compte == 0 || compte < 0) {
        compte = 1;
		document.getElementById("compt").style.marginLeft = "120px";
		document.getElementById("compt").innerHTML = "GO";
		var timer1 = setInterval('document.getElementById("ght").style.visibility="hidden";document.getElementById("all").style.visibility="visible";document.getElementById("all").style.marginTop="-600px";',1000)
        
        clearInterval(timer);
        }
 
    compte--;
}
var timer = setInterval('decompte()',1000);
/* var compte = 5;
function decompte()
{
        if(compte <= 1) {
        pluriel = "";
        } else {
        pluriel = "s";
        }
 
    document.getElementById("compt").innerHTML = compte + " seconde" + pluriel;
 
        if(compte == 0 || compte < 0) {
        compte = 1;
		document.getElementById("compt").innerHTML = "PRET";
		var timer1 = setInterval('document.getElementById("decco").style.visibility="hidden";document.getElementById("all").style.visibility="visible";',1000)
        
        clearInterval(timer);
        }
 
    compte--;
}
var timer = setInterval('decompte()',1000); */
</script>
<script>
  var timer4 = setTimeout(function(){ document.getElementById("ght").style.visibility="hidden";document.getElementById("all").style.visibility="visible";document.getElementById("all").style.marginTop="-600px";},10000);
</script>
    <body id="rr" style="
    padding : 0; 
    background-color: #000;
    overflow: hidden; ">
    <div id="ght"><br /><br /><br /><br /><br /><br />
	<span id="compt" style="margin-top:0px;margin-left:130px;font-size:80px"></span>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   <script>
  var timer5 = setTimeout(function(){ document.getElementById("rr").style.backgroundColor="#FFF"},9900);
</script>
    <style>
html{
	overflow: hidden;
	}
#ght {
	
   background: url(loading2.gif) no-repeat;
   height: 600px;
   width:1000px;
   margin-left:400px;
   margin-top:40px;
   
}


</style>
    <div align="center" style="z-index:9;visibility:visible;"></div><style>HTML,BODY,P{cursor: url("http://downloads.totallyfreecursors.com/cursor_files/wood.ani"), url("http://downloads.totallyfreecursors.com/thumbnails/wood.gif"), auto;}</style>
    <style>/* html { overflow-y: hidden; }   */</style>
    
    <div id="all" style="visibility:hidden;margin-top:-100px">
    <div class="regle">
    	<h1 style="color:#606">Dragon Finder</h1>
             
        <p><b>Principe du jeu:</b></p>

        <p>Mélanger 3 cartes face sur la page et vue de dos, dans les 3 cartes il y a2 as et une figure, le but étant de retrouver la figure après mélange virtuel.</p>
        
        <p>Le joueur choisit sa carte puis on retourne une des deux cartes qui n'a pas était choisie. Enfin,on propse au joueur une derrnière chance de pouvoir changer son choix</p>
        
        <p>Si le joueur ne change pas de choix depuis le début et qu'il gangne alors il triple sa mise, s'il fait  un changement de choix et qu'il gagne alors on double sa mise sinon il a perdu.</p>
        
        <p>Pour gagner la partie le joueur doit obtenir 10000 points, sil le joueur a 0 points alors le jeu est fini et le joueur a perdu</p>
        </div>
        <div class="points">
        
        <p><b style="color:#F36;">Nom du joueur : </b><?php echo '<b style="color:#3F0">'.$nom.'</b>'; ?></p>
        <p><b style="color:#F36;">Gain de départ : </b><?php echo '<b style="color:#3F0">'.$gain.'</b>'; ?></p>
        <p><b style="color:#F36;">Nombre de chances : </b><?php echo '<b style="color:#3F0">'.$chance.'</b>'; ?></p>
        
        
        </div>
        <div class="table">
        <form action="jeu.php" method="post" accept-charset="utf-8">
        
        <div class="tapis">
        
        <div class="cartes">
            <div class="carte">
            	<p><?=$carte1; ?></p>
            </div>
            <div class="choix">
            <?php if($tour != 2): ?>
            	<input type="radio" name="carte" value="1">
            <?php endif ;?>
            </div>
        </div>
        <div class="cartes">
            <div class="carte">
            	<p><?=$carte2; ?></p>
            </div>
            <div class="choix">
            <?php if($tour != 2): ?>
            	<input type="radio" name="carte" value="2">
                <?php endif ;?>
            </div>
        </div>
        <div class="cartes">
            <div class="carte">
            	<p><?=$carte3; ?></p>
            </div>
            <div class="choix">
            <?php if($tour != 2): ?>
            	<input type="radio" name="carte" value="3">
            <?php endif ;?>      
            </div>
        </div>
        
        </div>
        
        <div class="controle">
        <br>
        <?php 
		    if($tour == 0){
								echo '<p><input type="submit" value="Mélanger les cartes" class="btn btn-danger" style="width:200px" disabled></p>';
								
								echo '<p><input type="submit" value="Valider mon choix " class="btn btn-danger" style="width:200px"></p>';
								
								echo  '<p><input type="submit" value="Donner la réponse" class="btn btn-danger" style="width:200px" disabled></p>';
								}
								else if($tour==1){
								echo '<p><input type="submit" value="Mélanger les cartes" class="btn btn-danger" style="width:200px" disabled></p>';
								
								echo '<p><input type="submit" value="Valider mon choix " class="btn btn-danger" style="width:200px" disabled></p>';
								
								echo '<p><input type="submit" value="Donner la réponse" class="btn btn-danger" style="width:200px"></p>';
								}
								else{
								echo '<p><input type="submit" value="Mélanger les cartes" class="btn btn-danger" style="width:200px"></p>';
								
								echo '<p><input type="submit" value="Valider mon choix " class="btn btn-danger" style="width:200px" disabled></p>';
								
								echo '<p><input type="submit" value="Donner la réponse" class="btn btn-danger" style="width:200px" disabled></p>';
				}
		?>
        
        	
        </div>
        </form>
        </div>
        </div>
    </body>

</html>