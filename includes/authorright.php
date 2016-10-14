<?php // Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html> ?>

<div id="mainbody-r">
    <?php
    /* Queue the first post, that way we know who
     * the author is when we try to get their name,
     * URL, description, avatar, etc.
     *
     * We reset this later so we can run the loop
     * properly with a call to rewind_posts().
     */
    if ( have_posts() )
        the_post();
    ?>

    <h1 class="page-title author"><?php printf( __( 'Articles Written By: %s', 'pts' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h1>

    <?php
    // If a user has filled out their description, show a bio on their entries.
    if ( get_the_author_meta( 'description' ) ) : ?>
        <div id="entry-author-info">

            <div id="author-description"><span id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'pts_author_bio_avatar_size', 60 ) ); ?>
						</span><!-- #author-avatar -->
                <h2><?php printf( __( 'About %s', 'pts' ), get_the_author() ); ?></h2>
                <p><?php the_author_meta( 'description' ); ?></p>
                <p><strong><?php _e('Author Website:', 'pts' ); ?></strong> <a href="<?php the_author_meta('url'); ?>"><?php the_author_meta('url'); ?></a><br />
            </div><!-- #author-description	-->
        </div><!-- #entry-author-info -->
    <?php endif; ?>

    <?php
    /* Since we called the_post() above, we need to
     * rewind the loop back to the beginning that way
     * we can run the loop properly, in full.
     */
    rewind_posts();

    /* Run the loop for the author archive page to output the authors posts
     * If you want to overload this in a child theme then include a file
     * called loop-author.php and that will be used instead.
     */
    get_template_part( 'loop', 'author' );
    ?>

</div>

<div id="right">
    <div id="rightt">
        <div id="rightb">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Right Column')) : ?>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a justo quam, eu mattis velit. Cras ac dolor ac mi placerat vulputate. Proin bibendum tristique sagittis. Aliquam diam leo, tempus sed aliquet vel, tincidunt vel ligula. Phasellus magna enim, feugiat non condimentum quis, interdum vitae nisi. Vivamus eros nisl, dignissim vel scelerisque nec, laoreet eu mauris.
            <?php endif; ?>
        </div>
    </div>
</div>