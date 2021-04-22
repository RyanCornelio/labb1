<?php
get_header();
// Kalla på header.
?>

<body>
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
// Kalla på footer
get_footer();
?>