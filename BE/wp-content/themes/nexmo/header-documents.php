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
                <li class="navbar-mobile navbar-mobile-first"><a href="<?php echo HOME_URL;?>/messaging">Messaging</a></li>
                <li class="navbar-mobile"><a href="https://docs.nexmo.com/voice">Voice</a></li>
                <li class="navbar-mobile"><a href="https://docs.nexmo.com/verify">Verify</a></li>
                <li class="navbar-mobile"><a href="https://docs.nexmo.com/number-insight">Number Insight</a></li>
                <li class="navbar-mobile"><a href="https://docs.nexmo.com/tools">Tools</a></li>
                <li class="navbar-mobile"><a href="https://docs.nexmo.com/tutorials">Tutorials</a></li>
            </ul>

        </div>

        <!--/.nav-collapse -->
    </div>
</nav>
