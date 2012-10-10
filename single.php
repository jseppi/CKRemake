<?php
/**
 * The Tag template file.
 *
 */

get_header(); ?>

<div class="span8"> <!-- main span8 -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('content'); ?>
    <?php endwhile; else: ?>
        <p>
            <?php _e('Sorry, no posts found.'); ?>
        </p>
    <?php endif; ?>

</div> <!-- /main span8 -->

<?php get_sidebar(); ?>


<?php get_footer(); ?>
