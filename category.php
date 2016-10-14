<?php
// Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>
// Get theme settings
include (TEMPLATEPATH . "/includes/settings.php");
get_header(); 
?>

<?php
switch ($pts_categorylayout) {
	case "Category Right":
        get_template_part('includes/categoryright','index');
		break;
	case "Category Left":
        get_template_part('includes/categoryleft','index');
		break;
	case "Category Inset Right":
        get_template_part('includes/categoryinsetright','index');
		break;
}
?>

<?php get_footer(); ?>