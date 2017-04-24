<?php get_header();?>
<article>
   <section class="NewHero">
      <div class="NewHero-wrapper">
         <div class="NewHero-content">
            <div class="NewHero-contentInner">
               <h1>USE CASES</h1>
               <h2>Leverage the Nexmo Platform to innovate your business communications</h2>
            </div>
         </div>
      </div>
      <div class="NewHero-arrowContainer"><a href="#UseCases" class="NewHero-arrow"></a></div>
   </section>
   <section class="UseCases">
   <?php
    	$args_usecases = array(
    		'post_type'                     => 'resources',
            'posts_per_page' =>  -1 ,
		    'order'			 => 'asc'
    	);
    	$usecases = get_posts($args_usecases);
    	foreach ( $usecases as $usecase ) {
    ?>
      <div class="UseCases-item">
         <div class="UseCases-itemTitle"><?php echo $usecase->post_title;?></div>
         <div class="UseCase-itemTitleUnderline"></div>
         <div class="UseCases-itemCopy"><?php echo $usecase->post_content;?></div>
         <a class="UseCases-itemReadMore" href="<?php echo get_the_permalink($usecase->ID);?>">How it works</a>
      </div>
   <?php } ?>
   </section>
   <section class="UseCases-divider">
      <div class="UseCases-dividerLogo"></div>
   </section>
   <section class="UseCases-bottomCTA">
      <div class="UseCases-bottomCTATitle">THE NEXMO EXPERIENCE</div>
      <div class="UseCases-bottomCTACopy">Quality, Support, Scalability</div>
      <div class="UseCases-bottomCTAButton"><a role="link" class="Btn" href="https://dashboard.nexmo.com">TRY IT FREE</a></div>
   </section>
</article>
<?php include("footer.php");?>
