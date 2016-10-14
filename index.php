<?php
// Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>
// Get theme settings
include (TEMPLATEPATH . "/includes/settings.php");
get_header(); 
?>
  
<?php
switch ($pts_bloglayout) {
	case "Blog Right":
        get_template_part('includes/blogright','index');
		break;
	case "Blog Left":
        get_template_part('includes/blogleft','index');
		break;
	case "Blog Inset Right":
        get_template_part('includes/bloginsetright','index');
		break;
}
?>
<?php get_footer(); ?>