<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123989485-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-123989485-1');
  </script>


  <title>hello</title>
  <!--Style sheets-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css">


  <!--GoogleFonts-->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark:400,700" rel="stylesheet">

</head>

<body>
  <header>

    <!---Navigation Start--->

    <nav class="navbar">

      <!---Mobile Hamburger--->
      <div class="other">
        <a href="#menu" id="toggle"><span></span></a>
        <div id="menu">
          <ul>
            <li id="links"><a href="index">Home</a></li>
            <li id="links"><a href="portfolio">Portfolio</a></li>

          </ul>
        </div>
      </div>

      <!--- Main Nav --->
      <div class="largeNav">
        <ul>
          <li><a href="index">Home</a></li>
          <li><a href="portfolio">Portfolio</a></li>
          
        </ul>
      </div>


      <!--Social Media Links-->
      <div class="allSoc">
        <ul>
          <li class="socMedia"><a href="https://codepen.io/idesovmarch/"><span class="fab fa-codepen" style="color: tomato;"></span></a></li>
          <li class="socMedia"><a href="http://idesovmarch.tumblr.com"><span class="fab fa-tumblr-square fa-lg" style="color: tomato;"></span></a></li>
          <li class="socMedia"><a href="http://www.linkedin.com/in/idesovmarch"><span class="fab fa-linkedin-in fa-lg" style="color: tomato;"></span></a></li>
          <li class="socMedia"><a href="http://www.behance.net/idesovmarch"><span class="fab fa-behance fa-lg" style="color: tomato;"></span></a></li>
          <li class="socMedia"><a href="http://www.instagram.com/idesovmarch"><span class="fab fa-instagram fa-lg" style="color: tomato;"></span></a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!---Start Main Body------->
  <div class="banner">


    <div class="subBody">
      <h1 id="hello">Portfolio</h1>
    </div>

    <div class="portfolio">
      <h2 id="picTitle"> Logo Design </h2>
      <a href="https://www.behance.net/collection/169798367/logo-design">
  <img id="moonborn" src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/73e9e768807597.5b6a123067405.jpg">
</a>
      <h2 id="picTitle"> Print Design </h2>
      <a href="https://www.behance.net/collection/169798329/Print">
  <img id="moonborn" src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/1537a068807631.5b6a129a7abf0.jpg">
</a>
    </div>

  </div>



  <footer>
  </footer>

  <!--Javascript-->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"></script>
  <script src="scripts/index.js"></script>
</body>

</html>
