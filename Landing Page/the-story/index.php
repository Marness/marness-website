<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <title>Marness | Tell your kids awesome stories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tell your kids awesome stories">
    <meta name="keywords" content="kids, videos, learning, entertainment, stories, values, educate, education, engage"
    <meta name="author" content="marness">

    <!-- Le styles -->
      <link href="assets/less/style.min.css" rel="stylesheet"> 

    <!--Import Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <!-- Le fav  -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
    if (typeof jQuery == 'undefined') {
      document.write(unescape("%3Cscript src='assets/js/jquery-1.9.1.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
    </script>


    <!--Has to be in head, to lazy load images.
    Minimize in production. -->

    <script src="assets/js/lazyload.js"></script>
    <script src="assets/js/jRespond.js"></script>
    <script src="assets/js/spin.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Main js fail. -->
    <script src="assets/js/main.js"></script>

  </head>

  <body id="top" data-spy="scroll" data-target=".navbar">

       <!-- Brand and Navigation -->
      <header class="navbar navbar-fixed-top">
        <div class="inner-page">
          <h1 class="logo">
          	<img class="lazy" alt="Marness" src="assets/img/pixel.png" data-original="assets/img/logo-blanco-web2.png"/>
		  </h1>
          <a class="btn-nav" data-toggle="collapse" data-target=".nav-collapse">
            <i class="icon-reorder"></i>
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav navigation" id="menu">
              <li class="active"><a title="Home page" class="scroll brand-1" href="#home">Home</a></li>
              <li><a title="Check out our awesome services" href="#features" class=" scroll brand-4">Producs</a></li>
              <!--
              <li><a title="Themes assets" href="#assets" class="scroll brand-3">Assets</a></li>
              <li><a title="Who we are" href="#about" class="scroll fadeto brand-4"> About us</a></li>
              -->
              <li><a title="Get in touch!" href="#contact" class="scroll brand-2">Contact</a></li>
            </ul>
          </div> 
        </div> 
      </header>
      
      <!-- Home Page -->
      <div id="home" class="page color-1">
        <div class="inner-page">
          <h2 class="page-headline large">Tell your kids awesome stories</h2>
        </div>  
        <div class="row-fluid inner-page">
          <!--<div class="span8 pull-right lazy-container">
          <br/>-->
			<iframe width="560" height="315" align="middle" src="https://www.youtube.com/embed/txxcfBA_RRI?list=PLjUk78Bu1AaL4KPP56nWmzzBNdmOtQPLZ" frameborder="0" allowfullscreen></iframe>
            <!--<img class="lazy" alt="Looks great on every device" src="assets/img/pixel.png" data-original="assets/img/logo-blanco.png"/>-->
          <!--</div>-->
          <div class="span4 pull-left">
            <ul class="big-list">
              <li><i class="icon-tablet"></i> Entertain</li>
              <li><i class="icon-ok"></i> Educate</li>
              <li><i class="icon-heart"></i> Values</li>
              <li><i class="icon-cog"></i> Engage</li>
            </ul>
            <br />
            <a href="#features" title="Check out more freatures!" class="scroll btn btn-centered"><i class="icon-caret-down"></i> Learn more</a>
          </div>
        </div>
      </div>

      <!-- Sign up -->
      <div class="sign-up color-2 visible-desktop">
        <div class="row-fluid inner-page">
          <div class="span12">
            <h4 class="pull-left"></h4>
            <a href="#features" class="scroll btn pull-right" title="Check out more freatures!"><i class="icon-caret-down"></i> Scroll down</a>
          </div>
        </div>
      </div>

      <!-- Features -->
      <div id="features" class="page color-4">
        <div class="inner-page">
          <h2 class="page-headline">Entertain and Educate with Values</h2>
        </div>

        <div class="inner-page row-fluid">
          <ul class="features list-inline">
            <li>
              <h3><i class="icon-tablet"></i> Entertainment </h3>
              <p>Nowadays, technology is at the fingertips of every kids, that's why we love entertaining them on every screen.<br/><br/></p>
            </li>
            <li>
              <h3><i class="icon-ok"></i> Education </h3>
              <p>Since childhood is the when our kids learn the most, education should be present in any form of entertainment for them.</p>
            </li>
            <li>
              <h3><i class="icon-heart"></i> Values</h3>
              <p>Good values are the cornerstone of our society. Keeping and transferring them to future generations is key.<br/><br/></p>
            </li>
            </ul>
        </div>
        <div class="row-fluid inner-page">
          <div class="span6 lazy-container">
            <img class="figurette lazy" src="assets/img/pixel.png" data-original="assets/img/multiscreen.jpg" alt="Multi Platform" />
          </div>
          <div class="span6">           
            <h3>Multiplatform</h3>
            <p class="lead">Take the entertainment with you. No matter where you are or the size of your screen.</p>
            <ul class="list-wide">
              <li><i class="icon-check"></i> Web</li>
              <li><i class="icon-check"></i> Mobile</li>
              <li><i class="icon-check"></i> Tablet</li>
              <li><i class="icon-check"></i> TV (soon)</li>
            </ul>         
          </div>
        </div>

        <!--<hr>-->

        <!-- Video -->
        <!--
        <div class="row-fluid inner-page">
          <div class="span6 pull-right">
            <div class="btn-container figurette">
              <img src="assets/img/video.png" alt="Play video" />
               <a class="lightbox iframe btn-play" target="_blank" href="http://vimeo.com/61693087"><i class="icon-play"></i></a>
            </div>
          </div>
          <div class="span6 pull-right">
              <ul class="big-list">
                <li><i class="icon-ok"></i> Always latest bootstrap</li>
                <li><i class="icon-play"></i> Responsive video</li>
                <li><i class="icon-resize-full"></i> Adaptive, smart lightbox</li>
                <li><i class="icon-desktop"></i> All modern browsers supported</li>
              </ul>
            <br />
            <a href="#download" class="scroll btn btn-centered"><i class="icon-plus"></i> Even more features</a>
          </div>
        </div>
      </div>
      -->
      <!-- /Features --> 


       <!-- Assets page -->
      <!--
      <div id="assets" class="page color-3">
          <div class="inner-page">
            <h2 class="page-headline">Page assets</h2>
          </div>
		-->
        <!-- Vectors -->
        <!--
        <div class="row-fluid inner-page">
          <div class="span6 lazy-container">
            <img class="figurette lazy" alt="Original vectors" src="assets/img/pixel.png" data-original="assets/img/responsive-vectors.png"  />
          </div>
          <div class="span6">
            <h3>5 vectors included</h3>
            <p class="lead">Zombie ipsum <abbr title="HyperText Markup Language" class="initialism">HTML</abbr> reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis.</p>
            <p> The voodoo sacerdos flesh eater, suscitat mortuos comedere carnem virus. Zonbi tattered for solum oculi eorum defunctis go lum cerebro.. </p>
          </div>
        </div>
        -->
        <!-- /vectors -->

        <!--<hr>-->

        <!-- Big Laptop -->
        <!--
        <div class="row-fluid inner-page">
          <div class="offset1 span10 lazy-container">
            <div class="btn-container">
              <img class="figurette lazy " src="assets/img/pixel.png" data-original="assets/img/laptop-blue@2x.png" alt="view image in lightbox"  />
              <a href="assets/img/superman.jpg" class="lightbox btn-play" target="_blank">
                <i class="icon-zoom-in"></i></a>
            </div>
          </div>
        </div>
        -->
        
        <!-- Clients -->
        <!--
        <div class="clients color-1">
          <div class="inner-page">
              <h2 class="page-headline">Who's using stories.</h2>
          </div>
          <div class="inner-page row-fluid">
              <ul class="clients list-inline">
                <li><i class="icon-globe"></i> Earth</li>
                <li><i class="icon-heart"></i> Love</li>
                <li><i class="icon-leaf"></i> Leaves</li>
                <li><i class="icon-cloud"></i> Clouds</li>
              </ul>
          </div>
        </div>
      </div>
      -->
      <!-- /Assets page -->

      <!-- About page -->
      <!--
      <div id="about" class="page color-4">
        <div class="inner-page">
          <h2 class="page-headline">Who are we and how it all got started. Our story.</h2>
        </div>
        <div class="row-fluid inner-page">
          <div class="span6  lazy-container">
              <img class="figurette lazy" src="assets/img/pixel.png" data-original="assets/img/green-office.png" alt="Our workspace" />
          </div>
          <div class="span6">
            <h3>Zonbi tattered for solum.</h3>
            <p class="lead">The voodoo sacerdos flesh eater, suscitat mortuos comedere carnem virus. Zonbi tattered for solum oculi eorum defunctis go lum cerebro.</p>
            <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium.</p>
          </div>
        </div>

        <hr>
		-->
        <!-- Team -->
        <!--
        <div class="row-fluid inner-page team">
          <div class="span6">
            <img class="pull-left" src="assets/img/cookies2.png" alt="A cookie" />
            <h4>Jane Doe</h4>
            <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis.</p>
            <ul>
              <li><i class="icon-home"></i> <a href="prettystrap.com">http://prettystrap.com</a></li>
              <li><i class="icon-envelope-alt"></i> <a href="info@email.com">info@email.com</a></li>
              <li class="social">
                <a href="#about"><i class="icon-facebook-sign"></i></a>
                <a href="#about"><i class="icon-twitter"></i></a>
                <a href="#about"><i class="icon-github-sign"></i></a>
              </li>
            </ul>
          </div>
          <div class="span6 team2">
            <img class="pull-left" src="assets/img/cookies.png" alt="A cookie" />
            <h4>John Doe</h4>
            <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis.</p>
            <ul>
              <li><i class="icon-home"></i> <a href="prettystrap.com">http://prettystrap.com</a></li>
              <li><i class="icon-envelope-alt"></i> <a href="info@email.com">info@email.com</a></li>
              <li class="social">
                <a href="#about"><i class="icon-facebook-sign"></i></a>
                <a href="#about"><i class="icon-twitter"></i></a>
                <a href="#about"><i class="icon-github-sign"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
		-->

      <!-- Contact Us -->
      <div id="contact" class="page color-2">
        <div class="inner-page">
          <h2 class="page-headline">Get in touch and stay updated</h2>
        </div>
        <div class="row-fluid inner-page contact">
          <div class="span6">
            <h3>What's on your mind?</h3>
            <!--
            <input type="text" placeholder="Name"><br />
            <input type="text" placeholder="your@mail.com"><br />
            <textarea rows="6" placeholder="Message"></textarea>
            <button class="btn btn-centered">Contact us</button>
            -->
			  <?php
              // display form if user has not clicked submit
              if (!isset($_POST["submit"])) {
                ?>
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <input type="text" placeholder="Name" name="from"><br>
                <input type="email" placeholder="your@mail.com" name="email"><br>
                <textarea rows="6" placeholder="Message" name="message"></textarea><br>
                <input type="submit" name="submit" value="Contact us" class="btn btn-centered" width="2px" height="2px">
                </form>
                <?php 
              } else {    // the user has submitted the form
                // Check if the "from" input field is filled out
                if (isset($_POST["from"])) {
                  $from = $_POST["from"]; // sender name
				  $email = $_POST["email"]; //sender email
                  $subject = $_POST["subject"];
                  $message = $_POST["message"];
                  // message lines should not exceed 70 characters (PHP rule), so wrap it
                  $message = wordwrap($message, 70);
                  // send mail
                  mail("marness@marness.com","Web Message from $from","Name: $from\nMail: $email\n\n $message","From: \"Marness Message\" <web@marness.com>");
                  echo "Thank you for sending us feedback";
                }
              }
              ?>
          </div>

          <div class="span6">
            <div class="btn-container centered text-center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.3796731586913!2d-58.40183689999997!3d-34.5945596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca90eabf5fb5%3A0x55910050ff13da88!2sAv+Santa+Fe+2459%2C+Buenos+Aires%2C+Ciudad+Aut%C3%B3noma+de+Buenos+Aires%2C+Argentina!5e0!3m2!1sen!2s!4v1407002472452" width="600" height="450" frameborder="0" style="border:0"></iframe>
            </div>
          </div>
        </div>
      </div>

      <!-- Newsletter -->
      <div class="newsletter color-1">
        <div class="inner-page row-fluid">
          <div class="span4">
            <h4><strong>Be cool</strong>, subscribe to get our latest news</h4>
          </div>

<form action="//marness.us8.list-manage.com/subscribe/post?u=3bcbb66df90e41cfb12f94a85&amp;id=68135b694a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		          <div class="span6">

	<input type="email" value="" name="EMAIL" class="subscribe" placeholder="your@mail.com" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_3bcbb66df90e41cfb12f94a85_68135b694a" tabindex="-1" value=""></div>
            	  </div>
          	<div class="span2">
<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn pull-right subscribe"></div>

</form>

<!--End mc_embed_signup-->
        </div>
      </div>

      <!-- The footer, social media icons, and copyright -->        
      <footer class="page color-5">
        <div class="inner-page row-fluid">
          <div class="span6 social">
            <a href="#contact"><i class="icon-twitter"></i></a>
            <!--<a href="#contact"><i class="icon-github-sign"></i></a>-->
            <a href="#contact"><i class="icon-facebook-sign"></i></a>
            <a href="#contact"><i class="icon-google-plus-sign"></i></a>
          </div>
          <div class="span6 text-right copyright">
            &copy; 2014 <a  href="http://marness.com"  title="Marness">marness.com</a> | all rights reserved |  <a href="#top"   title="Got to top" class="scroll">To top <i class="icon-caret-up"></i></a>
          </div>
        </div>
      </footer>

  </body>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52491786-1', 'auto');
  ga('send', 'pageview');

</script>
