<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<div class="span9"> <!-- main span9 -->
    <div class="row"> <!-- top row -->
        
        <?php $blurbs = get_posts( array ( 'category_name' => 'front-page-blurb', 'posts_per_page' => 1 ) ); ?>
        <div class="span4">
            <div class="entry-body">
                <article class="front-sticky">
                    <?php 
                        foreach ($blurbs as $blurb) {   
                            echo apply_filters('the_content', $post->post_content);
                        } 
                    ?>
                </article>
            </div>
            <h2 class="news-heading">Latest News</h2>
        </div>
        <div class="span5">
            <?php echo make_carousel('featured','featuredCarousel'); ?>
        </div>
    </div> <!-- /top row -->
   

    <?php query_posts(  array ( 'category_name' => 'news', 'posts_per_page' => 3) ); ?>
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
