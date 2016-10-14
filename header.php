<?php // Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html> ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('|',true,'right');?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
<?php // Get theme settings
include (TEMPLATEPATH . "/includes/settings.php");
?>
<!--[if IE 7]>
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 8]>
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie8.css" rel="stylesheet" type="text/css" />
<![endif]-->
<style type="text/css">
<!--
#showcasewrapper {background:#<?php echo $pts_sccolour; ?> <?php if ($pts_scgradient<>"Disable") { ?>url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/<?php echo $pts_scbg; ?>') <?php echo $pts_screpeat; ?> center top<?php } ?>;}
#showcaselines {background:<?php if ($pts_sclines<>"Disable") { ?>transparent url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/sclines.png') repeat; <?php } ?>}
a, a:visited {color:#<?php echo $pts_linkcolour; ?>;}
a:hover {color:#<?php echo $pts_linkhcolour; ?>;}
.nav li a strong {color:#<?php echo $pts_menulink; ?>;}
.nav li a strong:hover {color:#<?php echo $pts_menuhlink; ?>;}
#menu .nav ul li a:hover {color:#<?php echo $pts_subhtext; ?>; background-color: #<?php echo $pts_subbg; ?>;}
.nav li a strong:hover {color:#<?php echo $pts_menuhlink; ?>;}
#menu .nav .current-menu-item a strong, #menu .nav .current-menu-ancestor a strong, #menu .nav li.current-menu-ancestor {color:#<?php echo $pts_menuhlink; ?>;}
#menu .nav li:first-child a strong {color:#<?php echo $pts_menulink; ?>;}
#menu .nav li:first-child a:hover strong {color:#<?php echo $pts_menuhlink; ?>;}
#menu ul.sub-menu li.current_page_item a, #menu ul.sub-menu li.current-menu-parent a {background-color:#<?php echo $pts_subbg; ?>; color:#<?php echo $pts_subhtext; ?>;}
#menu ul.sub-menu li.current-menu-parent li.menu-item a {color:#<?php echo $pts_menulink; ?>;}
#menu .nav ul.sub-menu li.current-menu-parent li.current_page_item a {background-color:#<?php echo $pts_sub2bg; ?>; color:#<?php echo $pts_subhtext; ?>;}
#menu .nav ul.sub-menu a:hover {background-color:#<?php echo $pts_subbg; ?>!important; color:#<?php echo $pts_subhtext; ?>!important;}
#bottom a, #bottom a:visited, #bottom li:hover a {color:#<?php echo $pts_blinks; ?>;}
#bottom a:hover {color:#<?php echo $pts_bhlinks; ?>;}
#bottom li a, #bottom li a:visited {color:#<?php echo $pts_blistlinks; ?>;}
.more-link, .more-link:visited, .button, input[type=submit] {
	<?php if ($pts_buttons<>"Green") { ?>
	background:transparent url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/readmore-grey.png') repeat-x center top;
	<?php } else { ?>
	background:transparent url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/readmore.png') repeat-x center top;
	<?php } ?>
	}
-->
</style>
<script type="text/javascript">
<!--
function search_widget_onLoad() {
	jQuery('#searchsubmit').val('');	
}
 
if (window.attachEvent) {window.attachEvent('onload', search_widget_onLoad);}
else if (window.addEventListener) {window.addEventListener('load', search_widget_onLoad, false);}
else {document.addEventListener('load', search_widget_onLoad, false);} 
//-->
</script>
</head>

<body style="background:#<?php echo $pts_pagebg; ?>;" <?php body_class(); ?>>
<?php if ($pts_width<>"Boxed") { ?>
	<div id="wrapper">
		<?php } else { ?>
	<div id="w1100">
<?php } ?>

  <div id="header">
    <a href="<?php echo home_url(); ?>"><div id="title"><h1 style="color:#<?php echo $pts_blogtitle; ?>;"><?php bloginfo('name'); ?></h1></div></a>
      <a href="<?php echo home_url(); ?>"><div id="caption"><h2 style="color:#<?php echo $pts_blogcaption; ?>;"><?php bloginfo('description'); ?></h2></div></a>
    <!-- menu group -->
    <div id="menu"><?php wp_nav_menu( array( 'theme_location'=>'Main Menu','container' =>false, 'menu_class' => 'nav', 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '',
 'depth' => 0, 'walker' => new description_walker()) ); ?></div>
    <!-- end menu group -->
      <div style="clear: both;"></div>
  </div>
  
 
  
<?php if (is_front_page()) { ?>		
	<?php
	switch ($pts_showcase) {
	case "Widget Showcase":
        get_template_part('includes/showcase1','index');
		break;
	case "My Own Showcase":
        get_template_part('includes/showcase2','index');
		break;
	}
	?>
<?php } else { ?>
<?php get_template_part('includes/showcase1','index'); ?>
<?php } ?>  
  
 <div id="showcaseshadow"></div>  
  <div id="breadcrumbs">
    <div class="w940"><?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb(); }else{if (function_exists('pts_breadcrumbs')) pts_breadcrumbs(); } ?></div>
  </div>
  <!-- content columns -->
  <div id="columns" class="clearfix">