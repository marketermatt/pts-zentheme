<?php // Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html> ?>
<div id="bottomwidgets" class="clearfix">
  <div class="w960"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom Widgets')) : ?>
  <div class="three"><h4><?php _e('Theme Features', 'pts'); ?></h4>			<div class="textwidget"><?php _e('Welcome to the Zen Theme which is best used for personal blogging. Here is a list of some of the special features you will be able to take advantage of when customizing your website and blog:', 'pts'); ?> <ul>
	<li><?php _e('Theme Control panel', 'pts'); ?></li>
	<li><?php _e('Customize colours, layout, buttons, and more', 'pts'); ?></li>
	<li><?php _e('Dynamic widgets with varied widths', 'pts'); ?></li>
	<li><?php _e('Up to 8 Widget Positions', 'pts'); ?></li>
	<li><?php _e('Built-in Social Networking', 'pts'); ?></li>
    <li><?php _e('Google Fonts for Headings and site title', 'pts'); ?></li>
	<li><?php _e('and a lot more...', 'pts'); ?></li>
</ul></div>
		</div><div class="three"><h4><?php _e('Relax With Herbal Teas', 'pts'); ?></h4><div class="textwidget"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/zen-cups.jpg" class="aligncenter shadow288"><p><?php _e('When enjoying your moment of zen, it\'s best to enjoy fresh herbal teas for relaxation. Of course, choosing the right zen teas requires the expertise of asian herbalists.', 'pts'); ?></p></div>

		</div><div class="three"><h4><?php _e( 'Recent Posts', 'pts' ); ?></h4>			<div class="textwidget"><?php _e('Check out the recent articles posted here at Zen and keep up to date with the latest news and information about having a zen lifestyle.', 'pts'); ?>
<ul>
<?php query_posts('category_id=1&showposts=5');?>
<?php $posts = get_posts('category=#&numberposts=#&offset=0');
	foreach ($posts as $post) : setup_postdata( $post ); ?>
<li><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?></ul></div>
		</div><div class="clearfix"></div>
  <?php endif; ?><div  class="clearfix"></div></div>
</div>