<?php

session_start();

if( !empty($_POST['nom']))
{
	$nom = $_POST['nom'];
	$_SESSION['nom'] = $nom;
	if( is_numeric($nom))
	{
		header("Location: http://localhost/Jeux/index.php?erreur=1&nom=$nom");
	
	}
	
	else if(){}
	
	else
{
	header("Location: http://localhost/Jeux/index.php?erreur=2");
}
		
}
		


if(!isset($nom))
{
	$nom= $_SESSION['nom'];
}



?>

<pre>
<?php echo "POST <br>";
if(!empty($_POST)) {(print_r($_POST)); }?>
<?php echo "SESSION<br>";
if(!empty($_SESSION)) {(print_r($_SESSION)); }?>
</pre>

<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title>Jeu de Wlad Rich</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8"/>
    </head>
    <body>
    <div class="regle">
    	<h1>Le but du jeu</h1>
             
        <p><b>Principe du jeu:</b></p>

        <p>Mélanger 3 cartes face sur la page et vue de dos, dans les 3 cartes il y a2 as et une figure, le but étant de retrouver la figure après mélange virtuel.</p>
        
        <p>Le joueur choisit sa carte puis on retourne une des deux cartes qui n'a pas était choisie. Enfin,on propse au joueur une derrnière chance de pouvoir changer son choix</p>
        
        <p>Si le joueur ne change pas de choix depuis le début et qu'il gangne alors il triple sa mise, s'il fait  un changement de choix et qu'il gagne alors on double sa mise sinon il a perdu.</p>
        
        <p>Pour gagner la partie le joueur doit obtenir 10000 points, sil le joueur a 0 points alors le jeu est fini et le joueur a perdu</p>
        </div>
        <div class="points">
        
        <p><b>Nom du joueur : </b><?php echo $nom; ?></p>
        <p><b>Gain de départ : 500</b></p>
        <p><b>Nombre de chances : </b>2</p>
        
        
        </div>
        <div class="table">
        <form action="jeu.php" method="post" accept-charset="utf-8">
        
        <div class="tapis">
        
        <div class="cartes">
            <div class="carte">
            
            </div>
            <div class="choix">
            	<input type="radio" name="carte" value="1">
            </div>
        </div>
        <div class="cartes">
            <div class="carte">
            
            </div>
            <div class="choix">
            	<input type="radio" name="carte" value="2">
            </div>
        </div>
        <div class="cartes">
            <div class="carte">
            
            </div>
            <div class="choix">
            	<input type="radio" name="carte" value="3">
            </div>
        </div>
        
        </div>
        
        <div class="controle">
        	<p><input type="submit" value="Mélanger les cartes"></p>
        	<p><input type="submit" value="Valider mon choix"></p>
            <p><input type="submit" value="Donner la réponse"></p>
        </div>
        </form>
        </div>
        
    </body>

</html>