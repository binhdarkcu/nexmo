<div class="footer" data-reactid="483">
   <div class="container" data-reactid="484">
      <div class="content" data-reactid="485">
         <div class="list" data-reactid="486">
            <ul data-reactid="487">
               <li class="footer__title" data-reactid="488">PRODUCTS</li>
               <?php
                 $arg_product = array(
                   'post_type'                     => 'products',
                        'posts_per_page' =>  3 ,
                   'order'			 => 'asc'
                 );
                 $products_menus = get_posts($arg_product);
                 foreach ( $products_menus as $products_menu ) {
                ?>
                  <li class="footer__product-name" data-reactid="489"><a href="<?php echo get_the_permalink($products_menu->ID);?>" data-reactid="490"><?php echo $products_menu->post_title;?></a></li>
                <?php }?>
            </ul>
         </div>
         <div class="list disappear" data-reactid="505">
            <ul data-reactid="506">
               <li class="footer__title-link" data-reactid="507"><a href="https://docs.nexmo.com/" data-reactid="508">DOCS</a></li>
               <li data-reactid="509"><a href="https://docs.nexmo.com/messaging" data-reactid="510">Messaging</a></li>
               <li data-reactid="511"><a href="https://docs.nexmo.com/voice/voice" data-reactid="512">Voice</a></li>
               <li data-reactid="513"><a href="https://docs.nexmo.com/verify" data-reactid="514">Verify</a></li>
               <li data-reactid="515"><a href="https://docs.nexmo.com/number-insight" data-reactid="516">Number Insight</a></li>
               <li data-reactid="517"><a href="https://docs.nexmo.com/tools" data-reactid="518">Tools</a></li>
               <li data-reactid="519"><a href="https://docs.nexmo.com/tools/libraries" data-reactid="520">Libraries</a></li>
               <li data-reactid="521"><a href="https://docs.nexmo.com/tutorials" data-reactid="522">Tutorials</a></li>
            </ul>
         </div>
         <div class="list disappear" data-reactid="523">
            <ul data-reactid="524">
               <li class="footer__title-link" data-reactid="525"><a href="https://www.nexmo.com/use-cases" data-reactid="526">USE CASES</a></li>
               <?php
                   $arg_usecase = array(
                       'post_type'                     => 'resources',
                        'posts_per_page' =>  3 ,
                       'orderby'			 => 'rand'
                   );
                   $usecasesMenu = get_posts($arg_usecase);
                   foreach ( $usecasesMenu as $usecase ) {
                ?>
               <li data-reactid="527"><a href="<?php echo get_the_permalink($usecase->ID);?>" data-reactid="528"><?php echo $usecase->post_title;?></a></li>
               <?php }?>
            </ul>
         </div>
         <div class="list disappear" data-reactid="539">
            <ul data-reactid="540">
               <li class="footer__title-link" data-reactid="541"><a href="https://nexmo.com/blog" data-reactid="542">BLOG</a></li>
               <?php
                   $arg_postblog = array(
                       'post_type'                     => 'post',
                        'posts_per_page' =>  3 ,
                       'orderby'			 => 'rand'
                   );
                   $blogMenu = get_posts($arg_postblog);
                   foreach ( $blogMenu as $blog ) {
                ?>
               <li><a href="<?php echo get_the_permalink($blog->ID);?>"><?php echo $blog->post_title;?></a></li>
               <?php } ?>
            </ul>
         </div>
         <div class="list appear left-auto" data-reactid="543">
            <ul data-reactid="544">
               <li class="footer__title" data-reactid="545">RESOURCES</li>
               <li data-reactid="546"><a href="https://www.nexmo.com/use-cases" data-reactid="547">Use Cases</a></li>
               <li data-reactid="548"><a href="https://nexmo.com/blog" data-reactid="549">Blog</a></li>
               <li data-reactid="550"><a href="https://docs.nexmo.com/" data-reactid="551">Docs</a></li>
               <li data-reactid="552"><a href="https://help.nexmo.com/hc/en-us" data-reactid="553">Support</a></li>
               <li data-reactid="554"><a href="https://nexmostatus.com/" data-reactid="555">API Status</a></li>
            </ul>
         </div>
         <div class="list" data-reactid="556">
            <ul data-reactid="557">
               <li class="footer__title" data-reactid="558">GET TO KNOW US</li>
               <li data-reactid="559"><a href="https://www.nexmo.com/platform" data-reactid="560">Nexmo Platform</a></li>
               <li data-reactid="561"><a href="https://www.nexmo.com/about-nexmo" data-reactid="562">About Nexmo</a></li>
               <li data-reactid="563"><a href="https://www.nexmo.com/careers" data-reactid="564">Careers</a></li>
               <li data-reactid="565"><a href="https://www.nexmo.com/leadership" data-reactid="566">Leadership</a></li>
               <li data-reactid="567"><a href="https://www.nexmo.com/press" data-reactid="568">Press</a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="container mobile-separator" data-reactid="569">
      <div class="content-right" data-reactid="570">
         <a class="footer__link disappear" href="https://help.nexmo.com/hc/en-us" data-reactid="571">Support</a><a class="footer__link disappear" href="https://nexmostatus.com/" data-reactid="572">API Status</a>
         <div class="phone-number phone-icon right-auto" data-reactid="573"><a href="tel:852-3769-7261" data-reactid="574">+852 3769 7261</a></div>
         <a role="link" aria-label="Contact Sales" class="Btn third right-auto" href="https://www.nexmo.com/contact-sales" data-reactid="575">Contact Sales</a>
      </div>
   </div>
   <div class="container" data-reactid="576">
      <div class="content content-bottom" data-reactid="577">
         <div class="footer__logo-row" data-reactid="578"><a class="footer__link footer__link--bottom icon-logo" style="background-image: url(<?php echo get_field('footer_logo', 'option');?>)" href="https://www.vonage.com/" target="_blank" data-reactid="579"></a><a class="footer__link footer__link--bottom disappear" href="https://www.nexmo.com/terms-of-use" data-reactid="580">Terms of Use</a><a class="footer__link footer__link--bottom disappear" href="https://www.nexmo.com/privacy-policy" data-reactid="581">Privacy Policy</a><a class="footer__link footer__link--bottom disappear" href="https://www.nexmo.com/acceptable-use" data-reactid="582">Acceptable Use</a><a class="footer__link footer__link--bottom disappear" href="https://www.nexmo.com/cookie-policy" data-reactid="583">Cookie Policy</a><a class="footer__link footer__link--bottom disappear" href="https://www.nexmo.com/security-information" data-reactid="584">Security Information</a><a class="footer__link footer__link--bottom disappear" href="https://www.vonage.com/copyright-policy" data-reactid="585">Copyright Policy</a></div>
         <div class="footer__icon-row disappear" data-reactid="586">
           <?php if(get_field('footer_social', 'option')): ?>

               <?php while(the_repeater_field('footer_social', 'option')): ?>
                  <a class="footer__icon-link icon__linkedin" style="background: url(<?php echo the_sub_field('icon_social');?>) 50% no-repeat;background-size: contain;" href="<?php the_sub_field('link_social')?>" ></a>
               <?php
              endwhile; ?>

            <?php endif;?>
           <!-- <a class="footer__icon-link icon__linkedin" href="<?php the_sub_field('link_social')?>" data-reactid="587"></a>
           <a class="footer__icon-link" href="https://twitter.com/Nexmo" data-reactid="588"></a>
           <a class="footer__icon-link icon__stack-overflow" href="http://stackoverflow.com/questions/tagged/nexmo" data-reactid="589"></a>
           <a class="footer__icon-link icon__github" href="https://github.com/Nexmo" data-reactid="590"></a> -->
         </div>
      </div>
   </div>
   <div class="CookiePolicy " data-reactid="591">
      <div class="CookiePolicy--text" data-reactid="592"><span data-reactid="593">This website uses cookies to ensure  you get the best experience on our website.</span><span data-reactid="594"><a class="CookiePolicy--moreInfoButton" href="https://www.nexmo.com/cookie-policy/" data-reactid="595">More info</a></span></div>
      <div role="button" class="CookiePolicy--dismissButton Btn" data-reactid="596">OK, got it!</div>
   </div>
</div>
</div>
</div>
</div>

</body>
</html>
