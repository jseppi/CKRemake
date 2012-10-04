<?php
/**
 * The Category template file.
 *
 */

get_header(); ?>

<div class="span9"> <!-- main span9 -->
   
    <div class="row">
        <div class="span9">
           <h1 class="category-title"><?php single_cat_title(); ?></h1>			
           <?php echo category_description(); ?>
        </div>
        <hr/>
    </div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('content'); ?>
    <?php endwhile; else: ?>
        <p>
            <?php _e('Sorry, no posts found.'); ?>
        </p>
    <?php endif; ?>
    <p>
        <?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>
    </p>   

</div> <!-- /main span9 -->

<?php get_sidebar(); ?>


<?php get_footer(); ?>