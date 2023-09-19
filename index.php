<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Laurent Lebarbier - Développeur web</title>
  <meta name="description" content="Laurent Lebarbier - Développeur web.">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jgthms/minireset.css@master/minireset.min.css">
  <link rel="icon" type="image/png" href="medias/fav-icon.png" />


  <meta property="og:title" content="Laurent Lebarbier - Développeur web" />
  <meta property="og:url" content="https://laurentlebarbier.fr" />
  <meta property="og:image" content="medias/vignette-site.png" />
  <meta property="og:description" content="Portfolio de Laurent Lebarbier, Développeur web" />
  <meta property="og:site_name" content="Laurent Lebarbier - Développeur web" />
  <meta property="og:type" content="Porfolio" />
  <meta name="image" property="og:image" content="medias/vignette-site.png" />
  <meta name="author" content="Laurent Lebarbier" />

</head>

<body>
  <main>

    <!-- header pour mobile -->
    <header id="header_mobile">
      <h1>Laurent Lebarbier</h1>
      <a href="index.php"><img src="logos/LLogo.png" alt="logo Laurent Lebarbier"></a>

    </header>

    <!-- header pour pc fixe -->
    <header>
      <div id="div_logo">
        <a href="index.php"><img src="logos/LLogo.png" alt="logo Laurent Lebarbier"></a>
        <h1>Laurent Lebarbier</h1>
        <h2>Développeur web</h2>
        <h2>Front-end</h2>
      </div>

      <div id="nav_et_rs">
        <nav>
          <button id="premier_boutton" class="lien_nav">à propos</button>
          <button id="deuxieme_boutton" class="lien_nav">compétences</button>
          <button id="troisieme_boutton" class="lien_nav">projets</button>
          <button id="dernier_boutton" class="lien_nav">contact</button>
        </nav>

        <div id="div_reseaux_sociaux">
          <a target="_blank" href="https://github.com/Laurent70300"><img src="logos/github.png" alt="logo github"></a>
          <a target="_blank" href="https://www.linkedin.com/in/lebarbier-laurent"><img src="logos/linkedin.png" alt="logo linkedin"></a>
        </div>
      </div>

    </header>

    <section id="section_centrale">

      <div id="accueil">

        <div id="container">
          <div id="para_1">
            <p>à propos</p>
          </div>
          <div id="para_2">
            <p>compétences</p>
          </div>
          <div id="para_3">
            <p>projets</p>
          </div>
          <div id="para_4">
            <p>contact</p>
          </div>
        </div>

        <div class="type-js headline">
          <p id="text_hover1" class="text-js">Bonjour,</p>
        </div>
        <div class="type-js2 headline">
          <p id="text_hover2" class="text-js">je suis Laurent,</p>
        </div>
        <div class="type-js3 headline">
          <p id="text_hover3" class="text-js">Développeur web front end</p>
        </div>


      </div>

    </section>

  </main>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src='script.js'></script>

</body>

</html>