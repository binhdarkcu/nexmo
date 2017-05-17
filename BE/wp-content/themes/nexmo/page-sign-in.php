<div id="dashboard" class="authentication">
	<?php get_header('login')?>

	<script>
	  var YOUR_CLIENT_ID = '887811829886-9mgp1uk5qhlsk67otu1nkmg5927pll9f.apps.googleusercontent.com';
	  var YOUR_REDIRECT_URI = 'http://localhost:8080/Nexmo/Source/BE/sign-in';
	  var queryString = location.hash.substring(1);

	  // Parse query string to see if page request is coming from OAuth 2.0 server.
	  var params = {};
	  var regex = /([^&=]+)=([^&]*)/g, m;
	  while (m = regex.exec(queryString)) {
	    params[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
	    // Try to exchange the param values for an access token.
	    exchangeOAuth2Token(params);
	  }

	  // If there's an access token, try an API request.
	  // Otherwise, start OAuth 2.0 flow.
	  function trySampleRequest() {
	    var params = JSON.parse(localStorage.getItem('oauth2-test-params'));
	    if (params && params['access_token']) {

	      var xhr = new XMLHttpRequest();
	      xhr.open('GET',
	          'https://www.googleapis.com/drive/v3/about?fields=user&' +
	          'access_token=' + params['access_token']);
	      xhr.onreadystatechange = function (e) {
	        console.log(xhr.response);
					localStorage.setItem('oauth2-params',xhr.response );
					window.location = "/Nexmo/Source/BE/";
					//redirect to home
	      };
	      xhr.send(null);
	    } else {
	      oauth2SignIn();
	    }
	  }

	  /*
	   * Create form to request access token from Google's OAuth 2.0 server.
	   */
	  function oauth2SignIn() {
	    // Google's OAuth 2.0 endpoint for requesting an access token
	    var oauth2Endpoint = 'https://accounts.google.com/o/oauth2/v2/auth';

	    // Create element to open OAuth 2.0 endpoint in new window.
	    var form = document.createElement('form');
	    form.setAttribute('method', 'GET'); // Send as a GET request.
	    form.setAttribute('action', oauth2Endpoint);
	    // Parameters to pass to OAuth 2.0 endpoint.
	    var params = {'client_id': YOUR_CLIENT_ID,
	                  'redirect_uri': YOUR_REDIRECT_URI,
	                  'scope': 'https://www.googleapis.com/auth/drive.metadata.readonly',
	                  'state': 'try_sample_request',
	                  'include_granted_scopes': 'true',
	                  'response_type': 'token'};

	    // Add form parameters as hidden input values.
	    for (var p in params) {
	      var input = document.createElement('input');
	      input.setAttribute('type', 'hidden');
	      input.setAttribute('name', p);
	      input.setAttribute('value', params[p]);
	      form.appendChild(input);
	    }

	    // Add form to page and submit it to open the OAuth 2.0 endpoint.
	    document.body.appendChild(form);
	    form.submit();
	  }

	  /* Verify the access token received on the query string. */
	  function exchangeOAuth2Token(params) {
	    var oauth2Endpoint = 'https://www.googleapis.com/oauth2/v3/tokeninfo';
	    if (params['access_token']) {
	      var xhr = new XMLHttpRequest();
	      xhr.open('POST', oauth2Endpoint + '?access_token=' + params['access_token']);
	      xhr.onreadystatechange = function (e) {
	        var response = JSON.parse(xhr.response);
	        // When request is finished, verify that the 'aud' property in the
	        // response matches YOUR_CLIENT_ID.
	        if (xhr.readyState == 4 &&
	            xhr.status == 200 &&
	            response['aud'] &&
	            response['aud'] == YOUR_CLIENT_ID) {
	          // Store granted scopes in local storage to facilitate
	          // incremental authorization.
	          params['scope'] = response['scope'];
	          localStorage.setItem('oauth2-test-params', JSON.stringify(params) );

	          if (params['state'] == 'try_sample_request') {
	            trySampleRequest();
	          }
	        } else if (xhr.readyState == 4) {
	          console.log('There was an error processing the token, another ' +
	                      'response was returned, or the token was invalid.')
	        }
	      };
	      xhr.send(null);
	    }
	  }
	</script>


	<main id="login" class="container-content">
		<div class="container" id="main">
			<div class="row login-content">
				<div class="col-md-12">
					<h1>Login</h1>
					<form id="loginForm" name="loginForm" action="/secure_sign-in" method="post" class="form-validate has-validation-callback">
					    <input type="hidden" name="_csrf" value="">

					    <div class="row">
					        <div class="form-group col-md-12">
					            <label class="sr-only" for="email">Email address</label>
					            <input id="username" name="username" placeholder="Email address" class="form-control input-lg" data-validation="username_custom" type="email" value="" data-validation-required="true" data-validation-email="true" data-validation-error-msg="Provide your email address">
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
