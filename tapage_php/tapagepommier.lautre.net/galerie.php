<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Editions précédentes</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <link rel="stylesheet" href="stylesheet.css" />
        <style type="text/css">
       <a img { border:0; }/>
       </style>
   </head>
   <body class="other-page">
        <header>
                <p> <h1>Editions précédentes</h1> </p>
        </header>

        <?php
        // Lit le fichier de menu dans un tableau.
        $lines = file('menu.txt');

        // lit les lignes du tableaucd
        foreach ($lines as $line_num => $line) {
            echo $line;
        }
        ?>

			<!-- <div class="mode_emploi_galerie"><a href="mode_emploi_galerie.html" >Mode d'emploi de la galerie</a></div>-->

        <div>
          <ul class="menu-galerie">
						<li class="menu-galerie-item"><a href="edition2017.php" >Edition 2017</a></li>
						<li class="menu-galerie-item"><a href="edition2018.php" >Edition 2018</a></li>
        	</ul>
        </div>