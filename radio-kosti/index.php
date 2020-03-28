   <?PHP include('inc/ustawienia.php');?>
 <!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="css/styl.css" >
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="./css/maudio.css">

   <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">

    <title><?PHP echo $nazwa ?> | <?PHP echo $slogan ?></title>
  </head>
  <body>
  <?PHP include('inc/naglowek.php');?>
  
<div class="container">



  <div class="row">

    <div class="col-8">

  <div class="ponline">
  <a target="_blank" class="btn btndd" type="button" href="https://<?PHP echo $panel ?>.panelradiowy.pl/embed.php?script=onlineform">
    Dodaj
  </a>
<iframe class="ram-poz" src="https://<?PHP echo $panel ?>.panelradiowy.pl/embed.php?script=online" scrolling="no" border="0" marginwidth="0" marginheight="0" frameborder="no" width="90%" height="25px"></iframe>
</div>
<div class="card">
  <h5 class="card-header">Jak edytować szablon?</h5>
  <div class="card-body">
    
	<img src="grafika/av.png" alt="avatar" class="av">
	<h5 class="card-title">Potrzebne / przydatne oprogramowanie:</h5>
    <p class="card-text">
	<ul>
		<li>
		<a target="_blank" href="https://notepad-plus-plus.org/downloads/">Notepad++</a> W mojej ocenie najlepszy edytor HTML, PHP, CSS.
		</li>
		
		
		<li>
		<a target="_blank" href="http://totalcmd.pl/">Total Commander</a> Klient FTP do wrzucenia plików na serwer.
		</li>
		
		
		<li>
		<a target="_blank" href="https://gimp.org/">GIMP</a> Edytor grafiki.
		</li>
	</ul>
	</p>
	
		<h5 class="card-title">Jak edytować kod?</h5>
    <p class="card-text">
	Aby dostosować szablon pod swoje radio wystarczy edytować plik <code>inc/ustawienia.php</code>, oraz
	<code>inc/shoutcast.php</code><br><br>
	<code>inc/ustawienia.php</code><br>
	
$nazwa='NAZWA RADIA'; 	- Nazwa, która będzie się wyświetlała w nagłówku.<br><br>
$slogan='SLOGAN';	- Slogan pod nazwą.<br><br>
$panel='kosti'; - SAMA NAZWA twojego panelu radiowego! Jeśli link do Twojego panelu radiowego to <b>kosti.panelradiowy.pl</b> to wpisujesz tylko <b>kosti</b><br><br>
$ip='s1.slotex.pl'; - IP/HOST serwera Shoutcast<br><br>
$port='7458'; - PORT Serwera Shoutcast<br><br>

$strona='http://localhost/radio-kosti/'; - Pełen adres do Twojego Radia<br><br>
$fb='https://facebook.com/ekostipl'; - Pełen link do Fanpage Radia<br><br>

<code>inc/shoutcast.php</code><br>

$stats = new shoutcast2stats('<b>s1.slotex.pl'</b>, <b>7458)</b>; - 	<b>ip/host</b> i <b>port</b> serwera Shoutcast
	
	</p>
   
  </div>
</div>



<div class="card">
  <h5 class="card-header">Przykład akordeonu</h5>
  <div class="card-body">
    
	<div class="accordion" id="accordionExample"><!-- początek akordeonu -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Złośliwy plik PDF
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body text-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/PTjDB1cYSqQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Metasploi Framework  <--kliknij aby przełączyć
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body text-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/3Wc3Ud_D1t8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          SET w akcji! <--kliknij aby przełączyć
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body text-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/k6A9mAiYsD4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div><!-- konic akordeonu -->
	
	<h5 class="card-title">Info o video.</h5>
		<p class="card-text">

		Filmiki pochodzą z mojego kanału <a href="https://www.youtube.com/channel/UCnCuPOjeOLeNIwI7AawPGqQ" target="_blank">Dr.Kosti</a>
		</p>
   
  </div>
</div>



<div class="card">
  <h5 class="card-header">Przykładowy</h5>
  <div class="card-body">
    
	<img src="grafika/av.png" alt="avatar" class="av">
	<h5 class="card-title">Przykład</h5>
		<p class="card-text">
		Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara Bla Bla tarara 
		</p>
	
	<h5 class="card-title">Przykładowy Przykład</h5>
		<p class="card-text">

		Test bla bla 
		</p>
   
  </div>
</div>



	</div>
	
	
<?PHP include('inc/prawa.php');?>
  </div>








<?PHP include('inc/stopka.php');?>