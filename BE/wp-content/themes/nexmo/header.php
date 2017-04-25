<?php get_template_part("tpl", "head");?>
<div class="header Nav-header">
  <div class="floating-menu visible">
     <div class="center-container">
        <div class="desktop">
           <div class="left">
              <a class="logo" href="https://www.nexmo.com/" style="background-image: url(<?php echo get_field('logo_image', 'option');?>)"></a>
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
                                               <div class="page-copy"><?php echo $products_menu->post_content;?></div>
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
                                         <a href="https://www.nexmo.com/blog" data-reactid="131">
                                            <div class="PageNavLink" data-reactid="132">
                                               <div class="page-title page-link" data-reactid="133">Blog</div>
                                               <!-- react-text: 134 --><!-- /react-text -->
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                      <div>
                                         <a href="https://www.nexmo.com/blog/2017/04/14/ai-powered-chatbots-customer-service/">
                                            <div class="PageNavLink more-right-padding no-top-padding more-left-margin">
                                               <div class="page-title page-link"></div>
                                               <div class="page-copy">AI-powered Chatbots Augment the Future of Customer Service</div>
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                      <div>
                                         <a href="https://www.nexmo.com/blog/2017/04/11/implement-two-factor-authentication-2fa-web-apps-node-js-dr/">
                                            <div class="PageNavLink more-right-padding no-top-padding more-left-margin">
                                               <div class="page-title page-link"></div>
                                               <div class="page-copy">How to Implement Two-Factor Authentication (2FA) to Your Web Apps with Node.js</div>
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                      <div>
                                         <a href="https://www.nexmo.com/blog/2017/04/05/no-developer-no-problem-turnkey-ivr-with-telerivet-and-nexmo/">
                                            <div class="PageNavLink more-right-padding no-top-padding more-left-margin">
                                               <div class="page-title page-link"></div>
                                               <div class="page-copy">No Developer? No Problem. Turnkey Cloud IVR with Telerivet and Nexmo</div>
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
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
                                   <td data-reactid="144"><a class="section-title" href="https://docs.nexmo.com/" data-reactid="145">Documentation</a></td>
                                </tr>
                                <tr>
                                   <td>
                                      <div>
                                         <a href="https://docs.nexmo.com/messaging">
                                            <div class="PageNavLink no-top-padding more-right-padding small-link more-left-margin">
                                               <div class="page-title page-link">Messaging</div>
                                               <!-- react-text: 755 --><!-- /react-text -->
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                      <div>
                                         <a href="https://docs.nexmo.com/voice">
                                            <div class="PageNavLink no-top-padding more-right-padding small-link more-left-margin">
                                               <div class="page-title page-link">Voice</div>
                                               <!-- react-text: 762 --><!-- /react-text -->
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                      <div>
                                         <a href="https://docs.nexmo.com/verify">
                                            <div class="PageNavLink no-top-padding more-right-padding small-link more-left-margin">
                                               <div class="page-title page-link">Verify</div>
                                               <!-- react-text: 769 --><!-- /react-text -->
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                      <div>
                                         <a href="https://docs.nexmo.com/number-insight">
                                            <div class="PageNavLink no-top-padding more-right-padding small-link more-left-margin">
                                               <div class="page-title page-link">Number Insight</div>
                                               <!-- react-text: 776 --><!-- /react-text -->
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                             </tbody>
                          </table>
                       </div>
                       <div class="NavGroup" data-reactid="174">
                          <table data-reactid="175">
                             <tbody data-reactid="176">
                                <tr data-reactid="177">
                                   <td data-reactid="178"></td>
                                </tr>
                                <tr>
                                   <td>
                                      <div>
                                         <a href="https://docs.nexmo.com/libraries">
                                            <div class="PageNavLink more-right-padding">
                                               <div class="page-title page-link">Libraries</div>
                                               <div class="page-copy">Easily integrate communication features into your app</div>
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                      <div>
                                         <a href="https://docs.nexmo.com/tutorials">
                                            <div class="PageNavLink more-right-padding">
                                               <div class="page-title page-link">Tutorials</div>
                                               <div class="page-copy">Implement our use cases using Nexmo libraries</div>
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                      <div>
                                         <a href="https://docs.nexmo.com/tools">
                                            <div class="PageNavLink more-right-padding">
                                               <div class="page-title page-link">Tools</div>
                                               <div class="page-copy">Discover all the components to get started and manage your Nexmo account</div>
                                            </div>
                                         </a>
                                      </div>
                                   </td>
                                </tr>
                             </tbody>
                          </table>
                       </div>
                       <!-- react-text: 200 --><!-- /react-text --><!-- react-text: 201 --><!-- /react-text -->
                    </div>
                 </div>
              </div>
           </div>
           <div class="right" data-reactid="202">
              <a class="link" href="https://help.nexmo.com/hc/en-us" data-reactid="203">Support</a><a class="link" href="https://dashboard.nexmo.com/sign-in" data-reactid="204">Login</a>
              <div class="button-container" data-reactid="205"><a role="link" aria-label="Try it free" class="Btn secondary" href="https://dashboard.nexmo.com/sign-up" data-reactid="206">Sign Up</a></div>
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
                          <tr>
                             <td>
                                <div>
                                   <a href="https://www.nexmo.com/products/sms">
                                      <div class="PageNavLink">
                                         <div class="page-title page-link">SMS</div>
                                         <!-- react-text: 804 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                             <td>
                                <div>
                                   <a href="https://www.nexmo.com/products/chat">
                                      <div class="PageNavLink more-right-padding">
                                         <div class="page-title page-link">Chat App</div>
                                         <!-- react-text: 810 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>
                                <div>
                                   <a href="https://www.nexmo.com/products/voice">
                                      <div class="PageNavLink no-top-padding">
                                         <div class="page-title page-link">Voice</div>
                                         <!-- react-text: 817 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                             <td>
                                <div>
                                   <a href="https://www.nexmo.com/products/sip-trunking">
                                      <div class="PageNavLink no-top-padding more-right-padding">
                                         <div class="page-title page-link">SIP Trunking</div>
                                         <!-- react-text: 823 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>
                                <div>
                                   <a href="https://www.nexmo.com/products/verify">
                                      <div class="PageNavLink no-top-padding">
                                         <div class="page-title page-link">Verify</div>
                                         <!-- react-text: 830 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                             <td>
                                <div>
                                   <a href="https://www.nexmo.com/products/number-insight">
                                      <div class="PageNavLink no-top-padding more-right-padding">
                                         <div class="page-title page-link">Number Insight</div>
                                         <!-- react-text: 836 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>
                                <div>
                                   <a href="https://www.nexmo.com/products/phone-numbers">
                                      <div class="PageNavLink no-top-padding">
                                         <div class="page-title page-link">Phone Numbers</div>
                                         <!-- react-text: 843 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                             <td>
                                <div>
                                   <div class="PageNavLink">
                                      <div class="page-title page-link"></div>
                                      <!-- react-text: 848 --><!-- /react-text -->
                                   </div>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>
                                <div>
                                   <a href="https://www.nexmo.com/use-cases">
                                      <div class="PageNavLink border-top">
                                         <div class="page-title page-link">Use Cases</div>
                                         <!-- react-text: 855 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                             <td>
                                <div>
                                   <a href="https://www.nexmo.com/careers">
                                      <div class="PageNavLink border-top">
                                         <div class="page-title page-link">Jobs</div>
                                         <!-- react-text: 861 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>
                                <div>
                                   <a href="https://www.nexmo.com/pricing">
                                      <div class="PageNavLink no-top-padding">
                                         <div class="page-title page-link">Pricing</div>
                                         <!-- react-text: 868 --><!-- /react-text -->
                                      </div>
                                   </a>
                                </div>
                             </td>
                             <td>
                                <div>
                                   <a href="https://www.nexmo.com/blog">
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
                                   <a href="https://www.nexmo.com/platform">
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
                                   <a href="https://dashboard.nexmo.com/">
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
