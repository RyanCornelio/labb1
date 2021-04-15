<?php
/*Kalla på header*/
get_header();
?>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="index.html">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						
					<?php dynamic_sidebar('search'); ?>
						
						<!-- <form id="searchform" class="searchform">
							<div>
								<label class="screen-reader-text">Sök efter:</label>
								<input type="text" />
								<input type="submit" value="Sök" />
							</div>
						</form> -->
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							<li class="current-menu-item">
								<a href="index.html">Hem</a>
							</li>
							<li>
								<a href="blogg.html">Blogg</a>
							</li>
							<li>
								<a href="undersida.html">Undersida</a>
							</li>
							<li>
								<a href="undersida2.html">Undersida 2</a>
							</li>
							<li>
								<a href="undersida3.html">Undersida 3</a>
							</li>
							<li>
								<a href="undersida4.html">Undersida 4</a>
							</li>
							<li>
								<a href="kontakt.html">Kontakt</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
<?php
while ( have_posts()) {
	the_post();
?>
	<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								
								<?php echo '<hr>'; 
 								the_post_thumbnail();
								?>
								<div class="text">
									<h1>
									<?php
									the_title();
									?></h1>
									<p>
									<?php
									the_content();
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
	</main>
<?php	
}
?>

<?php
/*Kalla på footer*/
get_footer();
?>