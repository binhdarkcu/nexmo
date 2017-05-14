<?php get_template_part("tpl", "head");?>
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/sign-up.css">
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/main.css">
<header>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header page-scroll">
                <a hreflang="en" target="_blank" href="<?php echo HOME_URL;?>" class="navbar-brand page-scroll"></a>
            </div>
			<ul class="nav navbar-nav navbar-right pull-right signup">
				<?php if(is_page("sign-in")) {?>
				<li>
					<a class="btn btn-primary sign-up-button" hreflang="en" href="<?php echo HOME_URL;?>/sign-up">SIGN UP</a>
				</li>
				<?php } else { ?>
				<li>
					<a class="btn btn-primary sign-up-button" hreflang="en" href="<?php echo HOME_URL;?>/sign-in">LOGIN</a>
				</li>
				<?php }?>
			</ul>
		</div>
	</nav>
</header>