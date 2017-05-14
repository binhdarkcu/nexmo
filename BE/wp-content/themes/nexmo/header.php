<?php get_template_part("tpl", "head");?>
<div class="header Nav-header">
  <div class="floating-menu visible">
     <div class="center-container">
        <div class="desktop">
           <div class="left">
              <a class="logo" href="<?php echo HOME_URL;?>" style="background-image: url(<?php echo get_field('logo_image', 'option');?>)"></a>
              <div class="DropdownNavMenu products-dropdown hover-to-open">
                 <div class="dropbtn" data-reactid="10">Products</div>
                 <div class="dropdown-content" data-reactid="11">
                    <div class="dropdown-content-arrow-box">
                       <div class="NavGroup border-right">
                          <table data-reactid="14">
                             <tbody data-reactid="15">
                                <tr data-reactid="16">
                                   <td data-reactid="17">
                                      <div class="section-title" data-reactid="18">Messaging</div>
                                   </td>
                                   <td data-reactid="19">
                                      <div class="section-title" data-reactid="20">Voice</div>
                                   </td>
                                   <td data-reactid="21">
                                      <div class="section-title" data-reactid="22">Authentication</div>
                                   </td>
                                </tr>
                                <tr>
                                    <?php
                                     	$arg_product = array(
                                     		'post_type'                     => 'products',
                                             'posts_per_page' =>  3 ,
                                 		    'order'			 => 'asc'
                                     	);
                                     	$products_menus = get_posts($arg_product);
                                     	foreach ( $products_menus as $products_menu ) {
                                     ?>
                                   <td>
                                      <div>
                                         <a href="<?php echo get_the_permalink($products_menu->ID);?>">
                                            <div class="PageNavLink">
                                               <div class="page-title page-link"><?php echo $products_menu->post_title;?></div>
                                               <div class="page-copy"><?php echo get_field('product_short_description', $products_menu -> ID);?></div>
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                   <?php } ?>
                                </tr>
                             </tbody>
                          </table>
                       </div>

                       <!-- react-text: 87 --><!-- /react-text --><!-- react-text: 88 --><!-- /react-text -->
                    </div>
                 </div>
              </div>
              <div class="DropdownNavMenu resource-dropdown hover-to-open" data-reactid="89">
                 <div class="dropbtn" data-reactid="90">Resources</div>
                 <div class="dropdown-content" data-reactid="91">
                    <div class="dropdown-content-arrow-box" data-reactid="92">
                       <div class="NavGroup border-right" data-reactid="93">
                          <table data-reactid="94">
                             <tbody data-reactid="95">
                                <tr data-reactid="96"></tr>
                             </tbody>
                          </table>
                       </div>
                       <div class="NavGroup NavBlog" data-reactid="97">
                          <table data-reactid="98">
                             <tbody data-reactid="99">
                                <tr data-reactid="100">
                                   <td data-reactid="101">
                                      <div data-reactid="102">
                                         <a href="<?php echo HOME_URL;?>/use-cases" data-reactid="103">
                                            <div class="PageNavLink" data-reactid="104">
                                               <div class="page-title page-link" data-reactid="105">Use Cases</div>
                                               <!-- react-text: 106 --><!-- /react-text -->
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                                <?php
                                    $arg_usecase = array(
                                        'post_type'                     => 'resources',
                                         'posts_per_page' =>  3 ,
                                        'orderby'			 => 'rand'
                                    );
                                    $usecasesMenu = get_posts($arg_usecase);
                                    foreach ( $usecasesMenu as $usecase ) {
                                 ?>
                                <tr data-reactid="107">
                                   <td data-reactid="108">
                                      <div data-reactid="109">
                                         <a href="<?php echo get_the_permalink($usecase->ID);?>" data-reactid="110">
                                            <div class="PageNavLink more-right-padding no-top-padding more-left-margin" data-reactid="111">
                                               <div class="page-title page-link" data-reactid="112"></div>
                                               <div class="page-copy" data-reactid="113"><?php echo $usecase->post_title;?></div>
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                                <?php } ?>
                                <tr data-reactid="128">
                                   <td data-reactid="129">
                                      <div data-reactid="130">
                                         <a href="<?php echo HOME_URL;?>/blog" data-reactid="131">
                                            <div class="PageNavLink" data-reactid="132">
                                               <div class="page-title page-link" data-reactid="133">Blog</div>
                                               <!-- react-text: 134 --><!-- /react-text -->
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                                <?php
                                    $arg_postblog = array(
                                        'post_type'                     => 'post',
                                         'posts_per_page' =>  3 ,
                                        'orderby'			 => 'rand'
                                    );
                                    $blogMenu = get_posts($arg_postblog);
                                    foreach ( $blogMenu as $blog ) {
                                 ?>
                                <tr>
                                   <td>
                                      <div>
                                         <a href="<?php echo get_the_permalink($blog->ID);?>">
                                            <div class="PageNavLink more-right-padding no-top-padding more-left-margin">
                                               <div class="page-title page-link"></div>
                                               <div class="page-copy"><?php echo $blog->post_title;?></div>
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                                <?php } ?>

                             </tbody>
                          </table>
                       </div>
                       <!-- react-text: 135 --><!-- /react-text -->
                    </div>
                 </div>
              </div>
              <div class="DropdownNavMenu docs-dropdown hover-to-open" data-reactid="136">
                 <div class="dropbtn" data-reactid="137">Documentation</div>
                 <div class="dropdown-content" data-reactid="138">
                    <div class="dropdown-content-arrow-box" data-reactid="139">
                       <div class="NavGroup border-right" data-reactid="140">
                          <table data-reactid="141">
                             <tbody data-reactid="142">
                                <tr data-reactid="143">
                                   <td data-reactid="144"><a class="section-title" href="<?php echo HOME_URL?>/documents" data-reactid="145">Documentation</a></td>
                                </tr>
                                <?php
                                    $documents_id = get_page_by_path('documents')->ID;

                                    if ($post->post_parent)	{
                                    	$ancestors=get_post_ancestors($documents_id);
                                    	$root=count($ancestors)-1;
                                    	$parent = $ancestors[$root];
                                    } else {
                                    	$parent = $post->ID;
                                    }

                                    $document_pages = get_pages('hierarchical=0&child_of=' . $documents_id);

                                    foreach ( $document_pages as $products_doc ) {
                                        if($products_doc -> post_parent == 173 ) {
                                    ?>
                                <tr>
                                   <td>
                                      <div>
                                         <a href="<?php echo get_the_permalink($products_doc->ID)?>">
                                            <div class="PageNavLink no-top-padding more-right-padding small-link more-left-margin">
                                               <div class="page-title page-link"><?php echo $products_doc->post_title?></div>
                                               <!-- react-text: 755 --><!-- /react-text -->
                                            </div>
                                         </a>
                                      </div>
                                   </td> 
                                </tr>
                                <?php } }?>
                             </tbody>
                          </table>
                       </div>

                       <!-- react-text: 200 --><!-- /react-text --><!-- react-text: 201 --><!-- /react-text -->
                    </div>
                 </div>
              </div>
           </div>
           <div class="right" data-reactid="202">
              <a class="link" href="<?php echo HOME_URL;?>/support" data-reactid="203">Support</a><a class="link" href="<?php echo HOME_URL;?>/sign-in" data-reactid="204">Login</a>
              <div class="button-container" data-reactid="205"><a role="link" aria-label="Try it free" class="Btn secondary" href="<?php echo HOME_URL;?>/sign-up" data-reactid="206">Sign Up</a></div>
           </div>
        </div>
     </div>
  </div>
  <div class="mobile" data-reactid="207">
     <div class="left" data-reactid="208">
        <div class="DropdownNavMenu mobile-dropdown click-to-open" data-reactid="209">
           <div class="dropbtn" data-reactid="210">
              <div class="hamburger hamburger--spin" type="button" data-reactid="211"><span class="hamburger-box" data-reactid="212"><span class="hamburger-inner" data-reactid="213"></span></span></div>
           </div>
           <div class="dropdown-content" data-reactid="214">
              <div class="dropdown-content-arrow-box" data-reactid="215">
                 <div class="NavGroup border-bottom" data-reactid="216">
                    <table data-reactid="217">
                       <tbody data-reactid="218">
                          <tr data-reactid="219">
                             <td data-reactid="220"></td>
                             <td data-reactid="221"></td>
                          </tr>
                          <?php
                            $arg_product = array(
                              'post_type'                     => 'products',
                                   'posts_per_page' =>  3 ,
                              'order'      => 'asc'
                            );
                            $products_menus = get_posts($arg_product);
                            foreach ( $products_menus as $products_menu ) {
                           ?>
                          <tr>
                             <td>
                                <div>
                                   <a href="<?php echo get_the_permalink($products_menu->ID);?>">
                                      <div class="PageNavLink">
                                         <div class="page-title page-link"><?php echo $products_menu->post_title;?></div>
                                         <!-- react-text: 804 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                          </tr>
                          <?php } ?>
                         
                          <tr>
                             <td>
                                <div>
                                   <a href="<?php echo HOME_URL?>/use-cases">
                                      <div class="PageNavLink border-top">
                                         <div class="page-title page-link">Use Cases</div>
                                         <!-- react-text: 855 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>
                                <div>
                                   <a href="<?php echo HOME_URL?>/pricing">
                                      <div class="PageNavLink no-top-padding">
                                         <div class="page-title page-link">Pricing</div>
                                         <!-- react-text: 868 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                             <td>
                                <div>
                                   <a href="<?php echo HOME_URL?>/blog">
                                      <div class="PageNavLink no-top-padding">
                                         <div class="page-title page-link">Blog</div>
                                         <!-- react-text: 874 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>
                                <div>
                                   <a href="<?php echo HOME_URL?>/platform">
                                      <div class="PageNavLink no-top-padding">
                                         <div class="page-title page-link">The Nexmo Platform</div>
                                         <!-- react-text: 881 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                             <td>
                                <div>
                                   <div class="PageNavLink">
                                      <div class="page-title page-link"></div>
                                      <!-- react-text: 886 --><!-- /react-text -->
                                   </div>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>
                                <div>
                                   <a href="<?php echo HOME_URL?>/sign-up">
                                      <div class="PageNavLink border-top login-link">
                                         <div class="page-title page-link">Login</div>
                                         <!-- react-text: 893 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                             <td>
                                <div>
                                   <div class="PageNavLink no-top-padding border-top">
                                      <div class="page-title page-link"></div>
                                      <!-- react-text: 898 --><!-- /react-text -->
                                   </div>
                                </div>
                             </td>
                          </tr>
                       </tbody>
                    </table>
                 </div>
                 <!-- react-text: 323 --><!-- /react-text --><!-- react-text: 324 --><!-- /react-text -->
              </div>
           </div>
        </div>
     </div>
     <div class="right" data-reactid="325"><a class="logo" href="https://www.nexmo.com/" data-reactid="326"></a></div>
  </div>
</div>
