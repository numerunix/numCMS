<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Il sito di numerone</title>
  <meta name="ocs-site-verification" content="bf0246d4d0a970fa7b66ed209b237711" />
</head>
<body>
<?php
function menu($menu, $valore, $voce) {
$result=false;
if ($menu==$valore) {
	echo $voce;
	$result=true;
} else
	echo '<a href="index.php?id='.$valore.'">'.$voce.'</a>';
echo '<br />';
 return $result;
 }
 
$menu=0;
if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']<1)
	$menu=$_GET['id'];
echo '<div class="menu">
Contatti
<div class="submenu">';
	if (menu($menu, 0, 'HomePage'))
		require_once('include/home.php');
echo'	<h5>numerone &copy; 2022</h5>
	</div>
	<div class="pagina">';
			echo $contenuto
?>
	</div>
</body>
</html>