
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
  <div class="container">
    <?PHP include('inc/player.php');?>
    <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
	<?PHP include('inc/nawigacja.php');?>
  </div>
</nav>
<header class="masthead radio1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 text-left">
        <h1 class="font-weight-light nazwa radio1"><?PHP echo $nazwa ?></h1>
        <p class="lead slogan"><?PHP echo $slogan?></p>
      </div>
	  <div class="col-12 text-right">
        <iframe src="inc/shoutcast.php" style="border:0px #ffffff none;" name="ramka" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="400px" width="600px" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</header>
