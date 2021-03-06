<?php get_template_part("tpl", "head"); ?>
<script>

  $(document).ready(function(){
    var userinfo = localStorage["firebaseui::rememberedAccounts"];
    var userinfo2 = localStorage["oauth2-params"];
    if(userinfo2){
      var userinfo2 = $.parseJSON(userinfo2);

      //using ajax to register account from google
      // http://sharethingz.com/wordpress/custom-user-registration-in-wordpress-using-ajax/
    }
		console.log(userinfo2)
    dataString = userinfo2 ; // array?
    if (dataString)
    {
      sessionStorage.setItem('SessionUser', dataString.user.displayName);
			$('.nav-name').text(dataString.user.displayName);
    }


    var jsonString = JSON.stringify(dataString);
    $.ajax({
        type: "POST",
        url: TEMPLATE_PATH+"/script.php",
        data: {data : jsonString},
        cache: false,

        success: function(){
            console.log('ok');
        }
    });


  var HOME_URL = '<?= HOME_URL ?>';
	console.log(sessionStorage.getItem("SessionUser"));
	if (!sessionStorage.getItem("SessionUser")) {
		//window.location.href = HOME_URL + '/sign-in';
	}
	var data = sessionStorage.getItem('SessionUser');
  })

</script>
<?php
if(!isset($_SESSION['userdata']))
	//header('Location: '.HOME_URL.'/sign-in');

?>


<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/main.css">
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/bootstrap.min.js"></script>

<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button id="nav-expander" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="<?php echo HOME_URL;?>"></a>
            </div>



            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right pull-right">


                    <li class="num-gs-spacing"><a id="nav_docs" href="<?php echo HOME_URL;?>/documents" target="_blank">Docs</a></li>
                    <li><a id="nav_support" href="<?php echo HOME_URL;?>/support" target="_blank">Support</a></li>
                    <li class="dropdown anchor-group acc-btn show-balance ">
                        <a href="#" data-toggle="dropdown" aria-expanded="false" role="button">
                            <div class="nav-name"><?php echo $userAfterParse['displayName']?> </div>
                            <i class="nexmo-dropdown fa fa-angle-down fa-2x" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="sub-nav">

                                    <a class="iplogout" onClick="SiteMain.redirectFuction()" href="javascript:void(0)" id="nav_sign_out"> Sign out</a>

                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--/.nav-collapse -->

        </div>
    </nav>
</header>
