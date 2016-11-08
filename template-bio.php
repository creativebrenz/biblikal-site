<?php
/*
Template Name: Bio
*/
?>

<?php get_header(); ?>
			
	<div id="content" class="bio-page">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="medium-6 medium-offset-6 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

					    <section class="entry-content" itemprop="articleBody">
						    <?php the_content(); ?>
						    <?php //wp_link_pages(); ?>
						</section> <!-- end article section -->
											
						<footer class="article-footer">
							
						</footer> <!-- end article footer -->
											    
						<?php //comments_template(); ?>
										
					</article> <!-- end article -->
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
