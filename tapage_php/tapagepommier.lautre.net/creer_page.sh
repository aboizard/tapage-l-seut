#!/bin/bash
read -p "comment s'appellera votre dossier ? " TITLE
read -p "quel est le chemin d'acc�s depuis la racine site ?" CHEMIN
REP=$CHEMIN/$TITLE
echo "votre dossier est '$REP'"
if [ ! -e $REP ]
then
	mkdir -v $REP
	mkdir -v $REP/image
fi

read -p "entrez le chemin ABSOLU du dossier de vos image " REPIMU
ls $REPIMU|while read -r
do
	cp -v $REPIMU/$REPLY $REP/image
done


#creation repertoire miniature si existe pas
if [ ! -e $REP/miniature ]
then
	mkdir $REP/miniature
fi

#miniaturisation des images
ls $REPIMU|while read -r
do
	echo "miniaturisation de '$REPLY'"
	./miniature.sh $REPIMU/$REPLY $REP
done
echo "miniaturisation terminée avec succès !"

#création de l'en tête de la page html
echo "création de votre page internet"
pagehtml=$REP/page.php
echo '' >> $pagehtml
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>'$TITLE'</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <link rel="stylesheet" href="/stylesheet.css" />
			 <style type="text/css">
       	a img { border:0; }
       </style>
   </head>
   <body class="other-page">
   	<header>
   		<h1>Vous êtes dans le dossier '$REP' </h1>
   	</header>' >> $pagehtml

menu=$(cat menu.txt)
echo $menu >> $pagehtml

echo '	<form action="page.php" method=post>
 		<div class="dossier">
			<input type="text" name="nomdossier" placeholder="inscrivez ici le nom de votre dosser personnel" size="32">
			<input type="submit" value="Copier les images"><br>
		</div>


		<div class="mode_emploi_galerie"><a href="/galerie/mode_emploi_galerie.html" >Fonctionnement de la galerie</a></div>
		<div class="contenu">' >> $pagehtml


if [ -e $REP/page.php ]
	then echo "votre page à bien été crée"
	else echo "un probleme est apparu, contacter super gabi !"
fi

#contenu du form = miniature + checkboxes
ls $REP/image|while read -r
do
	if [ -e $REP/miniature/$REPLY-thumb.* ]
	then
		echo '<div class="miniature">' >> $pagehtml
		echo '<a href="'image/$REPLY'"><img src="miniature/'$REPLY'-thumb.jpg"></a>' >> $pagehtml
		echo '<input type="checkbox" name="photo_coche[]" value="'$REPLY'">' >> $pagehtml
		echo '</div>' >> $pagehtml
	fi
done

#pied de page html
echo '  </div>
	</form>
	<?php
        // Le tableau $_POST[photo_coche] contient les valeurs des checkbox cochées
        $nom_dossier=$_POST['nomdossier'];
        if($nom_dossier != "")
	{
		echo "<h2>les photos ont été copiées dans le dossier : $nom_dossier</h2>";
        	mkdir("/home/tapage-sous-les-pommiers/public_html/recuperation/$nom_dossier", 0777);
        	foreach($_POST['photo_coche'] as $valeur)
                	{
                        	echo "<h2>la photo $valeur a été copiée</h2>";
                        	$sourcefile="image/$valeur";
                        	$destfile="/recuperation/$nom_dossier/$valeur";
                        	copy($sourcefile, $destfile);
                	}
	}
	else
	{
		die();
	}
	?>
</body>
</html>' >> $pagehtml
