<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
			
	<div id="content" class="contact-page">
	
		<div id="inner-content" class="row">
			<div class="logos medium-4 columns">
				<article>
					<img src="<?php echo IMG; ?>/logos/10198-logo.jpg" alt="">
				</article>
				<article>
					<img src="<?php echo IMG; ?>/logos/tclondon.jpg" alt="">
				</article>
				<article>
					<img src="<?php echo IMG; ?>/logos/e-gangs.jpg" alt="">
				</article>
				<article>
					<img src="<?php echo IMG; ?>/logos/riddimsbanner.png" alt="">
				</article>
				<article>
					<img src="<?php echo IMG; ?>/logos/fbc.png" alt="">
				</article>
				
			</div>
	
		    <main id="main" class="medium-4 columns" role="main">
				
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
