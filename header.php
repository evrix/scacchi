<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>lezioni di scacchi a pacchi</title>
    <link rel="icon" type="image/png" sizes="192x192" href="img/chessboard.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
<!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/header.js"></script>
    <noscript><strong>Attenzione: questo browser Non supporta JavaScript!</strong></noscript>
</head>

<body>

<header>

<!-- <aside class="logo">logo</aside> -->
<div class="logo">
    <a href="index.php"><img src="img/staunton.png">
    <h1>lezioni di scacchi a pacchi</h1></a>
</div>
<p>tattiche e strategie da Caissa Italia...</p>

</header>
<nav id="nav">
<!-- Menu -->
<?php
// $pagina = str_replace("page=","",$_SERVER['QUERY_STRING']);
$pagina = ($_SERVER['QUERY_STRING'] !== "") ? str_replace(".html", "", str_replace("page=","",$_SERVER['QUERY_STRING'])) : 'home';

$arrlength = count($menu);
// parto da due perché array_diff sposta le chiavi!!
for($x = 2; $x < $arrlength + 2; $x++) {
    $classe = ( str_replace(".html", "", $menu[$x]) == $pagina ) ? "current" : "";
    echo '<a href="' . $menu[$x] . '" class="' . $classe . '">' . str_replace(".html", "", str_replace("_", " ", $menu[$x])) . '</a>';
}
?>

</nav>

<button onclick="topFunction()" id="tornaSU" title="torna in cima">torna in cima</button>

<main style='background: url("img/<?php echo $pagina; ?>.jpg") no-repeat fixed right bottom content-box' >
