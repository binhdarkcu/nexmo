<?php get_template_part("tpl", "head");?>
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/documents.css">
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/nexmo_documentation.css">
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/bootstrap.min.js"></script>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button id="nav-expander" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-docs" href="<?php echo HOME_URL;?>/documents">Nexmo</a>
        </div>
        <div id="navbar" class="navbar-collapse">
            <ul class="nav navbar-nav navbar-right pull-right">
                <li><a href="<?php echo HOME_URL;?>/contact" target="_blank">Support</a></li>
                <li><a href="<?php echo HOME_URL;?>/sign-in" target="_blank">Sign in</a></li>
                <li class="active"><a href="<?php echo HOME_URL;?>/sign-up" target="_blank">Try it for free</a></li>
                
                <?php
                $documents_id = get_page_by_path('documents')->ID;

                if ($post->post_parent) {
                    $ancestors=get_post_ancestors($documents_id);
                    $root=count($ancestors)-1;
                    $parent = $ancestors[$root];
                } else {
                    $parent = $post->ID;
                }

                $document_pages = get_pages('hierarchical=0&child_of=' . $documents_id);
                $i=0;
                foreach ( $document_pages as $products_doc ) {
                    $i++;
                    if($products_doc -> post_parent == 173 ) {
                ?>
                <li class="navbar-mobile"><a href="<?php echo get_the_permalink($products_doc->ID)?>"><?php echo $products_doc->post_title?></a></li>
                <?php } }?>
            </ul>

        </div>

        <!--/.nav-collapse -->
    </div>
</nav>
