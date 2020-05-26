<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body>

    <div id="barreverte"></div><!--Barre Verte en haut de page-->
    <div id="header">

      <div id="topheader"><!--Logo + liens-->
        <a href="index.php" class="logo">The Modernist</a>
        <div class="header-right">
          <a href="index.php">HOME</a>
          <a href="liens.php">STYLE DEMO</a>
          <a href="liens.php">FULL WIDTH</a>
          <a href="liens.php">PORTFOLIO</a>
          <a href="liens.php">GALLERY</a>
        </div><!--FIN header-right-->
      </div><!--FIN topheader-->

      <div id="belowheader"><!--div contenant le carousel-->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"><!--carousel de 3 pages-->
          <div class="carousel-inner">

            <div class="carousel-item active"><!--page 1 carousel-->
              <div class="incarousel"><!--Contenue du carousel(h1,p,a,img)-->
                <div class="leftincarousel"><!--contenue gauche carousel(h1,p,a)-->
                  <h1>The one</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet ultrices eros. Nullam lobortis nibh diam, vitae maximus elit iaculis id. Pellentesque non mollis nulla. Quisque sit amet vehicula eros. Integer dictum laoreet ex at consequat. Sed tincidunt consectetur odio ut congue.</p>
                  <a href="#" class="readmorecar">Read More Here</a>
                </div><!--FIN leftincarousel-->
                <div class="rightincarousel"><!--contenue droit carousel(img)-->
                  <img src="img/1.jpg" class="d-block w-100" alt=".">
                </div><!--FIN rightincarousel-->
              </div><!--FIN incarousel-->
            </div><!--FIN carousel-item active (page 1)-->

            <div class="carousel-item"><!--page 2 carousel-->
              <div class="incarousel">
                <div class="leftincarousel">
                  <h1>C'est bon les fruits</h1>
                  <p>Nullam lobortis nibh diam, vitae maximus elit iaculis id. Pellentesque non mollis nulla. Quisque sit amet vehicula eros. Integer dictum laoreet ex at consequat. Sed tincidunt consectetur odio ut congue. Proin quis purus id diam sodales efficitur. Etiam aliquam suscipit semper.</p>
                  <a href="#">Read More Here</a>
                </div><!--FIN leftincarousel-->
                <div class="rightincarousel">
                  <img src="img/fruit.jpg" class="d-block w-100" alt=".">
                </div><!--FIN rightincarousel-->
              </div><!--FIN incarousel-->
            </div><!--FIN carousel-item (page 2)-->

            <div class="carousel-item"><!-- Carousel page 3 -->
              <div class="incarousel">
                <div class="leftincarousel">
                  <h1>Une troisieme page</h1>
                  <p>Pellentesque non mollis nulla. Quisque sit amet vehicula eros. Integer dictum laoreet ex at consequat. Sed tincidunt consectetur odio ut congue. Proin quis purus id diam sodales efficitur. Etiam aliquam suscipit semper. Mauris molestie interdum est, ac pharetra ex tincidunt commodo.</p>
                  <a href="#">Read More Here</a>
                </div><!--FIN leftincarousel-->
                <div class="rightincarousel">
                  <img src="img/3.jpg" class="d-block w-100" alt=".">
                </div><!--FIN rightincarousel-->
              </div><!--FIN incarousel-->
            </div><!--FIN carousel-item (page 3)-->

            </div>
          </div>
          <!--Pages Suiv. & Prec.-->
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div><!--FIN belowheader-->

      </div> <!--FIN header-->
