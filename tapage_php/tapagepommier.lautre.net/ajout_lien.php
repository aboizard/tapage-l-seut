<?php
$fichier = "liste_lien.csv";

if(empty($_POST['categorie'])) {
	echo 'Veuillez renseigner une catégorie pour le lien';
	}
elseif(empty($_POST['description'])) {
	echo 'Veuillez indiquer une description pour le lien';
}
elseif(empty($_POST['url'])) {
	echo 'Veuillez renseigner une url';
}
else {
	$fichier_contenu = $_POST[categorie].';'.$_POST[description].';'.$_POST[url]."\n";
	file_put_contents($fichier, $fichier_contenu, FILE_APPEND);
        exit();
}
?>