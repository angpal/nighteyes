<?php

/*

Template Name: Custom Home Page

*/
	get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php $homepage = get_post_meta( 27 ); ?>
			
			
			<div class="section1 col-md-12" style="background-color: #f4f4f4">
				<p> <?php echo $homepage[section2][0]; ?> </p>
			</div>
			<p> <?php echo $homepage[section1][0]; ?> </p>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

