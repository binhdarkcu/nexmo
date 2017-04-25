<section class="Clients">
   <div class="Clients-content">
       <?php
        	$args_client = array(
        		'post_type'                     => 'clients',
                'posts_per_page' =>  -1 ,
    		    'order'			 => 'asc'
        	);
        	$clients = get_posts($args_client);
        	foreach ( $clients as $client ) {
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $client->ID ), 'single-post-thumbnail');
        ?>
       <div class="Client-box-item">
          <div class="Clients-box-item-logo">
             <div class="image gett" style="background-image: url(<?php echo $thumb[0];?>)"></div>
          </div>
          <div class="Clients-box-item-content">
             <h4>
                <?php echo $client->post_content;?>
             </h4>
          </div>
       </div>
       <?php }?>
   </div>
</section>
