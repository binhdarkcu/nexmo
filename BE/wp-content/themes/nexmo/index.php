<?php get_header(); ?>
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
         <p data-reactid="374"><?php echo $icon->post_content;?></p>
      </div>
      <?php } ?>
   </div>
</section>

<?php echo get_template_part("tpl","client")?>

<section class="InfoBox is-grey " data-reactid="459">
   <a name="InfoBox" data-reactid="460"></a>
   <div class="InfoBox-inner" data-reactid="461">
      <div class="InfoBox-content InfoBox-content--col8" data-reactid="462">
         <h4 data-reactid="463">Why choose Nexmo</h4>
         <p data-reactid="464">Real time analytics, direct relationships with carriers and innovation around pain points all come together for a more reliable, and efficient service. Discover how we push the limits to deliver the quality you’ve come to expect.</p>
         <a role="link" aria-label="DISCOVER THE DIFFERENCE" class="Btn " href="https://www.nexmo.com/platform/" data-reactid="465">DISCOVER THE DIFFERENCE</a>
      </div>
   </div>
</section>
<section class="Stats Stats--col3 is-grey" data-reactid="466">
   <div class="Stats-inner" data-reactid="467">
      <div class="Stats-item">
         <h4>Better</h4>
         <h5><span>2.5</span><span class="small">m</span></h5>
         <p>We let you send up to 2.5 million API calls per day – and we can easily offer more if you need us to.</p>
         <a href="https://www.nexmo.com/products/sms/">View our SMS API</a>
      </div>
      <div class="Stats-item">
         <h4>Smarter</h4>
         <h5><span>10</span><span class="smaller">,</span><span class="small">000</span></h5>
         <p>The amount of outages we prevent daily with our algorithms, shielding you from carrier network volatility and making sure your messages get delivered on time.</p>
         <a href="https://www.nexmo.com/platform">Discover our quality</a>
      </div>
      <div class="Stats-item">
         <h4>Faster</h4>
         <h5><span>24</span><span class="small">/7</span></h5>
         <p>Our expert, global support team is renowned for resolving issues quickly. Upgrade to Premium Support for a personalized touch.</p>
         <a target="_blank" href="https://help.nexmo.com/hc/en-us">Explore support</a>
      </div>
   </div>
</section>
<?php get_footer();?>
