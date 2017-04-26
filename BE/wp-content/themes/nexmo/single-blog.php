<?php get_header("blog");
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
            <article id="post-13429" class="post-13429 post type-post status-publish format-standard has-post-thumbnail hentry category-customers">

                <p>
                    <a href="https://www.nexmo.com/blog/">&lt; Back</a>
                </p>
                <!-- post thumbnail -->
                <div class="Blog-single .Blog-thumbnail">
                    <a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo get_the_title(); ?>">
                       <?php
                         $image = get_field('image_single_blog');
                         if( !empty($image) ): ?>
                       	<img src="<?php echo $image['url']; ?>?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php echo $image['alt']; ?>">
                       <?php endif; ?>
                     </a>
                </div>
                <!-- /post thumbnail -->

                <!-- post title -->
                <h3>
                    <a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                </h3>
                <!-- /post title -->

                <!-- post details -->
                <span class="date"><?php the_date(); ?></span>
                <span class="author">Published by <a href="<?php the_author_link();?>" title="Posts by Charles Costa" rel="author"><?php the_author(); ?></a></span>
                <!-- /post details -->

                <!-- AddThis Sharing Buttons above -->
                <p><?php echo get_the_content()?></p>
            </article
         </div>
      </section>
   </section>
   <!-- /section -->
</main>
<?php endwhile; ?>
<?php get_footer();?>
