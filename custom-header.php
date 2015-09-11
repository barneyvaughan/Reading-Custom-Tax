<!-- 

Custom Header Image Code based on a page/posts featured image
Author: Barney Vaughan



-->    
    <!--If home or front page -->
   	 <?php if( is_home() || is_front_page() ) : ?>
		/*Do something*/

    <!--If post  -->
	<?php elseif( is_single()): ?>
		/*Do Something*/

    <!--If page that's not the front page and there is a featured image-->
    	<?php elseif(is_page() && has_post_thumbnail( $post->ID ) &&  (is_front_page()==false)): ?>
   		 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		

    <!--Else do something -->
	<?php else: ?>
		/*Do something*/

	<?php endif; ?>

<!-- Custom Header Image End -->
