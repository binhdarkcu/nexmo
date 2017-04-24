<?php get_header();
global $post;
while ( have_posts() ) : the_post();
?>

<div class="<?php echo( basename(get_permalink()) );?>-product-page">
    <section class="Hero Hero--light Hero--blue-purple">
        <div class="Hero-midGround"></div>
        <div class="Hero-wrapper">
            <div class="Hero-content">
                <div class="Hero-contentInner">
                    <div class="Hero-contentIconImgContainer"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDEuM21tIiBoZWlnaHQ9IjExNi4xbW0iIHZpZXdCb3g9IjAgMCAyODcuMSAzMjkuMSI+PGRlZnM+PHN0eWxlPi5hLC5le2ZpbGw6I2ZmZn0uYSwuY3tvcGFjaXR5Oi41fS5hLC5iLC5je2lzb2xhdGlvbjppc29sYXRlfS5iLC5jLC5ke2ZpbGw6bm9uZTtzdHJva2U6I2ZmZjtzdHJva2UtbWl0ZXJsaW1pdDoxMH0uYiwuY3tzdHJva2Utd2lkdGg6MnB4fS5ie29wYWNpdHk6LjY2fS5je3N0cm9rZS1saW5lY2FwOnJvdW5kfS5ke3N0cm9rZS13aWR0aDo0cHh9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmhwLWljb24taGVyby1zbXM8L3RpdGxlPjxwYXRoIGNsYXNzPSJhIiBkPSJNNTkuNCAxMDQuMWExNSAxNSAwIDEgMS0xNS0xNSAxNSAxNSAwIDAgMSAxNSAxNXptOTEuMy03LjhINjguOXYxNS42aDgxLjhWOTYuM3pNMTE5IDEzNC44SDI5LjN2MTUuNkgxMTl2LTE1LjZ6Ii8+PGNpcmNsZSBjbGFzcz0iYiIgY3g9IjkwLjciIGN5PSIyMzQuNyIgcj0iMTEuNyIvPjxwYXRoIGNsYXNzPSJjIiBkPSJNMjY5LjcgMjg4LjlhODMgODMgMCAxIDAtMzQuMSAyN2w0NC44IDExLjh6Ii8+PHBhdGggY2xhc3M9ImQiIGQ9Ik0xMjQuOCAyNjkuOEgzMy4yQTMxLjIgMzEuMiAwIDAgMSAyIDIzOC42VjMzLjJBMzEuMiAzMS4yIDAgMCAxIDMzLjIgMmgxMTQuOWEzMS4yIDMxLjIgMCAwIDEgMzEuMiAzMS4ydjk2LjYiLz48cGF0aCBjbGFzcz0iZSIgZD0iTTE4Ni42IDEyOC44aC0xNC41bDcuMiA3LjMgNy4zLTcuM3oiLz48L3N2Zz4=" class="Hero-contentIconImg"></div>
                    <h1><?php single_post_title(); ?> </h1>

                    <h2><?php the_field('product_sub_title'); ?></h2>
                    <h3>
                        <p><?php the_field('product_short_description'); ?></p>
                    </h3><a role="link" aria-label="Try it free" class="Btn" href="https://dashboard.nexmo.com/sign-up">Try it free</a><a role="link" aria-label="Contact Sales" class="Btn secondary" href="/contact-sales">Contact Sales</a></div>
            </div>
        </div>
        <section class="Module Demo">
            <div class="Demo-wrapper">
                <div class="Demo-code">
                    <h2>Test drive the code</h2>
                    <h3>Try the code to see just how simple our SMS API is.</h3>
                    <div class="Demo-code-block"><code><pre><?php the_content(); ?></pre></code><span class="Demo-code-copy">Copy</span></div>
                    </div>
                    <div class="Demo-docs">
                        <h2><?php the_field('docs_title'); ?></h2>
                        <h3><?php the_field('docs_description'); ?></h3>
                        <div class="Demo-docs-wrapper">
                        <?php if(get_field('docs_files')): ?>

                            <?php while(the_repeater_field('docs_files')): ?>
                                <div class="Demo-docs-items"><a href="<?php the_sub_field('url_doc')?>"><span><?php the_sub_field('name_doc_file')?></span></a></div>
                            <?php endwhile; ?>

                         <?php endif;?>
                            
                        </div>
                        <a href="https://docs.nexmo.com/api-ref/sms-api" class="Btn">View docs            </a>
                        <a href="https://docs.nexmo.com/libraries/SMSAPI" class="BtnLink">Browse libraries            </a></div>
                    </div>
        </section>
    </section>
    <section class="InfoBox is-grey ">
        <div class="InfoBox-inner">
            <div class="InfoBox-content InfoBox-content--col14">
                <h4><?php the_field('benefit_title'); ?></h4>
                <p><?php the_field('benefit_description'); ?></p>
                <!-- react-text: 2146 -->
                <!-- /react-text -->
            </div>
        </div>
    </section>
    <section class="FeaturesMain is-grey has-bottom-padding">
        <div class="FeaturesMain-content">
            <ul>
                <?php if(get_field('benefit_content')): ?>

                    <?php while(the_repeater_field('benefit_content')): ?>
                        <li><img src="<?php the_sub_field('benefit_content_icon')?>">
                            <h4><?php the_sub_field('benefit_content_title')?></h4>
                            <p><?php the_sub_field('benefit_content_description')?></p>
                            <p class="FeaturesMain-footnote"><?php the_sub_field('benefit_sub_content_description')?></p>
                        </li>
                    <?php endwhile; ?>

                 <?php endif;?>
                
            </ul>
        </div>
    </section>
    <section class="FeaturesSecondary  is-grey has-bottom-padding">
        <div class="FeaturesSecondary-content">
            <div class="FeaturesSecondary-content">
                <?php if(get_field('function_content')): ?>

                    <?php while(the_repeater_field('function_content')): ?>
                        <div class="FeaturesSecondary-item">
                            <div>
                                <h5>
                                    <?php if(!get_sub_field('function_content_url')) {
                                        the_sub_field('function_content_title');
                                    }
                                            
                                    else { ?>
                                        <a href="<?php the_sub_field('function_content_url') ?>">
                                            <?php the_sub_field('function_content_title')?>
                                        </a>
                                        <?php } ?>
                                </h5>
                                <p> <?php the_sub_field('function_content_description')?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>

                 <?php endif;?>
                
            </div>
        </div>
    </section>
    <?php get_template_part("tpl","client")?>
</div>
<?php endwhile; ?>
<?php get_footer();?>
