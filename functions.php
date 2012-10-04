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
			'before_widget' => '<div class="row widget-row"><div class="span3">',
			'after_widget' => '</div></div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)

	);

}

endif;


if (!function_exists('make_featured_carousel')):

function make_carousel($tag, $carouselId) {
           
    $featured_posts = get_posts('tag='.$tag); 

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
          
            if (!empty($children)){
                $attachments[] = array_shift($children);
                
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
              $attachmentthumbsrc = wp_get_attachment_image_src( $image->ID, "medium" ); 
              $img_title = $image->post_title;
              $img_caption = $image->post_excerpt;
              $img_desc = $image->post_content;
              $imagelocs[] = array( 
                  "full" => $attachmenturl, 
                  "thumb" => $attachmentthumbsrc[0], 
                  "title" => $img_title, 
                  "caption" => $img_caption,
                  "desc" => $img_desc,
                  "width" => $attachmentthumbsrc[1], 
                  "height" => $attachmentthumbsrc[2]
              ); 
           		if ($first) {
                $build .= "<div class='item active'>";
                $first = false; 
              }
              else {
                $build .= "<div class='item'>";
              }
              
              $build .= "<img src='{$attachmenturl}' alt='{$img_title}' height='300' width='400' />";
              $build .= "<div class='carousel-caption'>";
              $build .= "<h4>{$img_title}</h4>";
              //$build .= "<p>{$img_caption}</p>"; #or should use desc instead?
              $build .= "</div>"; #end carousel-caption
        
              $build .= "</div>"; #end item
            
            }
            
            $build .= "</div>"; //end carousel-inner
            $build .= "<a class='carousel-control left' href='#".$carouselId."' data-slide='prev'>&lsaquo;</a>";
            $build .= "<a class='carousel-control right' href='#".$carouselId."' data-slide='next'>&rsaquo;</a>";
            $build .= "</div>"; //end featuredCarousel
          	return $build;

        }

        return "";

    }
}
endif;
?>