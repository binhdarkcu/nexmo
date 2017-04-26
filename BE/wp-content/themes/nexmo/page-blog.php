<?php
  get_header("blog");
  global $post;
  while ( have_posts() ) : the_post();
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

            <?php $loop = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page' => -1 ) ); ?>
              <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <article id="post-13366" class="post-13366 post type-post status-publish format-standard has-post-thumbnail hentry category-customers">
                   <!-- post thumbnail -->
                   <div class="Blog-thumbnail">
                      <a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo get_the_title(); ?>">
                        <?php
                          $image = get_field('image_single_blog');
                          if( !empty($image) ): ?>
                        	<img src="<?php echo $image['url']; ?>?>" class="attachment-post size-post wp-post-image" alt="<?php echo $image['alt']; ?>">
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
                                                        // <a href="https://www.nexmo.com/blog/category/customers/" rel="tag">Customers</a></span>
                      <span class="comments"></span>
                      <!-- /post details -->
                      <p>
                         <!-- AddThis Sharing Buttons above --><?php echo wp_trim_words( get_the_content(), 55, '[…]' );?><!-- AddThis Sharing Buttons below -->
                         <a href="<?php echo get_permalink( $post->ID ); ?>">Read more »</a>
                      </p>
                   </div>
                </article>
              <?php endwhile; wp_reset_query(); ?>

            <!-- /article -->
            <!-- pagination -->
            <div class="pagination">
               <span class="page-numbers current">1</span>
               <a class="page-numbers" href="https://www.nexmo.com/blog/page/2/">2</a>
               <a class="page-numbers" href="https://www.nexmo.com/blog/page/3/">3</a>
               <span class="page-numbers dots">…</span>
               <a class="page-numbers" href="https://www.nexmo.com/blog/page/43/">43</a>
               <a class="next page-numbers" href="https://www.nexmo.com/blog/page/2/">Next »</a>
            </div>
            <!-- /pagination -->
         </div>
      </section>
   </section>
   <!-- /section -->
</main>
<?php endwhile; ?>
<?php get_footer();?>
