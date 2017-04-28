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
                    <?php  custom_breadcrumbs();?>
                    <?php if(is_page("documents")) {?>
                        <div class="document-block">
                            <?php
                                $arg_product_doc = array(
                                    'post_type'                     => 'products',
                                     'posts_per_page' =>  -1 ,
                                    'order'			 => 'asc'
                                );
                                $arg_product_docs = get_posts($arg_product_doc);
                                foreach ( $arg_product_docs as $products_doc ) {
                             ?>
                            <div class="col-xs-12 col-md-6 ">
                                <div class="border-solid">
                                    <figure>
                                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $products_doc -> ID ), 'single-post-thumbnail'); ?>
                                        <a href="<?php echo HOME_URL;?>/documents/<?php echo $products_doc->post_name;?>"><img src="<?php echo $image[0];?>" alt="messaging_home"></a>
                                    </figure>
                                    <h3 class="home-table-header" align="center"><a href="<?php echo HOME_URL;?>/documents/<?php echo $products_doc->post_name;?>"><?php echo $products_doc->name?></a></h3>
                                    <p align="center"><?php echo $products_doc->post_content;?></p>
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
