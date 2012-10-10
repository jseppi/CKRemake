<?php
/**
 * The Tag template file.
 *
 */

get_header(); ?>

<div class="span8"> <!-- main span8 -->
   
    <div class="row">
        <div class="span8">
            <h1 class="tag-title">Posts Tagged "<?php single_cat_title(); ?>"</h1>			
            <?php echo category_description(); ?>
            <hr>
        </div>
        
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

</div> <!-- /main span8 -->

<?php get_sidebar(); ?>


<?php get_footer(); ?>
