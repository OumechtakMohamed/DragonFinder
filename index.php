


<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title>Dragon Finder</title>
       
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8"/>
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <link rel="shortcut icon" href="/css/sp.ico" type="image/x-icon" />
         <script type="text/javascript" src="jquery.js"></script>
         <link rel="icon" type="image/jpg" href="css/dgg.jpg">
    </head>
	    <body style=" background-image:url('css/background2.jpg');margin: 0; 
    padding : 0;
    overflow: hidden;
  width:1280px;
  height:0px;
  margin-bottom:-2000px;background-repeat: no-repeat;" bgcolor="#000000" >
  
  
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- mouse over -->
    
    <script type="text/javascript" src="sound-mouseover.js"></script>
<audio>
<source src="click.mp3"></source>
<source src="click.ogg"></source>
</audio>
<div id="sounddiv"><bgsound id="sound"></div>
    
    
    <!-- fin -->
    
    <div align="center" style="z-index:9;visibility:visible;"></div><style>HTML,BODY,ul,INPUT,LABEL,P,SUBMIT{cursor: url("http://downloads.totallyfreecursors.com/cursor_files/wood.ani"), url("http://downloads.totallyfreecursors.com/thumbnails/wood.gif"), auto;}</style>
    
    

    <script>
  
  	var first = new Audio("elder.wav");
	var second= new Audio("halo.wav");
	var third= new Audio("journey.wav");
	var four= new Audio("m.wav");
	 
	 first.addEventListener('ended', function(){
    four.play();
});
four.addEventListener('ended', function(){
    third.play();
});
third.addEventListener('ended', function(){
    second.play();
});
second.addEventListener('ended', function(){
    first.play();
});
first.play();
first.volume = 0.5;

 
	

  </script>
  
 
  <script language="javascript1.4" type="text/javascript">
function _closeWindow() { window.opener = self; self.close();}
</script>
<div id="menu" style="background-image:url(css/background1.jpg);width:370px;height:383px;margin-top:240px;margin-left:120px;background-repeat: no-repeat;">
<br> 
 <ul id="navigation" style="margin-left:50px;margin-top:-20px">
  <li style="margin-top:70px" id="zero"><a href="#" onmouseover="playclip();">Commencer le jeu</a></li>
  <li id="one"><a href="#"  onmouseover="playclip();">Options</a></li>
  <li id="two"><a href="#" onmouseover="playclip();">A propos</a></li>
  <li id="three" ><a href="#" onmouseover="playclip();">Quitter</a ></li>
 
</ul>




<!-- test -->

<div id="start" style="visibility:hidden;">
 
             <p><label id='lbl23' style="margin-left:240px;font-size:2em;margin-top:340px">Votre Nom  </label><br/><input id="noun" type="text" class="form-control" name="nom" required="true" style="position:fixed;margin-left:175px;margin-top:3.5px;height:64px;width:276px;font-size:40px" onClick="playclip();" autocomplete="off"/></p>
         
                  <div><p><input type="submit" id="myButton" class="btn btn-warning" value="Démarrer" style="margin-top:124px;position:fixed;margin-left:267px;margin-top:74px;width:103px" onmouseover="playclip();"></p>
         
       
 <input type="submit"  id="prcd1" onmouseover="playclip();" value="Précedent" class="btn btn-primary" style="position:fixed;margin-left:270px;margin-top:124px;width:100px"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><div id="lll" style="color:#C03;margin-left:100px;font-size:40px;width:1000px"></div></div>
 
</div>

<script>

$(function(){
		
		
		
		
		$("#myButton").click(function(){
			
			if($("#noun").val()==''){
				$('#lll').html("Merci d'entrer votre nom").fadeIn('slow').delay(1000).fadeOut('slow');
			}
			else{
				
				var tnd = new Audio("soi.wav"); // buffers automatically when created
tnd.volume = 0.8;
tnd.play();
$('#lll').html("&nbsp &nbsp &nbsp &nbsp A toi de jouer").fadeIn('slow').delay(2000).fadeOut('slow');
tnd.addEventListener('ended', function(){
	
    window.location.href="http://localhost/jeux/jeu.php";
});

   }
			
			});
		$("#noun").click(function(){
			
			
				//$('#lll').html("");
				
			
			});
		
		});


</script>

<div id="volume" style="position:fixed;visibility:hidden;margin-top:380px;margin-left:-100px" >


<input type="submit" onmouseover="playclip();" id="btn2" value="-" style="width:50px; height:50px;margin-top:-1133px;margin-left:24px;" class="btn  btn-success">


<div id="btn3" class="progress" style="width:85%;margin-top:-585px; margin-left:70px">
  <div id="gg" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" > 
  </div>
</div>
 <input type="submit" onmouseover="playclip();" id="btn1" value="+" style="width:50px; height:50px;margin-top:-84px;margin-left:562px" class="btn btn-success">
 <input type="range"  id="rng" min="0" max="100" style="margin-left:72px;width:500px"/>
 <br>
 
 <input type="submit"  id="prcd" onmouseover="playclip();" value="Précedent" class="btn btn-primary" style="margin-left:270px">

 
 <div id="titre_volume" style="visibility:hidden;margin-top:-230px;margin-left:250px"><h1>Volume :</h1> </div>

