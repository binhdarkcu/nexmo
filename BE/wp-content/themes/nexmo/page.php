<?php get_header("blog");
global $post;
while ( have_posts() ) : the_post();
 ?>
<main role="main">
   <section class="PageTitle PageTitle--blog has-gradient-bg has-white-text">
      <div class="PageTitle-content">
         <h1><?php the_title()?></h1>
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
                    <a href="<?php echo wp_get_referer();?>">&lt; Back</a>
                    <a role="link" aria-label="Blog home" href="<?php echo HOME_URL;?>/blog">Blog home</a><br/><br/>
                </p>
                <!-- post thumbnail -->
                <div class="Blog-single .Blog-thumbnail">
                    <a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo get_the_title(); ?>">
                       <?php
                         $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail');

                         if( !empty($image) ): ?>
                       	<img src="<?php echo $image[0]; ?>?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php echo get_the_title(); ?>">
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
