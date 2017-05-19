<!DOCTYPE html>
<!-- saved from url=(0022)https://www.nexmo.com/ -->
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Google Tag Manager -->
      <base href="<?php echo get_bloginfo('template_url')?>/"></base>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="js/f5aa309349973e3432c82efef811d8d3f95a7fe0.2.js"></script>
      <script type="text/javascript" src="js/i.js"></script>
      <script type="text/javascript" src="js/analytics.min.js"></script>
      <script type="text/javascript" src="js/9163.js"></script>
      <script type="text/javascript" src="js/analytics.js"></script>
      <script type="text/javascript" src="js/gtm.js"></script>
      <script type="text/javascript" src="js/slick.min.js"></script>
      <script type="text/javascript" src="js/class.blog.js"></script>
      <script type="text/javascript" src="js/class.SiteMain.js"></script>
      <!-- End Google Tag Manager -->
      <title>Nexmo - APIs for SMS, Voice and Phone Verifications</title>
      <meta name="”description”" content="Quickly add global voice, SMS, and chat capabilities to your applications with Nexmo. Get started with a free trial.">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link rel="shortcut icon" href="https://www.nexmo.com/favicon.ico">

      <script>
        var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
        var HOME_URL = '<?= HOME_URL ?>';
        var TEMPLATE_PATH = '<?= TEMPLATE_PATH ?>'
      </script>

      <?php if(!is_page("sign-in")) {?>
      <link rel="stylesheet" href="styles.css">
      <?php }?>

      <link rel="stylesheet" href="css/all.css">
      <link rel="apple-touch-icon" href="https://www.nexmo.com/apple-touch-icon.png">
      <meta name="theme-color" content="#ffffff">
      <script async="true" type="text/javascript" src="js/roundtrip.js"></script>
   </head>
   <body>
      <!-- End Google Tag Manager (noscript) -->
      <div id="app" style="height:100%;position:relative;">
         <div class="wrapper">
            <div class="home-page">
              <script>
                var YOUR_CLIENT_ID = '156665770517-npunp40dr3lvpj4qp79515jcug1lbvmu.apps.googleusercontent.com';
                var YOUR_REDIRECT_URI = 'http://localhost:8080/Nexmo/Source/BE/dashboard';
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
                      window.location = "/Nexmo/Source/BE/dashboard";
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
