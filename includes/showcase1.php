<?php // Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html> ?>


<div id="showcasewrapper">
    <div id="showcaselines">
      <div class="w940">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Showcase Widget')) : ?>
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/showcase-demo.jpg" width="940" height="235" alt="<?php _e('showcase demo picture', 'pts'); ?>" />
      <?php endif; ?>
      </div>
    </div>
  </div>