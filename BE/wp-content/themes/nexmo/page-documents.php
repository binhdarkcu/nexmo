<?php /* Template Name: Documents Template */ ?>
<?php get_header("documents");?>
<?php $currentpage = get_queried_object();?>
<main id="content-wrapper" class="documents-page">

    <div class="container">
        <div class="row ">

            <?php get_sidebar("documents")?>

            <!-- main content -->
            <div class="col-xs-12 col-md-9">
                <section class="main-content">
                    <?php if(is_page("documents")) {?>
                        <div class="document-block">
                            <?php
                                $category = 'documents_category';

                                // get the terms of taxonomy
                                $terms_category = get_terms( $category, [
                                  'parent' => 0
                                ]);
                                foreach( $terms_category as $cat ) {
                            ?>
                            <div class="col-xs-12 col-md-6 ">
                                <div class="border-solid">
                                    <figure>
                                        <a href="<?php echo get_term_link( $cat );?>"><img src="<?php the_field("category_icon", $cat)?>" alt="messaging_home"></a>
                                    </figure>
                                    <h3 class="home-table-header" align="center"><a href="<?php echo get_term_link( $cat );?>"><?php echo $cat->name?></a></h3>
                                    <p align="center"><?php echo $cat->description;?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    <?php } else if($currentpage->post_parent > 0){ ?>
                        <h1><?php echo $currentpage->post_title;?></h1>
                        <?php echo $currentpage -> post_content; ?>
                    <?php }?>
                </section>
            </div>

        </div>
    </div>
</main>
<?php get_footer();?>