</div>

<div id="propos" style="visibility:hidden">
 <p style="position:fixed;font-size:26px;margin-top:-240px;text-align:justify;font-family:Tw Cen MT;width:600px;border-width:1px;border-style:double;border-color:grey;padding:8px; " > Dragon Finder est le jeu qui te permettra de découvrir un nouveau monde. Teste ta culture avec nous, gagne de nouvelles expériences et enrichis ta mémoire!  plonge-toi dans le monde de la joie et du bonheur! C'est toi seul qui connait bien ton toi intérieur! C'est toi seul qui décide! Ne laisse jamais tes peurs s'emparent de ta volonté!</p>
 <input type="submit"  id="prcd2" onmouseover="playclip();" value="Précedent" class="btn btn-primary" style="margin-left:270px;margin-top:50px">
</div>




     <script>
        document.getElementById('rng').value = 50;
     </script>
     <script>
     document.getElementById('gg').style.width = first.volume*100 + "%";
	  document.getElementById("gg").innerHTML = Math.floor(first.volume*100) + "%";
	 
	 document.getElementById('rng').oninput= function () {
  
       first.volume = (document.getElementById('rng').value)/100;
       second.volume = (document.getElementById('rng').value)/100;
       third.volume = (document.getElementById('rng').value)/100;
       four.volume = (document.getElementById('rng').value)/100;
	   document.getElementById('gg').style.width = first.volume*100 + "%";
	  document.getElementById("gg").innerHTML = Math.floor(first.volume*100) + "%";
}

document.getElementById("btn1").onclick = function () {
  if(first.volume < 1 && second.volume < 1 && third.volume < 1 && four.volume < 1){
  first.volume = first.volume + 0.01;
  second.volume = second.volume + 0.01;
  third.volume = third.volume + 0.01;
  four.volume = four.volume + 0.01;
  }
  else{
	 first.volume = 1;
  second.volume = 1;
  third.volume = 1;
  four.volume = 1;
	  }
	  document.getElementById('gg').style.width = first.volume*100 + "%";
	  document.getElementById("gg").innerHTML = Math.floor(first.volume*100) + "%";
	  document.getElementById('rng').value = Math.floor(first.volume*100);
}

document.getElementById("btn2").onclick = function () {
  if(first.volume >0 && second.volume >0 && third.volume >0 && four.volume >0){
  first.volume = first.volume - 0.01;
  second.volume = second.volume - 0.01;
  third.volume = third.volume - 0.01;
  four.volume = four.volume - 0.01;}
  else{
	 first.volume = 0;
  second.volume = 0;
  third.volume = 0;
  four.volume = 0; 
	  }
	  document.getElementById('gg').style.width = first.volume*100 + "%";
	  document.getElementById("gg").innerHTML = Math.floor(first.volume*100) + "%";
	  document.getElementById('rng').value = Math.floor(first.volume*100);
	}


 

</script>

<div id="me"></div>
<script>

var div = document.getElementById('menu');
var miv = document.getElementById('volume');
var kiv = document.getElementById('titre_volume');
var piv = document.getElementById('propos');
var qiv = document.getElementById('prcd1');
var siv = document.getElementById('start');



document.getElementById("one").onclick = function () {




kiv.style.visibility = 'visible';
miv.style.visibility = 'visible';
div.style.visibility = 'hidden';

	  
}

document.getElementById("prcd").onclick = function () {



kiv.style.visibility = 'hidden';
div.style.visibility = 'visible';
miv.style.visibility = 'hidden';


	  
}

document.getElementById("two").onclick = function () {




div.style.visibility = 'hidden';
piv.style.visibility = 'visible';
//piv.style.marginTop = '-640px';
//piv.style.width = "600px";
piv.style.marginLeft = "-60px";
qiv.style.marginTop = "-50px";	 
qiv.style.marginLeft = "450px"; 

	  
}
</script>

	

<script>
//début

	$("#three").click(function() {
		
		window.location.href="http://localhost/jeux/end.html";
		
		
    });
	



document.getElementById("zero").onclick = function () {


document.getElementById("noun").value="";
document.getElementById("lll").innerHTML="";
div.style.visibility = 'hidden';
siv.style.visibility = 'visible';
siv.style.marginTop = '-700px';
siv.style.width = "-600px";
siv.style.marginLeft = "-60px";

//var first = new Audio("jk.wav");
	
  
  	var snd = new Audio("med.wav"); // buffers automatically when created
snd.volume = 0.8;
snd.play();
   //var ond = new Audio("soi.wav");

	  
}

document.getElementById("prcd1").onclick = function () {



piv.style.visibility = 'hidden';
div.style.visibility = 'visible';
piv.style.marginTop = 'auto';
siv.style.visibility = 'hidden';
piv.style.visibility = 'hidden';
div.style.visibility = 'visible';
snd.volume=0;
}

document.getElementById("prcd2").onclick = function () {



piv.style.visibility = 'hidden';
div.style.visibility = 'visible';
//piv.style.marginTop = 'auto';

}</script>















</body>

</html>