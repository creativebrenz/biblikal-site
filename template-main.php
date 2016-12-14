<?php
/*
Template Name: Main (Full-Width)
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div class="expanded row" style="background-color:#000;">

		    <main id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

					  <section class="entry-content" itemprop="articleBody">
						    <?php the_content(); ?>
						    <?php //wp_link_pages(); ?>
						</section> <!-- end article section -->

					</article> <!-- end article -->

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
