<?php
// Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>
// Get theme settings
include (TEMPLATEPATH . "/includes/settings.php");
get_header(); 
?>

<div class="clearfix"></div>
</div>
  <!-- end content columns -->
<div id="bottomtop"></div>
  <div id="bottom">
    <div class="w940"><?php get_template_part('includes/bottomwidgets','index'); ?></div>
  </div>
  <div id="footer">
  	<?php get_template_part('includes/social','index'); ?>
    
    <div class="w940">
    	<?php if ($pts_footermenu<>"Disable") { ?>
			<div id="footermenu"><?php wp_nav_menu( array( 'theme_location' => 'Footer Menu', 'sort_column' => 'menu_order' ) ); ?></div>
        <?php } ?>
	<?php echo $pts_copyright ?></div>
  </div>
</div>
<?php echo $pts_google ?>
<?php wp_footer(); ?>
</body>
</html>
