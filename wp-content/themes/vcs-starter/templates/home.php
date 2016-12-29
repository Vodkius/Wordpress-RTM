<?php

/* Template Name: Home */

get_header();

?>

<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">RTM</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Requirements</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 

// The number of all posts for a given query
$posts_found = $GLOBALS['wp_query']->found_posts;
// The number of posts for just the page
$posts_count = $GLOBALS['wp_query']->post_count;

if(have_posts()): ?>

	<?php while (have_posts()) : the_post(); ?>

    <!-- Intro Section -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <section id="intro" class="intro-section video-container">
        <div class="homepage-hero-module">
    <div class="video-container">
        <div class="title-container">
            <div class="headline">
                	<h1><?php the_title(); ?></h1>
            </div>
            <div class="description">
                <div class="inner"><?php the_content(); ?></div>
                    <div class="inner pure-menu pure-menu-horizontal">
                        <ul class="pure-menu-list">
                            <li class="pure-menu-item"><a href="http://localhost/" class="pure-menu-link" style="color: yellow;"> Login</a></li>
                            <li class="pure-menu-item"><a href="http://localhost/index.php?action=register" class="pure-menu-link" style="color: yellow;"> Sign Up</a></li>
                        </ul>
                    </div>
                </div>
        </div>
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="runescape.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.</video>
    </div>
            
	<?php endwhile; ?>

<?php endif; ?>

</div>
    </section>
    <!-- About Section -->


<?php

/* Template Name: REQUIREMENTS! */

get_header();

?>

<?php 

// The number of all posts for a given query
$posts_found = $GLOBALS['wp_query']->found_posts;
// The number of posts for just the page
$posts_count = $GLOBALS['wp_query']->post_count;

if(have_posts()): ?>

	<?php while (have_posts()) : the_post(); ?>

    <section id="about" class="about-section">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
        	<div id="skills">
		<div class="container">
			<div class="row centered">
				<h3>REQUIREMENTS</h3>
				<div class="col-lg-3 mt">
					<canvas id="javascript" height="130" width="130"></canvas>
					<p>2200 Total</p>
					<br>
					<script>
						var doughnutData = [
								{
									value: 70,
									color:"#74cfae"
								},
								{
									value : 30,
									color : "#3c3c3c"
								}
							];
							var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
					</script>
				</div>
				<div class="col-lg-3 mt">
					<canvas id="bootstrap" height="130" width="130"></canvas>
					<p>Active</p>
					<br>
					<script>
						var doughnutData = [
								{
									value: 90,
									color:"#74cfae"
								},
								{
									value : 10,
									color : "#3c3c3c"
								}
							];
							var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
					</script>
				</div>
				<div class="col-lg-3 mt">
					<canvas id="wordpress" height="130" width="130"></canvas>
					<p>Teamspeak</p>
					<br>
					<script>
						var doughnutData = [
								{
									value: 65,
									color:"#74cfae"
								},
								{
									value : 35,
									color : "#3c3c3c"
								}
							];
							var myDoughnut = new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(doughnutData);
					</script>
				</div>
				<div class="col-lg-3 mt">
					<canvas id="photoshop" height="130" width="130"></canvas>
					<p>Friendly</p>
					<br>
					<script>
						var doughnutData = [
								{
									value: 50,
									color:"#74cfae"
								},
								{
									value : 50,
									color : "#3c3c3c"
								}
							];
							var myDoughnut = new Chart(document.getElementById("photoshop").getContext("2d")).Doughnut(doughnutData);
					</script>
				</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /skills -->
	
<?php endwhile; ?>

<?php endif; ?>
        
	<section id="contact"></section>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>

    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
                        
	<!-- Menu -->

	
	<!-- SOCIAL FOOTER --->
	<section id="contact"></section>
	<div id="sf">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 dg">
					<h4 class="ml">FACEBOOK</h4>
					<p class="centered"><a href="#"><i class="fa fa-facebook"></i></a></p>
					<p class="ml">> Become A Friend</p>
				</div>
				<div class="col-lg-4 lg">
					<h4 class="ml">TWITTER</h4>
					<p class="centered"><a href="#"><i class="fa fa-twitter"></i></a></p>
					<p class="ml">> Follow Us</p>
				</div>
				<div class="col-lg-4 dg">
					<h4 class="ml">GOOGLE +</h4>
					<p class="centered"><a href="#"><i class="fa fa-google-plus"></i></a></p>
					<p class="ml">> Add Us To Your Circle</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Social Footer -->
	
	<!-- CONTACT FOOTER --->
	<div id="cf">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
		        	<div id="mapwrap">
						<iframe height="400" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=54.6871697,25.2708032&amp;spn=67.34552,156.972656&amp;z=6&amp;output=embed"></iframe>
					</div>	
				</div><!--col-lg-8-->
				<div class="col-lg-4">
					<h4>ADDRESS<br/>Vilnius - Lithuania</h4>
					<br>
					<p>
						World 63<br/>
						Pridif, Center
					</p>
					<p>
						DO RSMN: Katine, Epicas, Vytautas45, Renatas<br/>
						OP RSMN: - Tadas<br/>
						E: <a href="mailto:#">rtm@runescape.com</a>
					</p>
					<p>Lithuania is at a crossroad between west and east Europe, and throughout its complicated history has developed a unique culture</p>
				</div><!--col-lg-4-->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Contact Footer -->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
		new AnimOnScroll( document.getElementById( 'grid' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		} );
	</script>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>