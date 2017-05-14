<?php get_template_part("tpl", "head");?>
<link rel="stylesheet" href="style.css">
<section class="Navigation">
    <div class="Navigation-inner">
        <div class="Navigation-burger">
            <span>line</span>
            <span>line</span>
            <span>line</span>
        </div>

        <a href="<?php echo HOME_URL;?>" class="Navigation-logo">Nexmo</a>

        <div class="Navigation-content">
            <div class="Navigation-content-opacity"></div>
            <div class="Navigation-content-blur"></div>
            <nav>
                <ul id="menu-navigation-level2" class="Navigation-level2">
                    <li><a href="#" class="Navigation-Dropdown">Products &amp; Pricing</a>
                        <ul class="Navigation-level2-child">
                            <?php
                                $arg_product = array(
                                    'post_type'                     => 'products',
                                     'posts_per_page' =>  3 ,
                                    'order'          => 'asc'
                                );
                                $products_menus = get_posts($arg_product);
                                foreach ( $products_menus as $products_menu ) {
                             ?>
                            <li><a href="<?php echo get_the_permalink($products_menu->ID);?>" class="nav-sms"><?php echo $products_menu->post_title;?></a></li>
                            <<?php } ?>
                        </ul>
                    </li>
                    <li><a href="<?php echo HOME_URL;?>/use-cases/" class="">Use Cases</a></li>
                    <li><a href="<?php echo HOME_URL;?>/why-nexmo/" class="">Why Nexmo</a></li>
                    <li><a href="<?php echo HOME_URL;?>/sign-up" class="uppercase">Try it free</a></li>
                </ul>
                <ul id="menu-navigation-level1" class="Navigation-level1">
                    <li><a href="<?php echo HOME_URL;?>/documents" class="">Docs</a></li>
                    <li><a href="<?php echo HOME_URL;?>/support" class="">Support</a></li>
                    <li><a href="<?php echo HOME_URL;?>/sign-in" class="uppercase">SIGN IN</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="Navigation-content--sticky">
        <div class="Navigation-contentInner--sticky">

            <div class="Navigation-contentLogo--sticky"><a href="/"><span class="hidden">Nexmo</span></a></div>
            <nav>
                <ul id="menu-navigation-level2-1" class="Navigation-level2">
                    <li><a href="#" class="Navigation-Dropdown">Products &amp; Pricing</a>
                        <ul class="Navigation-level2-child">
                            <li><a href="https://www.nexmo.com/products/sms/" class="nav-sms">SMS</a></li>
                            <li><a href="https://www.nexmo.com/products/voice/" class="nav-voice">Voice</a></li>
                            <li><a href="https://www.nexmo.com/products/verify/" class="nav-verify">Verify</a></li>
                            <li><a href="https://www.nexmo.com/products/chat-app/" class="nav-chat">Chat App</a></li>
                            <li><a href="https://www.nexmo.com/products/number-insight/" class="nav-insight">Number Insight</a></li>
                        </ul>
                    </li>
                    <li><a href="https://www.nexmo.com/use-cases/" class="">Use Cases</a></li>
                    <li><a href="https://www.nexmo.com/why-nexmo/" class="">Why Nexmo</a></li>
                    <li><a href="https://dashboard.nexmo.com/sign-up" class="uppercase">Try it free</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
