<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>Edition 2018</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css" />
    <style type="text/css">a img { border:0; }</style>
  </head>

  <body class="other-page">
    <header><h1>Edition 2018</h1></header>
    <?php
    // Lit le fichier de menu dans un tableau.
    $lines = file('menu.txt');

    // lit les lignes du tableaucd
    foreach ($lines as $line_num => $line) {
        echo $line;
    }
    ?>

    <div class="paragraphe-texte">
    <!--<p>Cette année s'annonce riche, vos humbles serviteurs y mettent tout leur coeur !
        </br>Notre crédo reste identique, un lieu, une date, à manger, à boire et de quoi ravir vos oreilles...
      </p>
      <p>Mais c'est aussi VOUS qui faîtes l'âme du festival. Notre objectif est de faire de Tapage un festival participatif, où tout un chacun peut ramener ses idées, ses projets et trouver un cadre pour les mettre en place.
      </br>N'hésitez pas à nous faire part de vos envies et nous trouveras un moyen de les mettre en oeuvre !
    </p>-->

        <div align="center"><b>Pour réserver votre place, adhérez à l'association sur Hello Asso.</b></div>
        <a href="https://www.helloasso.com/associations/tapage-sous-les-pommiers/adhesions/adhesion-tapage-sous-les-pommiers-2018"><h3><font color="#19c589">=> C'est par ici <=</font></h3></a></br>
    </div>

    <div class="programme">
      <h3> Programme de l'édition 2018</h3>
        <table>
          <tr>
            <td class="jour">Vendredi Soir :</td>
            <td>Scène ouverte à partir de 20h, amenez vos instruments !</td>
          </tr>
          <tr>
            <td class="jour">Samedi :</td>
            <td>Baptiste et sa carriole de jeu </br>
            Escape Game mystère</br>
            La tente à palabre</br>
            La Cacaravane</td>
          </tr>
          <tr>
            <td class="jour">Samedi Soir :</td>
            <td>
              <!-- <div class="tooltip">
                <span class="tooltip-content">
                  <h3>Swinging Poules</h3>
                  jazz Manouche
                </span>
                Swinging Poules
              </div> -->
              <div class="tooltip">
                <figure>
                  <img src="./static/tiger-rags.jpg">
                  <figcaption>Tiger Rags</figcaption>
                </figure>
                <span class="tooltip-content">
                  <h3>Tiger Rags</h3>
                  La fanfare (coups de griffes swing et mélodies pates de velours) débarque de la capitale pour vous faire virevolter.
                </br><a href="https://www.youtube.com/watch?v=WLsPOQUSEVw" target="_blank">YouTube</a>
                </span>
              </div>
              <div class="tooltip">
                <figure>
                  <img src="./static/eds_image.jpg">
                  <figcaption>Epaule de singe</figcaption>
                </figure>
                <span class="tooltip-content">
                  <h3>Epaule de Singe</h3>
                  Ils se définissent comme l'enfant dans le dos de l'acid techno et de la chanson française.
                </br><a href="https://epauledesinge.bandcamp.com/releases" target="_blank">BandCamp</a>
                </span>
              </div>
              <div class="tooltip">
                <figure>
                  <img src="./static/organic_frqz_image.jpg">
                  <figcaption>Organic Frequencies</figcaption>
                </figure>
                <span class="tooltip-content">
                  <h3>Organic Frequencies</h3>
                  Techno / Dub Techno
                </br><a href="https://soundcloud.com/organic_frqz" target="_blank">SoundCloud</a>
                </span>
              </div>
              <div class="tooltip">
                <figure>
                  <img src="./static/tekologic_image.png">
                  <figcaption>Tekologic</figcaption>
                </figure>
                <span class="tooltip-content">
                  <h3>Tekologic</h3>
                  Electro Break Swing Engagé
                </br><a href="https://soundcloud.com/tekologik" target="_blank">SoundCloud</a>
                </span>
              </div>
            </td>
          </tr>

        </table>
    </div>