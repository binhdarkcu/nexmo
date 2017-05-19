<div id="dashboard" class="authentication">
	<?php get_header('login')?>

	

	<?php
	    session_start();
	    if(isset($_SESSION['user'])){
	        $link = get_site_url().'/dashboard';
	        echo "<script>window.location.href = '$link'</script>";
	    }

	    $logged = false;
	    $message = "";
	    if((isset($_GET['do']) && $_GET['do'] == 'userLogin'))
	    {
	        global $wpdb;
	        $email = $_POST['email'];
	        $password = $_POST['password'];
					$user = get_user_by('email', $email);
					var_dump ($user) ;
					if ( $user && wp_check_password( $password, $user->data->user_pass, $user->ID) )
	        {
	            $data = array();
	            foreach ($results as $key => $value) {
	                $data[$key] = $value;
	            }
	            $logged = true;
	            $message = "Login success";
	            unset($data['password']);
	            $_SESSION['user'] = $data;
	            $link = get_site_url().'/dashboard';
	            echo "<script>setTimeout(function(){window.location.href = '$link';},1000);</script>";
	        }
	        else{
	            $message = "Login failed";
	        }
	    }
	?>
	<main id="login" class="container-content">
		<div class="container" id="main">
			<div class="row login-content">
				<div class="col-md-12">
					<h1>Login</h1>
					<form id="loginForm" name="loginForm" action="<?php echo add_query_arg('do', 'userLogin', get_permalink( $post->ID )); ?>" method="post" class="form-validate has-validation-callback">
					    <input type="hidden" name="_csrf" value="">

					    <div class="row">
					        <div class="form-group col-md-12">
					            <label class="sr-only" for="email">Email address</label>
					            <input id="username" name="email" placeholder="Email address" class="form-control input-lg" data-validation="username_custom" type="email" value="" data-validation-required="true" data-validation-email="true" data-validation-error-msg="Provide your email address">
					            <span class="fa fa-2x form-control-feedback hide icon-display"></span>

					        </div>
					    </div>
					    <div class="row">
					        <div class="form-group col-md-12">
					            <label class="sr-only" for="password">Password</label>
					            <input id="password" name="password" placeholder="Password" class="form-control input-lg" data-validation="password_custom" type="password" value="" data-validation-required="true" data-validation-error-msg="Provide your password">
					            <span class="fa fa-2x form-control-feedback hide icon-display"></span>

					        </div>
					    </div>

					    <div class="row">
					        <div class="form-group col-md-12">
					            <input type="submit" id="btn_login" name="_signUpForm" class="btn btn-primary btn-lg btn-block" value="LOGIN">
					        </div>
					    </div>
					    <div class="row">
					        <div class="form-group col-md-12">
					            <a href="/sign-in/forgot-password" id="forgot_link" class="btn btn-link on-desktop" alt="Forgot your password?">Forgot your password?</a>
					            <a href="/sign-up" role="button" id="signinButton" class="btn btn-link on-mobile pad-top">Don't have an account? Sign Up</a>
					        </div>
					    </div>
					</form>
					<button type="button" onclick="trySampleRequest();" class="btn social-buttons social-google">GOOGLE
						<img alt="google" src="<?php echo TEMPLATE_PATH;?>/resources/img/google.png">
				    </button>
				</div>
			</div>
		</div>
	</main>
</div>
<?php echo get_footer('login')?>
