<?php get_header();
global $post;
while ( have_posts() ) : the_post();
?>

<div class="<?php echo( basename(get_permalink()) );?>-product-page">
    <section class="Hero Hero--light Hero--blue-purple">
        <div class="Hero-midGround" style="background-image: url(<?php echo get_field("product_background", get_the_ID());?>)"></div>
        <div class="Hero-wrapper">
            <div class="Hero-content">
                <div class="Hero-contentInner">
                    <div class="Hero-contentIconImgContainer"><img src="<?php echo get_field("product_icon", get_the_ID())?>" class="Hero-contentIconImg"></div>
                    <h1><?php single_post_title(); ?> </h1>

                    <h2><?php the_field('product_sub_title'); ?></h2>
                    <h3>
                        <p><?php the_field('product_short_description'); ?></p>
                    </h3><a role="link" aria-label="Try it free" class="Btn" href="<?php echo HOME_URL?>/sign-up">Try it free</a><a role="link" aria-label="Contact Sales" class="Btn secondary" href="/contact-sales">Contact Sales</a></div>
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
