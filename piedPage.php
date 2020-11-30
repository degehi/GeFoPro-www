<!-- start footer -->
<?php
	$release .= "<br><b><i>2.3.3</i></b>";
	$release .= "<br>Fonctionnalit�s:";
	$release .= "<br>- Possibilit� de valider une �valuation hebdomadaire/de th�me, m�me si celle-ci n\'est pas compl�te";
	$release .= "<br>- Proposition automatique de texte dans la mise des notes, en fonction de ce qui a �t� saisi dans les �valuations";
	$release .= "<br><b><i>2.3.2</i></b>";
	$release .= "<br>Fonctionnalit�s:";
	$release .= "<br>- Int�gration d\'un lien sur Teams";
	$release .= "<br><b><i>2.3.1</i></b>";
	$release .= "<br>Fonctionnalit�s:";
	$release .= "<br>- Gestion des projets am�lior�e afin de faciliter les op�rations et attributions sur ceux-ci";
	$release .= "<br>- Possibilit� d\'attribuer directement une classe enti�re � un projet";
	$release .= "<br><b><i>2.3</i></b>";
	$release .= "<br>Fonctionnalit�s (gestion des composants):";
	$release .= "<br>- Possibilit� d\'ajouter des images pour un article, un type de boitier ou une cat�gorie (genre/type)";
	$release .= "<br>- Regroupement des articles en doublons pour une commande et tri selon num�ro d\'article";
	$release .= "<br>- Intitul� automatique de l\'article command� selon la m�me configuration de l\'impression des �tiquettes";
	$release .= "<br>- Pour un article, ajout d\'un nouveau champ de quantit� en stock minimum ainsi qu\'un champ de quantit� de commande";
	$release .= "<br>- Affichage du montant total par commande avec la TVA";
	$release .= "<br><b><i>2.2.2</i></b>";
	$release .= "<br>Bugs:";
	$release .= "<br>- Saisie des journaux le vendredi impossible, apr�s passage � l\'heure d\'hiver";
	$release .= "<br><b><i>2.2.1</i></b>";
	$release .= "<br>Fonctionnalit�s:";
	$release .= "<br>- Affichage des journaux avec tri par th�me ou par jour";
	$release .= "<br>- Correctif sur le calcul de la moyenne des �valuations pour la proposition des notes de semestre";
	$release .= "<br><b><i>2.2</i></b>";
	$release .= "<br>Fonctionnalit�s:";
	$release .= "<br>- Saisie des journaux de travail par tranche horaire ou dur�e";
	$release .= "<br>- Impression du suivi en PDF";
	$release .= "<br>- Navigation am�lior�e avec les vues th�mes/semaine dans les journaux et suivis";
	$release .= "<br><b><i>2.1</i></b>";
	$release .= "<br>Fonctionnalit�s:";
	$release .= "<br>- Ajout attribut Stage pour apprentis (hors listes t�ches et suivis)";
	$release .= "<br>- Apprentis externes hors liste navigation (fl�ches bleues) ";
	$release .= "<br>- Navigation avec les f�ches bleues (apprentis/semaines) possible avec les fl�ches du clavier (et touche CTRL appuy�e)";
	$release .= "<br>- Les projets peuvent �tre associ�s � tout apprenti et non plus uniquement que les 3�me et 4�me ann�es";
	$release .= "<br>- Modification possible de la pond�ration d\'un th�me dans la vue des notes de l\'apprenti (clic sur pond�ration)";
	$release .= "<br>Bugs:";
	$release .= "<br>- Passage � la semaine no 1 n\'incr�mente par l\'ann�e correctement";
	$release .= "<br>- Impression en PDF des �valuations uniquement si valid�es";
	$release .= "<br>- Probl�me de cr�ation globale des p�riodes pour les notes, pour le syst�me d\'�valuation hebdomadaire";
?>
<div id="footer">
	<p id="legal" onmouseover="Tip('<b>Release notes:</b><?=$release?>')" onmouseout="UnTip()">GeFoPro 2.3.2, &copy; 2020 EMT, designed by DGI.</p>
	
</div>
<!-- end footer -->
</div>

<!-- end wrapper -->
</body>
</html>