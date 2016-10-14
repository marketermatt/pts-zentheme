<?php
// Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>
// Get theme settings
include (get_template_directory() . "/includes/settings.php");
get_header(); 
?>

<div id="mainbody">
		<?php get_template_part( 'page-content' ); ?>
</div>

<?php get_footer(); ?>