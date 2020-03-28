    
	<div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?PHP echo $strona ?>">Strona Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  data-toggle="modal" data-target=".bd-example-modal-xl3">O Nas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target=".bd-example-modal-xl4">Czat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target=".bd-example-modal-xl5">Kontakt</a>
        </li>
		<div class="dropdown">
  <button class="btn btndd dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Słuchaj w:
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   <a class="dropdown-item" href="https://<?PHP echo $panel?>.panelradiowy.pl/listen.php?ip=<?PHP echo $ip?>&port=<?PHP echo $port?>&format=pls"> Winamp</a>
   
   <a class="dropdown-item" href="https://<?PHP echo $panel?>.panelradiowy.pl/listen.php?ip=<?PHP echo $ip?>&port=<?PHP echo $port?>&format=asx"> Windows Media Player</a>
   
   <a class="dropdown-item" href="https://<?PHP echo $panel?>.panelradiowy.pl/listen.php?ip=<?PHP echo $ip?>&port=<?PHP echo $port?>&format=ram"> Real Player</a>
    
  </div>
      </ul>
    </div>
	


