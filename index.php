<?php

// elenco delle pagine esistenti
$menu = array_diff(scandir("htdocs/"), array('..', '.','home.html'));

// includo l'intestazione
include_once 'header.php';

// includo il corpo
if ( in_array( $_GET["page"], $menu ) )
  {
    include_once 'htdocs/' . $_GET["page"];
  }
else
  {
    include_once 'home.html';
  }

// includo il piè di pagina
    include_once 'footer.html';

?>
