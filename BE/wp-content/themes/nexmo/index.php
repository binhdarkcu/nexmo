<?php /* Template Name: Home Template */ ?>
<?php get_header();

?>
<section class="Hero Hero--light Hero--blue-blue">
   <div class="Hero-midGround" style="background-image: url(<?php echo get_field('home_background', 'option');?>)"></div>
   <div class="Hero-wrapper">
      <div class="Hero-content">
         <div class="Hero-contentInner">
            <h1 data-reactid="334"><?php echo get_field('banner_text', 'option');?></h1>
            <h3 data-reactid="335">
               <p data-reactid="336"><?php echo get_field('banner_sub_text', 'option');?></p>
            </h3>
            <a role="link" aria-label="Try it free" class="Btn" href="<?php echo HOME_URL;?>/sign-up" data-reactid="337">Try it free</a><a role="link" aria-label="Contact Sales" class="Btn secondary" href="<?php echo HOME_URL;?>/contact" data-reactid="338">Contact Sales</a>
         </div>
      </div>
      <div class="Hero-bottomIconContainer">
         <ul data-reactid="340">
            <li data-reactid="341">Trusted By</li>
            <?php
                $heroIamge = get_field('hero_image', 'option');
                foreach ( $heroIamge as $hero ) {
            ?>
            <li data-reactid="342">
               <picture data-reactid="343">
                  <img srcset="<?php echo $hero["hero_logo"]?>" data-reactid="345">
               </picture>
            </li>
            <?php } ?>
         </ul>
      </div>
   </div>
</section>
<section class="Products" data-reactid="362">
   <a name="Products" data-reactid="363"></a>
   <h2 data-reactid="364">Our Platform</h2>
   <h3 data-reactid="365">
      <p data-reactid="366">A set of cloud-based communication APIs designed to remove the pain of integrating with multiple carriers – and take you global in the blink of an eye.</p>
   </h3>
   <div class="Products-grid" data-reactid="367">
       <?php
           $arg_producticon = array(
               'post_type'                     => 'products',
                'posts_per_page' =>  3 ,
               'order'			 => 'asc'
           );
           $products_icons = get_posts($arg_producticon);
           foreach ( $products_icons as $icon ) {
               $image = wp_get_attachment_image_src( get_post_thumbnail_id( $icon -> ID ), 'single-post-thumbnail');
        ?>
      <div class="Products-item Products-item--sms" data-reactid="368">
         <div class="Products-item-img" data-reactid="369"><a href="<?php echo get_the_permalink($icon->ID)?>" data-reactid="370"><img src="<?php echo $image[0];?>" alt="sms" data-reactid="371"></a></div>
         <h4 data-reactid="372"><a href="<?php echo get_the_permalink($icon->ID)?>" data-reactid="373"><?php echo $icon->post_title;?></a></h4>
         <p data-reactid="374"><?php echo get_field('product_short_description', $icon -> ID);?></p>
      </div>
      <?php } ?>
   </div>
</section>

<?php echo get_template_part("tpl","client")?>

<?php
    $homeid = get_page_by_path('home')->ID;
?>
<section class="InfoBox is-grey " data-reactid="459">
   <a name="InfoBox" data-reactid="460"></a>
   <div class="InfoBox-inner" data-reactid="461">
      <div class="InfoBox-content InfoBox-content--col8" data-reactid="462">
         <h4 ><?php the_field('benefit_home_title', $homeid); ?></h4>
         <p><?php the_field('benefit_home_description', $homeid); ?></p>
         <a role="link" aria-label="DISCOVER THE DIFFERENCE" class="Btn " href="<?php the_field('benefit_home_link', $homeid); ?>">DISCOVER THE DIFFERENCE</a>
      </div>
   </div>
</section>
<section class="Stats Stats--col3 is-grey" data-reactid="466">
   <div class="Stats-inner" data-reactid="467">

     <?php if(have_rows('benefit_home_content', $homeid) ): ?>
         <?php while(have_rows('benefit_home_content', $homeid)): the_row(); ?>
           <div class="Stats-item">
              <h4><?php echo get_sub_field('benefit_home_content_title', $homeid)?></h4>
              <?php

                if( get_sub_field('benefit_home_content_number', $homeid) ):
                    while ( has_sub_field('benefit_home_content_number', $homeid) ) :
                    ?>
                		 <h5><span><?php the_sub_field('large_number', $homeid);?></span><span class="smaller"><?php the_sub_field('smaller_number', $homeid);?></span><span class="small"><?php the_sub_field('small_number', $homeid);?></span></h5>
                    <?php
                    endwhile;
                else :
                endif;
              ?>
              <p><?php the_sub_field('benefit_home_content_description', $homeid)?></p>
              <?php
                if( get_sub_field('benefit_home_content_link', $homeid) ):
                    while ( has_sub_field('benefit_home_content_link', $homeid) ) :
                    ?>
                    <a href="<?php the_sub_field('benefit_home_content_link_url', $homeid);?>"><?php the_sub_field('benefit_home_content_link_name', $homeid);?></a>
                    <?php
                    endwhile;
                else :
                endif;
              ?>
           </div>
         <?php endwhile; ?>
      <?php endif;?>
   </div>
</section>
<?php get_footer();?>
