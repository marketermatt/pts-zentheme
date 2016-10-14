<?php // Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html> ?>

<div id="mainbody-r">
     <?php get_template_part( 'loop', 'index' ); ?>
    </div>
    
<div id="right">
	<div id="rightt">
		<div id="rightb">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Right Column')) : ?>
        <div class="widget"><h3><?php _e('Right Column Widgets', 'pts'); ?></h3><div class="textwidget"><?php _e('As it is with any website or blog, you have the choice of adding any kind of widgets to the sidebars. There are many to choose from the WordPress website, like:', 'pts'); ?> <ul>
	<li><?php _e('Social Networking Widgets', 'pts'); ?></li>
	<li><?php _e('Media based widgets', 'pts'); ?></li>
	<li><?php _e('Widgets with thumbnails for Recent Posts, Popular, and more...', 'pts'); ?></li>
</ul></div></div>
        <?php endif; ?>
		</div>
	</div>
</div>