
<?php
  get_header("blog");
 ?>
<main role="main">
   <section class="PageTitle PageTitle--blog has-gradient-bg has-white-text">
      <div class="PageTitle-content">
         <h1>Blog</h1>
         <h2></h2>
      </div>
   </section>
   <!-- section -->
   <section>
      <section class="Blog">
         <?php get_sidebar('blog');?>

         <div class="Blog-content Blog-archive">
            <!-- article -->

            <?php
            global $paged;
            $blog_query = query_posts(
               array(
                   'post_type'=>'post',
                   'posts_per_page'=> 3,
                   'orderby'=>'date',
                   'paged'=> $paged
               )
            );
            ?>

              <?php if(have_posts($blog_query->$post)): while(have_posts($blog_query->$post)): the_post($blog_query->$post); ?>
                <article id="post-13366" class="post-13366 post type-post status-publish format-standard has-post-thumbnail hentry category-customers">
                   <!-- post thumbnail -->
                   <div class="Blog-thumbnail">
                      <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" title="<?php echo get_the_title(get_the_ID()); ?>">
                        <?php
                          $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail');
                          if( !empty($image) ): ?>
                        	<img src="<?php echo $image[0]; ?>?>" class="attachment-post size-post wp-post-image" alt="<?php echo $image['alt']; ?>">
                        <?php endif; ?>
                      </a>
                   </div>
                   <!-- /post thumbnail -->
                   <div class="Blog-summary has-image">
                      <!-- post title -->
                      <h4>
                         <a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                      </h4>
                      <!-- /post title -->
                      <!-- post details -->
                      <span class="date"><?php the_date(); ?></span>
                      <span class="author">Published by <a href="<?php the_author_link();?>" title="Posts by Charles Costa" rel="author"><?php the_author(); ?></a>
                          <?php $category = get_the_category(); ?>
                          // <a href="<?php echo get_category_link($category[0]->cat_ID)?>" rel="tag"><?php echo $category[0]->name;?></a>
                      </span>
                      <span class="comments"></span>
                      <!-- /post details -->
                      <p>
                         <!-- AddThis Sharing Buttons above --><?php echo wp_trim_words( get_the_content(), 55, '[…]' );?><!-- AddThis Sharing Buttons below -->
                         <a href="<?php echo get_permalink( $post->ID ); ?>">Read more »</a>
                      </p>
                   </div>
                </article>

              <?php endwhile; endif;?>
              <?php bt_paginate(); ?>

            <!-- /article -->
         </div>
      </section>
   </section>
   <!-- /section -->
</main>
<?php get_footer();?>
