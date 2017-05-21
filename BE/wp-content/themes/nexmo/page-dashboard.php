<div id="dashboard">
	<?php get_header('dashboard')?>
	<?php
	if(isset($_SESSION['userdata'])){
	  $userAfterParse = get_object_vars($_SESSION['userdata']['user']);
	}else {
		//header("Location: " .HOME_URL.'/sign-in');
		//exit();
	}
	?>
	<script type="text/javascript">
	$(document).ready(function(){
		var i = 0;
		$('#secret-eye').click(function(){
			if(i==0){
				i++;
				$(this).removeClass('fa-eye').addClass('fa-eye-slash')
				$(this).parent().find('#api-secret-value').attr('type', 'text')
			}
			else{
				i = 0;
				$(this).removeClass('fa-eye-slash').addClass('fa-eye')
				$(this).parent().find('#api-secret-value').attr('type', 'password')
			}
		})
	})
	</script>

	<?php
	while ( have_posts() ) : the_post();
	?>
	<div class="container getting-started-below-navbar">
		<div class="col-xs-12">
		    <div id="welcome-text">
		        <h1>Welcome to Nexmo, <?php echo $userAfterParse['displayName']?>!</h1>
		    </div>
		    <p class="start-testing">Start testing now with your €2 free credit and API credentials:</p>
		    <div id="key-wrapper">
		        <p class="key-secret">
		            key
		            <input readonly="readonly" type="text" value="b2a2ba30" id="api-key-value">
		        </p>
		        <ul id="multiple-api-keys">
		            <a href="#">
		                <li>b2a2ba30 (Master)</li>
		            </a>
		        </ul>
		    </div>

		    <p id="secret-top" class="last">
		        secret
		        <input readonly="readonly" type="password" value="602e9c1849f7f055" id="api-secret-value">
		        <i id="secret-eye" class="fa fa-eye" aria-hidden="true"></i>
		    </p>
		</div>
	</div>
	<main id="content-wrapper-getting-started">
		<div class="container">
			<div class="row-fluid">
				<h3 class="sub-header">Try the API</h3>
				<div class="col-md-8 getting-started-tab-container">
					<?php the_content();?>
				</div>
				<div class="col-md-4 ready-more active">
                    <p>Your calls are saved in your voice history.</p>
                    <br>
                    <p>Check out more information about Nexmo's Voice API:</p>
                    <ul>
                        <li><a target="_blank" href="<?php echo HOME_URL;?>/documents">Documentation</a></li>
                        <li><a target="_blank" href="<?php echo HOME_URL;?>/support">Support</a></li>
                    </ul>
                </div>
			</div>
		</div>
	</main>
<?php endwhile;?>
</div>

<?php get_footer();?>