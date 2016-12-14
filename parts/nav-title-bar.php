<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "medium"; ?>

<div class="title-bar" data-responsive-toggle="top-bar-menu" data-hide-for="<?php echo $breakpoint ?>">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title"><?php _e( 'Menu', 'jointswp' ); ?></div>
</div>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left">
    <?php joints_top_nav(); ?>
	</div>
	<div class="top-bar-right">
    <ul id="social-header" class="menu simple hide-for-small-only">
      <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xfacebook.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xinstagram.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xtwitter.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/xyoutube.png" alt=""></a></li>
    </ul>
	</div>
</div>
