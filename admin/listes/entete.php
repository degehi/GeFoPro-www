<?php
# @Author: David Girardin <degehi>
# @Date:   19.03.2021 11:03:70
# @Email:  david.girardin@gefopro.ch
# @Project: GeFoPro
# @Filename: entete.php
# @Last modified by:   degehi
# @Last modified time: 30.03.2021 13:03:83
# @License: GPL-3.0 License, please refer to LICENSE file included to this package
# @Copyright: GeFoPro, 2010
ini_set( 'default_charset', "iso-8859-1" );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title><?=$app_section?> - <?=libelleTrad('gestionatelier')?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?=$_SESSION['home']?>default.css?rdn=123" rel="stylesheet" type="text/css" />
<link rel="icon" href='<?=$_SESSION['home'].Logo?>' type="image/x-icon" />
<link rel="shortcut icon" href='<?=$_SESSION['home'].Logo?>' type="image/x-icon" />
<script>
// iso-8859-1
var toggle_ctrl;
function readKey(event) {
	var x = event.charCode || event.keyCode;  // Get the Unicode value
	var ref;
	if(x==37 && event.ctrlKey) {
		ref = document.getElementById("prev");
		ref.click();
		//window.location=ref.href;
	} else if(x==39 && event.ctrlKey){
		ref = document.getElementById("next");
		ref.click();
		//window.location=ref.href;
	} else if(x==38 && event.ctrlKey){
		ref = document.getElementById("down");
		ref.click();
	} else if(x==40 && event.ctrlKey){
		ref = document.getElementById("up");
		ref.click();
	}
}
function callPage(sel) {
	document.location.href='<?=$_SESSION['home']?>/../../'+sel.value+'/';
}
</script>
</head>
<body onkeydown="readKey(event);" >
<script type="text/javascript" src="/js/traduction.js"></script>
<script type="text/javascript" src="/js/wz_tooltip.js"></script>
<script type="text/javascript" src="/js/msg.js"></script>
<link rel="stylesheet" media="all" href="/js/msg.css" />

<div id="wrapper">

<div id="header">
	<div id="logo">
		<br>
		<table border='0' width="100%"><tr><td>
		<h1>
<?php
if(!empty($configurationAPP)&&hasAdminRigth()) {
	echo "<select name='app' id='selapp' onChange='callPage(this)'>";
	foreach($configurationAPP as $app_name) {
		echo "<option value='".$app_name."' ";
		if($app_name===$app_section) echo " selected";
		echo " id='selapp'>".$app_name."</option>";
	}
	echo "</select>";
} else {
		echo $app_section;
}
?> - <?=libelleTradUpdAll('gestionatelier')?></h1>
		</td>
		<td align="right"><a href='<?=$_SESSION['home']?>comp/compList.php'><?=libelleTrad('menuconso')?></a>
		<br><a href='<?=$_SESSION['home']?>doc/dossiers.php'><?=libelleTrad('menudoc')?></a>
		<br><a href='<?=$_SESSION['home']?>admin/listes/atelier.php?modeHTML'><?=libelleTrad('gestionatelier')?></a>
		<?php if(!empty($teamsURL)) { ?>
			<br><a href='<?=$teamsURL?>' target='teams'>Teams</a>
		<?php } ?>
		</td></tr></table>
	</div>

	<div id="menu">

		<ul>
			<?php if(hasAdminRigth()) { ?>
			<li class="current_page_item"><a href="<?=$_SESSION['home']?>admin/listes/horaire.php"><?=libelleTrad('menuhoraires')?></a></li>
			<li class="current_page_item"><a href="<?=$_SESSION['home']?>admin/listes/atelier.php?modeHTML"><?=libelleTrad('menueleves')?></a></li>
			<li class="current_page_item"><a href="<?=$_SESSION['home']?>admin/listes/listeCoursCIE.php"><?=libelleTrad('menucie')?></a></li>
			<li class="current_page_item"><a href="<?=$_SESSION['home']?>admin/listes/listeProjets.php"><?=libelleTrad('menuprojets')?></a></li>
			<li class="current_page_item"><a href="<?=$_SESSION['home']?>admin/listes/journaux.php"><?=libelleTrad('menusuivis')?></a></li>
			<li class="current_page_item"><a href="<?=$_SESSION['home']?>admin/listes/listeNotes.php"><?=libelleTrad('menunotes')?></a></li>
			<!-- li class="current_page_item"><a href="<?=$_SESSION['home']?>admin/listes/taches.php?modeHTML"><?=libelleTrad('menutaches')?></a></li -->
			<li class="current_page_item"><a href="<?=$_SESSION['home']?>admin/listes/tachesHebdo.php"><?=libelleTrad('menutaches')?></a></li>
			<li class="current_page_item"><a href="<?=$_SESSION['home']?>admin/listes/todo.php"><?=libelleTrad('menutodo')?></a></li>
			<?php  } ?>
			<li class="last"><a href="<?=$_SESSION['home']?>index.php?logout=out"><?=libelleTrad('menulogout')?></a></li>
			<?php
			if(!empty($modeAff) && $modeAff==$attribCarnet) {
				echo "<li class='last'>&nbsp;</li><li class='context'><a href='".$_SESSION['home']."admin/listes/atelier.php?modeHTML=&modeAff=100&reset=Effacer'>".libelleTrad('menueffacer')."</a></li>";
				echo "<li class='last'>&nbsp;</li><li class='context'><a href='".$_SESSION['home']."admin/listes/atelier.php?modeHTML=&modeAff=100&resetAndSet=Effacer'>".libelleTrad('menuoublis')."</a></li>";
			} ?>
		</ul>

	</div>

</div>
<?php
if(!hasAdminRigth()) {
	echo "<br><br><center><b>Contenu non autoris�.</b></center><br><br>";
	exit;
}
?>
