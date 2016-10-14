<?php
// Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>

// Get theme settings
include (TEMPLATEPATH . "/includes/settings.php");
get_header(); 
?>

<?php
switch ($pts_archivelayout) {
    case "Archive Right":
        get_template_part('includes/authorright','index');
        break;
    case "Archive Left":
        get_template_part('includes/authorleft','index');
        break;
    case "Archive Inset Right":
        get_template_part('includes/authorinsetright','index');
        break;
}
?>

<?php get_footer(); ?>