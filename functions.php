<?php
/**
 * Tell WordPress to run ck_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'ck_setup' );

if (!function_exists('ck_setup')):

function ck_setup() {
	register_nav_menus( 
		array(
			'primary' => 'Primary Menu'
		)

	);


	register_sidebar(
		array(
			'name' => 'Primary Sidebar',
			'id' => 'primary_sidebar',
			'before_widget' => '<div class="row widget-row"><div class="span4">',
			'after_widget' => '</div></div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)

	);


  register_sidebar(array(
      'name' => 'Blurb',
      'id' => 'blurb-widgets',
      'before_widget' => '<div class="blurb-widget">',
      'after_widget' => '</div>',
      'before_title' => '',
      'after_title' => '')
  );

}

endif;


function make_carousel($tag, $carouselId) {

    $featured_posts = get_posts(array('tag'=>'featured'));
	
    if ( !empty($featured_posts)) {
	
        foreach ($featured_posts as $post) {

            $children = get_children( 
                array( 
                      'post_parent' => $post->ID, 
                      'post_type' => 'attachment', 
                      'numberposts' => 1, 
                      'order' => 'ASC', 
                      'orderby' => 'ID', 
                      'post_mime_type' => 'image' 
                )
            );

            if (!empty($children)) {
            	$child = array_shift($children);
            	$child->parent_link = get_permalink( $post->ID );
                $attachments[] = $child;
                
                if (count($attachments) == 5 ) {                
                    break;
                }
            }
        }
       
        if (!empty($attachments)) {
          
          	$build = "<div id='".$carouselId."' class='carousel slide' data-interval='500'>";
            $build .= "<div class='carousel-inner'>";
          	
          	$first = true;
          	foreach ( $attachments as $image ) { 
              $attachmenturl = wp_get_attachment_url($image->ID); 
              $img_title = $image->post_title;
              $img_caption = $image->post_excerpt;
              $parent_link = $image->parent_link;
             
           		if ($first) {
                $build .= "<div class='item active'>";
                $first = false; 
              }
              else {
                $build .= "<div class='item'>";
              }
              
              $build .= "<img src='{$attachmenturl}' alt='{$img_title}' height='300' width='400' />";
              $build .= "<div class='carousel-caption'>";
              $build .= "<h4><a href='{$parent_link}'>{$img_title}</a></h4>";
              $build .= "</div>"; #end carousel-caption
              $build .= "</div>"; #end item
            
            }
            
            $build .= "</div>"; //end carousel-inner
            $build .= "<a class='carousel-control left' href='#".$carouselId."' data-slide='prev'>&lsaquo;</a>";
            $build .= "<a class='carousel-control right' href='#".$carouselId."' data-slide='next'>&rsaquo;</a>";
            $build .= "</div>"; //end featuredCarousel
          	return $build;
        }

        return ""; //if we got here, no featured posts with attached images were found :(
    }
}

?>