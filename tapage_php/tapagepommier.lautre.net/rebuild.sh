#!/bin/bash
read -p "chemin du dossier de la page : " REP
read -p "nom de la page : " TITLE
echo "votre dossier est '$REP'"
echo "la page s'appellera $TITLE"
if [ ! -e $REP ]
then
	echo "le dossier n'existe pas"
fi

if [ ! -e $REP/image ]
then
	echo "le dossier ne contient pas d'image"
fi

if [ ! -e $REP/miniature ]
then
	echo "le dossier ne contient pas de miniature"
fi

if [ -e $REP/page.php ]
then
rm $REP/page.php
echo "une page a été supprimée" 
fi

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
	<link rel="stylesheet" href="/Lightbox/css/lightbox.css">
	<style type="text/css">
       a img { border:0; }
       </style>
   </head>
   <body class="other-page">
   	<header>
   		<h1>Vous êtes dans le dossier' $TITLE' </h1>
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
		echo '<a href="'image/$REPLY'"><img src="miniature/'$REPLY'-thumb.jpg" alt="" data-jslghtbx="image/'$REPLY'" data-jslghtbx-group="mygroup1" ></a>' >> $pagehtml
		echo '<input type="checkbox" name="photo_coche[]" value="'$REPLY'">' >> $pagehtml
		echo '</div>' >> $pagehtml
	fi
done

#pied de page html
echo '  </div>
	</form>

<script src="/Lightbox/js/lightbox.js" type="text/javascript"></script>
<script>
    var lightbox = new Lightbox();
    lightbox.load({
        boxId: false,
        dimensions: true,
        captions: true,
        prevImg: false,
        nextImg: false,
        hideCloseBtn: false,
        closeOnClick: true,
        loadingAnimation: 200,
        animElCount: 4,
        preload: true,
        carousel: true,
        animation: 400,
        nextOnClick: true,
        responsive: true,
        maxImgSize: 0.8,
        // callbacks
        onopen: function (image) {
            // your code goes here
            console.log("onopen", image)
        },
        onclose: function (image) {
            // your code goes here
            console.log("onclose", image)
        },
        onload: function (event) {
            // your code goes here
            console.log("onload", event)
        },
        onresize: function (image) {
            // your code goes here
            console.log("onresize", image)
        },
        onloaderror: function (event) {
            // your code goes here
            console.log("onloaderror", event)
            // just display next or prev picture on error
            if (event._happenedWhile === "prev")
                lightbox.prev()
            else
                lightbox.next()
        },
        onimageclick: function (image) {
            // your code goes here
            console.log("Image clicked!", image)
        }
    });
</script>

	<?php 
        // Le tableau $_POST[photo_coche] contient les valeurs des checkbox cochées
        $nom_dossier=$_POST['nomdossier'];
        if($nom_dossier != "")
	{
		echo "<h2>les photos ont été copiées dans le dossier : $nom_dossier</h2>";
        	mkdir("/home/tapage-sous-les-pommiers/public_html/recuperation/$nom_dossier", 0777);
        	foreach($_POST['photo_coche'] as $valeur)
                	{               
                        	$sourcefile="image/$valeur";
                        	$destfile="/home/tapage-sous-les-pommiers/public_html/recuperation/$nom_dossier/$valeur";
                        	copy($sourcefile, $destfile);
				if (file_exists("/home/tapage-sous-les-pommiers/public_html/recuperation/$nom_dossier/$valeur")) {
					echo "La photo $valeur a bien été copiée";
				}
				else {
					echo "la photo $valeur n a pas été copiée";
				}
                	}
	}
	else
	{
		die();
	}				
	?>	
</body>
</html>' >> $pagehtml
