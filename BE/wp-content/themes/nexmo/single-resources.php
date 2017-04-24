<?php get_header();?>
<?php
	while ( have_posts() ) : the_post();
	$post = get_post(get_the_ID());
?>

<div class="UseCaseSingle voice-broadcast">
    <section class="NewHero">
        <div class="NewHero-wrapper">
            <div class="NewHero-content">
                <div class="NewHero-contentInner">
                    <h1><?php echo the_title();?></h1>
                    <h2><?php echo the_content();?></h2>
                    <a role="link" aria-label="Try it free" class="Btn" href="<?php echo HOME_URL;?>/sign-up">Try it free</a>
                    <a role="link" aria-label="Contact Sales" class="Btn secondary" href="<?php echo HOME_URL;?>/contact">Contact Sales</a></div>
            </div>
        </div>
    </section>
    <!-- <section class="UseCaseSingle-section UseCaseSingle-customers">
        <div class="UseCaseSingle-customersItems">
            <div class="UseCaseSingle-customersItem askMyBuddy single">
                <div class="UseCaseSingle-customersItemText">
                    <div class="UseCaseSingle-customersItemCopy">
                        <ul>
                            <li>AskMyBuddy created a voice alerts broadcast system so its users can contact their personal alert network in an emergency situation.</li>
                            <li><a href="https://www.nexmo.com/blog/2016/09/08/help-is-never-out-of-reach-with-ask-my-buddy-and-nexmo-on-amazon-alexa/" class="UseCaseSingle-customersItemLink">Learn More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="UseCaseSingle-logos">
        <div class="inner">
            <div class="UseCaseSingle-logo fitbit"></div>
            <div class="UseCaseSingle-logo viber"></div>
            <div class="UseCaseSingle-logo github"></div>
            <div class="UseCaseSingle-logo expedia"></div>
            <div class="UseCaseSingle-logo airbnb"></div>
        </div>
    </section>
    <section class="UseCaseSingle-section UseCaseSingle-benefits">
        <?php
            $benefit_title = get_field('benefit_title',$post->ID, FALSE, FALSE);
            $short_desc = get_field('short_description',$post->ID, FALSE, FALSE);
        ?>
        <h2 class="UseCaseSingle-sectionTitle"><?php echo $benefit_title;?></h2>
        <h3 class="UseCaseSingle-sectionSubtitle"><?php echo $short_desc;?></h3>
        <div class="UseCaseSingle-benefitsItems">
        <?php if( have_rows('benefit_content') ): ?>
        	<?php while( have_rows('benefit_content') ): the_row();
        		// vars
        		$re_title = get_sub_field('title');
        		$re_desc = get_sub_field('description');
        		?>
                <div class="UseCaseSingle-benefitsItem">
                    <div class="UseCaseSingle-benefitsItemText">
                        <div class="UseCaseSingle-benefitsItemTitle"><?php echo $re_title;?></div>
                        <div class="UseCaseSingle-benefitsItemCopy">
                            <ul>
                                <li><?php echo $re_desc;?></li>
                            </ul>
                        </div>
                    </div>
                </div>
        	<?php endwhile; ?>
        <?php endif; ?>
        </div>
    </section>
    <?php
        $work_title = get_field('work_title',$post->ID, FALSE, FALSE);
        $work_desc = get_field('work_description',$post->ID, FALSE, FALSE);
        $step_display = get_field('step_display',$post->ID, FALSE, FALSE);
    ?>
    <section class="UseCaseSingle-section UseCaseSingle-howItWorks <?php if($step_display[0] == 'Chart type') echo 'is-tree'; else echo 'is-not-a-tree'; ?>">
        <div class="inner">
            <div class="UseCaseSingle-sectionTitle"><?php echo $work_title;?></div>
            <div class="UseCaseSingle-sectionSubtitle"><?php echo $work_desc;?></div>
            <div class="UseCaseSingle-howItWorksItems">
                <?php if( have_rows('steps') ): $i = 0;?>
                	<?php while( have_rows('steps') ): the_row();
                		// vars
                        $i++;
                		$step_icon = get_sub_field('step_icon');
                		$step_title = get_sub_field('title_step');
                        $step_desc = get_sub_field('description_step');
                		?>

                            <?php if($step_display[0] == 'Chart type') {?>
                                <div class="UseCaseSingle-howItWorksItem">
                                    <div class="outer">
                                        <div class="UseCaseSingle-howItWorksItemIcon" data-reactid="382"></div>
                                        <div class="inner" data-reactid="383">
                                            <div class="UseCaseSingle-howItWorksItemText" style="background-image: url(<?php echo $step_icon;?>);">
                                                <div class="UseCaseSingle-howItWorksItemTitle" data-reactid="385">User starts app</div>
                                                <div class="UseCaseSingle-howItWorksItemCopy" data-reactid="386">The user taps a button to request a verification code when they are ready to login.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="UseCaseSingle-howItWorksItem" style="background-image: url(<?php echo $step_icon;?>);">
                                    <div class="UseCaseSingle-howItWorksItemNumber"><?php echo $i;?></div>
                                    <div class="right-container">
                                        <div class="UseCaseSingle-howItWorksItemTitle"><?php echo $step_title;?></div>
                                        <div class="UseCaseSingle-howItWorksItemCopy"><?php echo $step_desc;?></div>
                                    </div>
                                </div>
                            <?php } ?>
                	<?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <section class="UseCaseSingle-section UseCaseSingle-buildingBlocks">
        <div class="inner">
            <?php
                $building_title = get_field('building_title',$post->ID, FALSE, FALSE);
                $building_desc = get_field('building_description',$post->ID, FALSE, FALSE);
            ?>
            <h2 class="UseCaseSingle-sectionTitle"><?php echo $building_title;?></h2>
            <h3 class="UseCaseSingle-sectionSubtitle"><?php echo $building_desc;?></h3>
            <div class="UseCaseSingle-buildingBlocksItems">
                <?php if( have_rows('building_content') ): $i = 0;?>
                	<?php while( have_rows('building_content') ): the_row();
                		// vars
                        $i++;
                		$building_icon = get_sub_field('building_icon');
                		$building_description = get_sub_field('building_description');
                		?>
                        <div class="UseCaseSingle-buildingBlocksItem">
                            <div class="inner">
                                <div class="UseCaseSingle-buildingBlocksItemIcon provision-lvn" style="background-image:url(<?php echo $building_icon;?>)"></div>
                                <div class="UseCaseSingle-buildingBlocksItemText">
                                    <div class="UseCaseSingle-buildingBlocksItemTitle"><?php echo $building_description;?></div>
                                </div>
                            </div>
                        </div>
                	<?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <section class="UseCaseSingle-section UseCaseSingle-help">
        <div class="inner">
            <h2 class="UseCaseSingle-sectionTitle"></h2>
            <h3 class="UseCaseSingle-sectionSubtitle"></h3>
            <section class="Carousel use-case-customer-notification-engagment-slider">
                <?php if( have_rows('resource_slider') ): ?>
                    <?php while( have_rows('resource_slider') ): the_row();
                        // vars
                        $slider_icon = get_sub_field('slider_icon');
                        $slider_title = get_sub_field('title');
                        $slider_description = get_sub_field('slider_description');
                        ?>
                        <div class="slick-slide slide">
                            <div class="slide-image" style="background-image:url(<?php echo $slider_icon;?>)"></div>
                            <div class="slide-header"><?php echo $slider_title;?></div>
                            <div class="slide-copy">
                                <?php echo $slider_description;?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </section>
        </div>
    </section>
    <section class="UseCaseSingle-section UseCaseSingle-related">
        <div class="inner">
            <h2 class="UseCaseSingle-sectionTitle">RELATED USE CASES</h2>
            <h3 class="UseCaseSingle-sectionSubtitle">You might also like...</h3>
            <div class="UseCaseSingle-relatedItems">
                <?php
                 	$args_usecases = array(
                 		'post_type'                     => 'resources',
                        'posts_per_page' =>  -1 ,
             		    'order'			 => 'asc',
                        'exclude'        => get_the_ID()
                 	);
                 	$usecases = get_posts($args_usecases);
                 	foreach ( $usecases as $usecase ) {
                 ?>
                <div class="UseCases-item">
                    <div class="UseCases-itemTitle"><?php echo $usecase -> post_title;?></div>
                    <div class="UseCase-itemTitleUnderline"></div>
                    <div class="UseCases-itemCopy"><?php echo $usecase-> post_content;?></div><a class="UseCases-itemReadMore" href="<?php echo get_the_permalink($usecase->ID)?>">How it works</a>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    <section class="UseCases-divider">
        <div class="UseCases-dividerLogo"></div>
    </section>
    <section class="UseCases-bottomCTA">
        <div class="UseCases-bottomCTATitle">THE NEXMO EXPERIENCE</div>
        <div class="UseCases-bottomCTACopy">Quality, Support, Scalability</div>
        <div class="UseCases-bottomCTAButton"><a role="link" class="Btn" href="https://dashboard.nexmo.com">TRY IT FREE</a></div>
    </section>
</div>
<?php endwhile; ?>
<?php get_footer();?>
