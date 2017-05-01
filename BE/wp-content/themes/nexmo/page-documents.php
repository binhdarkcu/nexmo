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
                                global $post;
                                if ($post->post_parent)	{
                                	$ancestors=get_post_ancestors($post->ID);
                                	$root=count($ancestors)-1;
                                	$parent = $ancestors[$root];
                                } else {
                                	$parent = $post->ID;
                                }
                                $document_pages = get_pages('hierarchical=0&child_of=' . $parent);

                                foreach ( $document_pages as $products_doc ) {
                                    if($products_doc -> post_parent == $parent) {
                             ?>
                            <div class="col-xs-12 col-md-6 ">
                                <div class="border-solid">
                                    <figure>
                                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $products_doc -> ID ), 'single-post-thumbnail'); ?>
                                        <a href="<?php echo get_the_permalink($products_doc -> ID)?>"><img src="<?php echo $image[0];?>" alt="messaging_home"></a>
                                    </figure>
                                    <h3 class="home-table-header" align="center"><a href="<?php echo get_the_permalink($products_doc->ID);?>"><?php echo $products_doc->post_title?></a></h3>
                                    <p align="center"><?php echo get_field("document_short_description", $products_doc->ID);?></p>
                                </div>
                            </div>
                            <?php } }?>
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
