<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Liens Utiles</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="stylesheet.css" />
        <style type="text/css">
       <a img { border:0; }/>
       </style>
   </head>
   <body class="other-page">
        <header>
                <p> <h1>Annuaire de liens</h1> </p>
        </header>

        <?php
        // Lit le fichier de menu dans un tableau.
        $lines = file('menu.txt');

        // lit les lignes du tableaucd
        foreach ($lines as $line_num => $line) {
            echo $line;
        }
        ?>

        <div class="paragraphe-texte">
          <form action="" method="post">
            <?php
            // on complète le fichier liste_liens.csv en cas de submit
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
                  }

            echo '<div class="tableau-liens">';
            echo '<table>';
            echo '<tr class="ligne1">
			         <th>Categorie</th>
			            <th>Description</th>
			               <th>Lien</th>
		                   </tr>';

            $fichier = fopen("liste_lien.csv", "r");
            $i=0;

            while(($buffer = fgets($fichier, 4096)) !== false) {
	             $i += 1;
	             ${'data'.$i} = str_getcsv($buffer, ";");
             }

            $organisation = 0;
            $reseau = 0;
            $musique = 0;
            $autre = 0;

            for($j=1; $j<=$i; $j++) {
	             if(${'data'.$j}[0] == "Organisation") {
		               $organisation += 1;
	                }
	             elseif(${'data'.$j}[0] == "Réseaux sociaux") {
		           $reseau += 1;
	                }
	             elseif(${'data'.$j}[0] == "Musique") {
		           $musique += 1;
	                }
	             elseif(${'data'.$j}[0] == "Autre") {
		           $autre += 1;
	                }
                }
/* echo $organisation;
echo $musique;
echo $reseau;
echo $autre;
print_r($data1);
print_r($data2);
print_r($data3);
print_r($data4);
print_r($data5);
print_r($data6);
print $i; */
            $flag_organisation = 1;
            $flag_reseau = 1;
            $flag_musique = 1;
            $flag_autre = 1;

            for($j=1; $j<=$i; $j++) {
	             if(${'data'.$j}[0] == "Organisation") {
		               echo '<tr class="ligne0">';
	                 if($flag_organisation == 1) {
		                    echo '<td class="colonne_gauche" rowspan="'.$organisation.'">Organisation</td>';
		                    $flag_organisation = 0;
	                   }
		               echo '<td>'.${'data'.$j}[1].'</td>';
		               echo '<td><a href="'.${'data'.$j}[2].'" target=_blank>'.(parse_url(${'data'.$j}[2], PHP_URL_HOST)).'</a></td>';
		               echo '</tr>';
	                }
                }

            for($j=1; $j<=$i; $j++) {
	             if(${'data'.$j}[0] == "Réseaux sociaux") {
		               echo '<tr class="ligne3">';
		               if($flag_reseau == 1) {
			                  echo '<td class="colonne_gauche" rowspan="'.$reseau.'">Réseaux sociaux</td>';
			                  $flag_reseau = 0;
		                    }
		               echo '<td>'.${'data'.$j}[1].'</td>';
		               echo '<td><a href="'.${'data'.$j}[2].'" target=_blank>'.(parse_url(${'data'.$j}[2], PHP_URL_HOST)).'</a></td>';
                   echo '</tr>';
	                 }
                }

            for($j=1; $j<=$i; $j++) {
	             if(${'data'.$j}[0] == "Musique") {
		               echo '<tr class="ligne0">';
		               if($flag_musique == 1) {
			                  echo '<td class="colonne_gauche" rowspan="'.$musique.'">Musique</td>';
			                  $flag_musique = 0;
		                    }
		               echo '<td>'.${'data'.$j}[1].'</td>';
		               echo '<td><a href="'.${'data'.$j}[2].'" target=_blank>'.(parse_url(${'data'.$j}[2], PHP_URL_HOST)).'</a></td>';
		               echo '</tr>';
	                }
                }
            for($j=1; $j<=$i; $j++) {
	             if(${'data'.$j}[0] == "Autre") {
		           echo '<tr class="ligne3">';
		             if($flag_autre == 1) {
			                echo '<td class="colonne_gauche" rowspan="'.$autre.'">Autre</td>';
			                $flag_autre = 0;
		                  }
		             echo '<td>'.${'data'.$j}[1].'</td>';
                 echo '<td><a href="'.${'data'.$j}[2].'" target=_blank>'.(parse_url(${'data'.$j}[2], PHP_URL_HOST)).'</a></td>';
		             echo '</tr>';
	               }
               }

            fclose($fichier);
            echo '</table>';
//echo '</div>';


?>
			<table>
			<tr class="separation">
				<td class="colonne_gauche" colspan="3" align="center">Rajouter un lien</td>
			</tr>

			<tr class="ligne0">
				<td align="center"><select name="categorie" placeholder="inscrivez ici dans quelle catégorie sera le lien">
					<option>Organisation</option>
					<option>Réseaux sociaux</option>
					<option>Musique</option>
					<option>Autre</option></select>
				</td>
				<td align="center"><input type="text" name="description" placeholder="inscrivez ici la description du lien"></td>
				<td align="center"><input type="url" name="url" placeholder="inscrivez ici le lien"></td>
			</tr>
			<tr class="ligne1">
				<td class="colonne_gauche" colspan="3" align="center"><input type="submit" value="Ajouter le lien"></td>
			</tr>
			</table>
			</div>
		</form>
  </div>

</body>
</html>