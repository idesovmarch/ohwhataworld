<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>hello frnd</title>

  <!--Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- additional CSS -->
  <link rel="stylesheet" href="css/styles.css">



  <!--GoogleFonts-->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">

</head>

<body>
  <header>
    <nav class="navbar navbar-default sticky-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">brdhmmr</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php" style="font-family: 'Roboto', sans-serif;">Home</a></li>
      <li><a href="portfolio.php" style="font-family: 'Roboto', sans-serif;">Zine</a></li>
      <li class="active"><a href="contact.php" style="font-family: 'Roboto', sans-serif;">Contact</a></li>
</ul>
    <ul class="nav navbar-nav ml-auto" style="padding-left: 850px; position: auto;">
          <li><a href="http://idesovmarch.tumblr.com"><span class="fab fa-tumblr-square fa-lg" style="color:Tomato"></span></a><li>
          <li><a href="http://www.instagram.com/idesovmarch"><span class="fab fa-instagram fa-lg" style="color:Tomato"></span></a></li>
          <li><a href="http://www.behance.net/idesovmarch"><span class="fab fa-behance fa-lg" style="color:Tomato"></span></a></li>
        </ul>
      </div>
  </div>
</nav>

  </header>


  <div class="container text-center">
<h3 class="cntctMsg">
  Shoot me a message and I'll get back to you<br>
  It's BYOE (bring your own email) at the moment, apologies
</h3>
</div>
</div>
<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Contact us</legend>

            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>

            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>

</div>




<footer class="container-fluid text-center">
  <p></p>
</footer>



<!--Javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="js/fontawesome-all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/contact.js"></script>

</body>
</html>
