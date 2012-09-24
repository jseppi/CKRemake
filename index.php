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
        <div class="span5">
            <div id="featuredCarousel" class="carousel slide" data-interval="500">
            <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="images/carousel_01.jpg" alt="" />
                        <div class="carousel-caption">
                            <p>Link to post</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/carousel_03.jpg" alt="" />
                        <div class="carousel-caption">
                            <p>Link to post</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/carousel_02.jpg" alt="" />
                        <div class="carousel-caption">
                            <p>Link to post</p>
                        </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#featuredCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#featuredCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
        <div class="span4">
            <h3>Heading</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details »</a></p>
        </div>
    </div> <!-- /top row -->
    <div class="row">
        <div class="span9">
            <div class="row">
                <section class="span9 article">
                    <hgroup>
                        <h3>Heading 1</h3>
                    </hgroup>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                </section>
            </div>
            <div class="row">
                <section class="span9 article">
                        <hgroup>
                            <h3>Heading</h3>
                        </hgroup>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    
                </section>
            </div>

            <div class="row">
                <section class="span9 article">
                        <hgroup>
                            <h3>Heading</h3>
                        </hgroup>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    
                </section>
            </div>

            <div class="row">
                <section class="span9 article">
                    <hgroup>
                        <h3>Heading</h3>
                    </hgroup>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                </section>

            </div>
        </div>
    </div>
</div> <!-- /main span9 -->

<?php get_sidebar(); ?>


<?php get_footer(); ?>
