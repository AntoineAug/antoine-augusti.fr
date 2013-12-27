<?php
function img_formule($src,$height="20",$vertical_align="-20%")
	{
	echo '<a href="images/'.$src.'" rel="milkbox" title="Formule"><img src="images/'.$src.'" class="formule" style="height:'.$height.'px;vertical-align:'.$vertical_align.'" alt="Formule" /></a>';
	}
function img_icone($src)
	{
	echo '<img src="images/'.$src.'" alt="Icone" class="icone" />';
	}
function img_mini_icone($src)
	{
	echo '<img src="images/'.$src.'" alt="Icone" class="mini_icone" />';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>La relativité restreinte</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="content-language" content="fr"/>
<meta name="description" content="Présentation de notre travail de mécanique du point sur la relativité restreinte. INSA Rouen"/>
<meta name="keywords" content="'relativité restreinte', 'relativité', 'mécanique du point', 'mécanique', 'INSA Rouen', 'INSA', 'Augusti', 'Montion', 'El Jibbawe'"/>
<meta name="author" content="Antoine AUGUSTI, Marie MONTION, Nayef EL JIBBAWE"/>
<meta name="revisit-after" content="2 days"/>
<meta name="date-creation-ddmmyyyy" content="11122011"/>
<meta name="Robots" content="all"/>
<meta name="location" content="Rouen, FRANCE"/>
<meta name="expires" content="never"/>
<meta name="Distribution" content="Global"/>
<meta name="Audience" content="General"/>
<link rel="shortcut icon" type="image/x-icon" href="http://relativite.antoine-augusti.fr/images/favicon.png">
<link rel="image_src" href="http://relativite.antoine-augusti.fr/images/horloge.jpg" />
<link href="style.css"	title="Défaut" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="http://static.augusti.fr/css/milkbox.css" type="text/css" media="screen"/>
<script type="text/javascript" src="http://static.augusti.fr/js/mootools-1.2.3-core-yc.js"></script>
<script type="text/javascript" src="http://static.augusti.fr/js/mootools-1.2.3.1-assets.js"></script>
<script type="text/javascript" src="http://static.augusti.fr/js/milkbox.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12045924-3']);
  _gaq.push(['_setDomainName', '.antoine-augusti.fr']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>
<div id="content_titre">
	<h1>La relativité restreinte</h1>
</div>
<div id="content">
	<div class="speech">
		<?php img_mini_icone('infos.png'); ?> Vous pouvez cliquer sur les schémas et les formules pour les agrandir.
	</div>
	<h2>Introduction</h2>
	 Placez votre main sur une poêle pendant une minute, ça vous semble durer une heure. Asseyez vous à côté d’une belle fille pendant une heure, ça vous semble durer une minute. En d’autres termes, une seconde dure-t-elle toujours une seconde ? De même, un mètre mesure-t-il toujours un mètre ? C’est ce que l’on appelle la relativité dont une partie s’occupe de la relativité restreinte qui fera l’objet d’étude de cette présentation.
	<h2>Définition de la relativité</h2>
	 La relativité est la théorie élaborée par Albert Einstein en 1905 qui concerne l'observation et la mesure des phénomènes en fonction du référentiel depuis lequel l'observateur (ou l'appareil de mesure) effectue les mesures sur l'expérience. Cette notion est divisée en deux parties :
	<ul class="ul_margin_left square">
		<li><b>La relativité restreinte</b> : elle a été nommée “restreinte” car elle est seulement limitée aux repères galiléens. On appelle référentiel galiléen un référentiel dans lequel un point matériel isolé est soit au repos soit animé d’un mouvement rectiligne uniforme. Ainsi tout référentiel en mouvement rectiligne uniforme par rapport à un référentiel galiléen est lui même galiléen. Dans un tel repère, on peut appliquer le principe de l’inertie (1ère loi de Newton).<br>
		<u>Exemple</u> : le référentiel terrestre.<br>
		 La théorie de la relativité restreinte a établi de nouvelles formules permettant de passer d'un référentiel galiléen à un autre.</li>
		<br/>
		<li><b>La relativité générale</b> : Le principe de la relativité restreinte a été ensuite étendu aux référentiels non galiléens qui représentent les référentiels qui accélèrent par rapport à la surface de la Terre ou l’un par rapport à l’autre.<br>
		<u>Exemple</u> : Si on considère comme référentiel un train en accélération par rapport au référentiel terrestre galiléen, le mouvement du train n’étant pas uniforme alors ce référentiel est non galiléen.<br>
		Dans ces repères non galiléens, les lois de la mécanique doivent être modifiées, on parle alors de relativité générale.</li>
	</ul>
	<h2>Historique et postulats d’Einstein de la relativité restreinte</h2>
	 Avant la deuxième moitiée du XIX<sup>ème</sup> siècle, les physiciens se basaient sur le principe de la transformation de Galilée qui énonce que :
	<ul class="ul_margin_left square">
		<li>Des grandeurs physiques comme les coordonnées et les vitesses varient d’un repère galiléen à un autre.</li>
		<li>L’intervalle de temps séparant 2 événements est le même dans tous les repères galiléens : <?php img_formule('deltat_deltatprime.png'); ?></li>
		<li>Les lois de la mécanique sont invariantes dans tous les repères galiléens.</li>
	</ul>
	 Mais à partir de la deuxième moitié du XIX<sup>ème</sup> siècle, des expériences effectuées à plusieurs reprises (expérience de Michelson - Morley etc.) ont montré que l’application de la transformation de Galilée à la vitesse de la lumière possède des incohérences avec les résultats expérimentaux, elle doit être alors reformulée.<br>
	<br/>
	Seul Albert Einstein a réussi à établir une théorie expliquant clairement ces contradictions appelée la théorie de la relativité restreinte basée sur deux postulats.
	<h3>Premier postulat</h3>
	<div class="speech">
		 Les lois de la physique ont la même forme dans tous les référentiels galiléens.
	</div>
	 Ce premier postulat est une généralisation du premier principe de la relativité de Galilée. <br/>
	<h3>Second postulat</h3>
	<div class="speech">
		 La vitesse de la lumière dans le vide, notée c, a la même valeur dans tous les référentiels galiléens. C’est la vitesse limite des particules en mouvement.
	</div>
	<a href="images/figure_7_5.jpg" rel="milkbox" title="Accélération des électrons"><img src="images/figure_7_5.jpg" class="float_right" style="height:150px"/></a>L’existence de cette vitesse limite a été vérifiée expérimentalement par Bertozzi en 1964 : il a accéléré des électrons jusqu’à atteindre les plus grandes vitesse mesurables. Or, il a trouvé que la vitesse des électrons accélérés n’augmente pas indéfiniment ; elle atteint la vitesse de 0,99999995 c qui est très proche mais toujours inférieure à la vitesse limite c.<br>
	<br/>
	En plus de la résolution de plusieurs contradictions, la théorie de la relativité restreinte a prédit plusieurs conséquences étranges qui étaient très difficiles à accepter :
	<ul class="ul_margin_left square">
		<li>La dilatation du temps</li>
		<li>La contraction de la longueur</li>
		<li>L’équivalence masse - énergie</li>
	</ul>
	<!-- DILATATION DU TEMPS -->
	<h2>Dilatation du temps</h2>
	<h3>Définition</h3>
	Dans le cadre des postulats de la relativité restreinte, la durée séparant deux événements n’est pas toujours la même dans un repère galiléen.
	<h3>Expérience</h3>
	Considérons deux observateurs :
	<a href="images/figure_7_6.jpg" rel="milkbox" title="Figure 1"><img src="images/figure_7_6.jpg" class="float_right" style="height:170px"/></a>
	<ul class="ul_margin_left square">
		<li>Marc est à bord d’un train se déplaçant à une vitesse constante <?php img_formule('V0_vecteur.png'); ?> comparable à celle de la lumière.</li>
		<li>Juliette est debout sur le trottoir et observe le train où se trouve Marc.</li>
	</ul>
	A l’intérieur du train, un signal lumineux quitte la source de lumière A (événement 1) est réfléchi sur un miroir (symbolisé par la masse) se déplaçant d’une distance égale à D. Le signal est réfléchi et détecté au retour à la source (événement 2).<br>
	<br />
	<b>Pour Marc</b>, la situation est représentée par la figure 1. La durée est :<br>
	<?php img_formule('3.1.png','30','-40%'); ?> où <?php img_formule('c.png','10'); ?> est la célérité de la lumière.<br>
	<br />
	<br />
	<br />
	<a href="images/figure_7_7.jpg" rel="milkbox" title="Figure 2"><img src="images/figure_7_7.jpg" class="float_right" style="height:170px"/></a>
	<b>Pour Juliette</b>, la situation est indiquée à la figure 2. La lumière parcourt la distance 2<?php img_formule('l.png','15'); ?>  entre les deux événements avec la même célérité <?php img_formule('c.png','10'); ?> (selon le deuxième postulat de la relativité).<br>
	La durée mesurée par Juliette est :<br>
	<?php img_formule('3.2.png','40'); ?><br>
	où, d’après le théorème de Pythagore :<?php img_formule('3.3.png','40','-35%'); ?><br>
	<br />
	En remplaçant D et <?php img_formule('l.png','15'); ?> par :
	<?php img_formule('3.4.png','35','-35%'); ?> et <?php img_formule('3.4.2.png','35','-40%'); ?><br>
	<?php img_formule('3.4.3.png','70'); ?>
	<br />
	Soit :<br>
	<?php img_formule('3.5.png','70'); ?>
	<br />
	Avec :<br>
	<?php img_formule('3.6.png','70'); ?>
	<br />
	Puisque <?php img_formule('3.7.1.png'); ?> et <?php img_formule('3.7.2.png'); ?> alors <?php img_formule('deltat_sup_deltat0.png'); ?>
	<br />
	<h3>Interprétation</h3>
	Ce résultat signifie que l’intervalle de temps séparant deux événements (1) et (2) n’a pas la même valeur dans deux repères galiléens.<br>
	<br />
	La durée mesurée dans le repère lié à l’événement est appelée le temps propre <?php img_formule('delta_t0.png'); ?> la durée mesurée dans n’importe quel autre repère <?php img_formule('delta_t.png','15'); ?>  est plus longue que le temps propre, d’où l'appellation dilatation du temps. <?php img_formule('deltat_sup_deltat0.png'); ?><br>
	<h3>Exemple</h3>
	Soient un passager d’un avion et une personne immobile au sol. Le passager de l’avion observe une vitesse de la lumière inférieure à celle observée par la personne immobile au sol (car il est lui même en mouvement par rapport au sol). Si l’avion a la même vitesse que la lumière, le passager de ce dernier a alors l’impression que la lumière est immobile alors que la personne immobile au sol observe toujours une vitesse.
	<!-- CONTRACTION DE LA LONGUEUR -->
	<h2>Contraction de la longueur</h3>
	<h3>Définition</h3>
	De même que pour la durée, la distance séparant deux événements n’est pas toujours la même dans un repère galiléen.
	<h3>Expérience</h3>
	<a href="images/figure_3.png" rel="milkbox" title="Figure 3"><img src="images/figure_3.png" class="float_right" style="width:250px"/></a>
	On considère le dispositif précédent.<br>
	<br />
	<b>Pour Marc</b>, la situation est représentée dans la figure 3. Au repos (c’est-à-dire lorsque le train est immobile) la longueur de l’aller-retour du signal lumineux est 2<?php img_formule('l_0.png','20','-30%'); ?>. Ainsi la durée totale de l’aller-retour de la lumière est alors :<?php img_formule('4.1.png','40','-35%'); ?><br>
	<br />
	<a href="images/figure_4.png" rel="milkbox" title="Figure 3"><img src="images/figure_4.png" class="float_right" style="width:250px"/></a>
	<b>Pour Juliette</b>, la situation est représentée dans la figure 4 :
	Dans son mouvement d’aller, le signal lumineux émis dans la position A atteint le miroir (position B) après le temps <?php img_formule('delta_t1.png','25'); ?> (dilatation du temps). La distance totale parcourue par le signal pendant ce temps est <?php img_formule('c_delta_t1.png','25'); ?>. Cette distance peut être exprimée comme la longueur L du dispositif, mesurée par Juliette, augmentée d’une distance supplémentaire <?php img_formule('v0_delta_t1.png','25'); ?>, parcourue par le miroir durant cet intervalle de temps à cause du mouvement du train.<br>
	<br />
	Ainsi :<br>
	<?php img_formule('4.2.png','40'); ?><br>
	<br />
	Dans son mouvement du retour (position C de la figure 4), la lumière met la durée <?php img_formule('delta_t2.png','25'); ?> pour parcourir la distance L diminuée de la distance <?php img_formule('v0_delta_t2.png'); ?>  (car le train a avancé pendant le mouvement d’aller du signal lumineux, donc la distance considérée au retour a diminué).<br>
	<br />
	On obtient :<br>
	<?php img_formule('4.3.png','40'); ?><br>
	<br />
	Ainsi la durée totale de l’aller-retour de la lumière est :<br>
	<?php img_formule('4.4.png','70'); ?><br>
	<br />
	Or la dilation du temps donne :<br>
	<?php img_formule('4.5.png','85'); ?><br>
	<br />
	Lorsqu’on égalise les deux valeurs de <?php img_formule('delta_t.png','15'); ?> on obtient :<br>
	<?php img_formule('4.6.png','55'); ?><br>
	<br />
	<h3>Interprétation</h3>
	Ainsi la longueur L mesurée dans tout repère galiléen est plus petite que la longueur propre <?php img_formule('l_0.png','20','-30%'); ?> mesurée dans le repère propre de l’objet, d’où l’appellation contraction du temps.
	<h3>Exemple</h3>
	La distance Terre-Lune pour un observateur sur Terre est inférieure à celle constatée par un observateur d'un satellite se déplaçant à la vitesse de la lumière.
	<h2>Équivalence masse-énergie</h2>
	<h3>Définition</h3>
	Si un système au repos échange de l'énergie avec le milieu extérieur, par rayonnement ou par transfert thermique par exemple, sa variation d'énergie <?php img_formule('delta_e.png','15'); ?> et sa variation de masse <?php img_formule('delta_m.png','15'); ?> sont liées par la relation : <?php img_formule('5.1.png','25','-35%'); ?>
	<h3>Démonstration</h3>
	Sous l'action d'une force F, la vitesse d'une masse m augmente ou diminue sur chaque portion de la trajectoire. Le travail de la composante  peut s'interpréter alors en énergie cinétique Ec. Dans la théorie relativiste, la masse varie avec la vitesse, donc :<br>
	<?php img_formule('5.2.png','40'); ?><br>
	<br />
	L'intégration par parties : <?php img_formule('5.3.png','40'); ?><br>
	<?php img_formule('5.4.png','350'); ?><br>
	<br />
	Le gain d'énergie cinétique d'une particule peut donc être considéré comme gain de sa masse. Puisque m0 est la masse au repos, la quantité <?php img_formule('moc2.png','20'); ?> est appelée "énergie au repos" de la particule. Nous avons donc : <?php img_formule('5.5.png','25','-35%'); ?> Où Ec représente donc l’énergie de mouvement. La somme : <?php img_formule('5.6.png','20','-25%'); ?> représente donc l’énergie totale E de la particule en absence du champ de potentiel.<br>
	Ce qui donne : <?php img_formule('5.7.png','25','-30%'); ?><br>
	<h3>Exemple</h3>
	<a href="images/bombe_atomique.png" rel="milkbox" title="Bombe atomique"><img src="images/bombe_atomique.png" class="float_right photo" style="height:100px;margin-top:-10px"/></a>
	Dans une bombe atomique, seule une faible fraction de la masse originale est convertie en énergie, contrairement à une annihilation totale de particules. C’est l’équivalence masse-énergie en action.
	<div class="clear"></div>
	<h2>Conclusion</h2>
	Mais nous ne voyons pas ces phénomènes car nos vitesses sont bien trop faibles. En effet ces derniers ne s’observent clairement qu’à partir de 10 % environ de la vitesse de la lumière. De plus nous sommes convaincus qu’une seconde reste une seconde, qu’un mètre est partout un mètre. Einstein prouve pourtant que les apparences sont parfois trompeuses. Notre vision du monde, que nous pensons réelle, n’est qu’une illusion. Quand à la théorie de la relativité elle appartient à une vérité que nous ne comprenons pas encore.
</div>
<!-- END CONTENT -->
<div id="footer">
	 &copy; <?php echo date("Y"); ?> <a href="http://www.antoine-augusti.fr" title="Site web personnel" target="_blank">Antoine AUGUSTI</a> | Nayef EL JIBBAWE | Marie MONTION - Étudiants <a href="http://www.insa-rouen.fr" target="_blank" title="Site de l'INSA Rouen">INSA Rouen</a>
</div>
</body>
</html>