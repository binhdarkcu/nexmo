<div class="Blog-sidebarContainer">
   <div class="Blog-sidebar">
      <!-- Search Widget -->
      <div class="widget widget_search">
         <form class="search ng-pristine ng-valid" method="get" action="/" role="search">
            <input class="search-input" type="search" name="s" placeholder="Search">
            <button class="search-submit" type="submit" role="button">Go</button>
         </form>
      </div>
      <div class="Blog-sidebarContent">
         <!-- Categories Widget -->
         <div class="widget widget_categories">
            <h2 class="widgettitle">Categories</h2>
              <ul>
                <?php
                // your taxonomy name
                  $tax = 'category';

                  // get the terms of taxonomy
                  $terms = get_terms( $tax, [
                    'hide_empty' => false, // do not hide empty terms
                  ]);
                  foreach( $terms as $term ) {
                      echo '<li class="cat-item cat-item-44"><a href="'. get_term_link( $term ) .'">'. $term->name .'</a></li>';
                  }
                ?>
            </ul>
         </div>
         <!-- Popular Post Widget -->
         <div class="widget widget_popular">
            <h2 class="widgettitle">Popular</h2>
            <!-- WordPress Popular Posts Plugin v3.3.4 [PHP] [monthly] [views] [custom] -->
            <ul class="wpp-list">
              <?php
              $args = array(
                  'post_type'=> 'post',
                  'posts_per_page' => 7,
                  'orderby '    => 'rand'
              );
              $loop=  query_posts( $args );
              //  $loop = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page' => 1, 'paged' => get_query_var('paged') ) ); ?>

              <?php while ( have_posts() ) : the_post(); ?>
                  <li> <a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo get_the_title(); ?>" class="wpp-post-title" target="_self"><?php echo get_the_title(); ?></a> </li>
              <?php endwhile;
                wp_reset_query();
              ?>

            </ul>
            <!-- End WordPress Popular Posts Plugin v3.3.4 -->
         </div>
         <!-- Search Widget -->

         <!-- Archives Widget -->

      </div>
   </div>
   <!-- /grid -->
</div>
