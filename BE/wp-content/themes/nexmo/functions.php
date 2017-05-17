<?php
define('TEMPLATE_PATH',get_bloginfo('template_url'));
define('HOME_URL',get_home_url());
define('BlOG_NAME',get_bloginfo('blog_name'));
define('SLOGAN', get_bloginfo('description'));
//add_image_size( 'thumb-service',225,230,true);
function register_my_session()
{
  if( !session_id() )
  {
    session_start();
  }
}
add_action('init', 'register_my_session');

require_once ('google_login/Google/src/Google_Client.php');
require ('google_login/Google//src/contrib/Google_Oauth2Service.php');
require_once ('google_login/Google/src/contrib/Google_PlusService.php');
session_start();
 $api = new Google_Client();
 $api->setApplicationName("Nexmo"); // Set Application name
 $api->setClientId('887811829886-9mgp1uk5qhlsk67otu1nkmg5927pll9f.apps.googleusercontent.com'); // Set Client ID
 $api->setClientSecret('Iq1zvxc1kcdQpJgdUTndUhgK'); //Set client Secret
 $api->setAccessType('online'); // Access method
 $api->setScopes(array('https://www.googleapis.com/auth/plus.login', 'https://www.googleapis.com/auth/plus.me', 'https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile'));
 $api->setRedirectUri('http://localhost:8080/Nexmo/Source/BE/'); // Enter your file path (Redirect Uri) that you have set to get client ID in API console
 $service = new Google_PlusService($api);
 $URI = $api->createAuthUrl();



function login() {
    session_start();
    $api = new Google_Client();
    $api->setApplicationName("InfoTuts");
    $api->setClientId('887811829886-9mgp1uk5qhlsk67otu1nkmg5927pll9f.apps.googleusercontent.com');
    $api->setClientSecret('Iq1zvxc1kcdQpJgdUTndUhgK');
    $api->setAccessType('online');
    $api->setScopes(array('https://www.googleapis.com/auth/plus.login', 'https://www.googleapis.com/auth/plus.me', 'https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile'));
    $api->setRedirectUri('http://localhost:8080/Nexmo/Source/BE/');
    $service = new Google_PlusService($api);
    $oauth2 = new Google_Oauth2Service($api);
    $api->authenticate();
    $_SESSION['token'] = $api->getAccessToken();
    if (isset($_SESSION['token'])) {
      $set_asess_token = $api->setAccessToken($_SESSION['token']);
    }
    if ($api->getAccessToken()) {
      $data = $service->people->get('me');
      $user_data = $oauth2->userinfo->get();
    }
}

add_action( 'init', 'login' );

add_theme_support('post-thumbnails',array('post','page', 'clients', 'blog', 'products'));

//paging ajax for homeland
include 'inc/paging.php';

//paging ajax for homeland
//include 'inc/google.php';

//Change label for post
include 'inc/change_label_post.php';

//register menu
function register_menu() {
    register_nav_menus( array(
    	'menu_products' => 'Products - Menu',
    	'menu_docs' => 'Document - Menu',
        'menu_usecases' => 'UseCases - Menu',
    ) );
    register_nav_menu('menu_products',__( 'menu_products' ));
    register_nav_menu('menu_docs',__( 'menu_docs' ));
    register_nav_menu('menu_usecases',__( 'menu_usecases' ));
}
add_action( 'init', 'register_menu' );


if( function_exists('acf_add_options_page') ) {

   acf_add_options_page(array(
    'page_title'  => 'Theme Options',
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'theme-general-settings'
   ));

     acf_add_options_sub_page(array(
      'page_title'  => 'Header',
      'menu_title' => 'Header',
      'parent_slug' => 'theme-general-settings',
     ));
   acf_add_options_sub_page(array(
    'page_title'  => 'Footer',
    'menu_title' => 'Footer',
    'parent_slug' => 'theme-general-settings',
     ));
}

function wpb_list_child_pages() {

    global $post, $string;
    if ($post->post_parent)	{
    	$ancestors=get_post_ancestors($post->ID);
    	$root=count($ancestors)-1;
    	$parent = $ancestors[$root];
    } else {
    	$parent = $post->ID;
    }
    if ( is_page() && $parent )
    	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $parent . '&echo=0' );
    else
    	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $parent . '&echo=0' );
    if ( $childpages ) {
    	$string = '<ul class="nav nav-second-level collapse in">' . $childpages . '</ul>';
    }
    return $string;
}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');


function get_id_by_slug($page_slug, $slug_page_type = 'page') {

	$find_page = get_page_by_path($page_slug, OBJECT, $slug_page_type);
    print_r($find_page);
	if ($find_page) {
		return $find_page->ID;
	} else {
		return null;
	}
}

add_action('template_redirect', 'register_user');

function register_user(){
  if(isset($_GET['do']) && $_GET['do'] == 'register'):

    $errors = array();
    if(empty($_POST['firstName']))
       $errors[] = 'Please enter a name.<br>';
    if(empty($_POST['lastName']))
       $errors[] = 'Please enter a name.<br>';
    if(empty($_POST['email']))
       $errors[] = 'Please enter a email.<br>';
    if(empty($_POST['password']))
       $errors[] = 'Please enter a password.<br>';
    $user_fist_name = esc_attr($_POST['firstName']);
    $user_last_name = esc_attr($_POST['lastName']);
    $user_email = esc_attr($_POST['email']);
    $user_pass = esc_attr($_POST['password']);
    $user_phone = esc_attr($_POST['phone']);
    $user_company = esc_attr($_POST['companyName']);
    $sanitized_user_login = sanitize_user($user_email);
    $user_email = apply_filters('user_registration_email', $user_email);


    if(!is_email($user_email))
       $errors[] = 'Invalid e-mail.<br>';
    elseif(email_exists($user_email))
       $errors[] = 'This email is already registered.<br>';

    if(empty($sanitized_user_login) || !validate_username($user_email))
       $errors[] = 'Invalid user name.<br>';
    elseif(username_exists($sanitized_user_login))
       $errors[] = 'User name already exists.<br>';
    if(empty($errors)):
      $user_id = wp_create_user($sanitized_user_login, $user_pass, $user_email);
    if(!$user_id):
      $errors[] = 'Registration failed';
    else:
      update_user_option($user_id, 'default_password_nag', true, true);
      wp_new_user_notification($user_id, $user_pass);
      update_user_meta($user_id, 'first_name', $user_fist_name);
      update_user_meta($user_id, 'last_name', $user_last_name);
      update_user_meta($user_id, 'user_pass', $user_pass);
      update_user_meta ($user_id, 'user_phone', $user_phone);
        update_user_meta ($user_id, 'user_company', $user_company);

      // wp_cache_delete ($user_id, 'users');
      // wp_cache_delete ($user_login, 'userlogins');
      do_action ('user_register', $user_id);
      endif;
    endif;

    if(!empty($errors))
      define('REGISTRATION_ERROR', serialize($errors));
  endif;
}


function custom_user_profile_fields($user){
    if(is_object($user)){
      $company = esc_attr( get_the_author_meta( 'user_company', $user->ID ) );
      $phone = esc_attr( get_the_author_meta( 'user_phone', $user->ID ) );
    }

    else {
      $company = null;
      $phone = null;
    }
    ?>
    <h3>Extra profile information</h3>
    <table class="form-table">
        <tr>
            <th><label for="user_company">Company Name</label></th>
            <td>
                <input type="text" class="regular-text" name="user_company" value="<?php echo $company; ?>" id="user_company" /><br />
                <span class="description">Where are you?</span>
            </td>
        </tr>
        <tr>
            <th><label for="phone">Phone Number</label></th>
            <td>
                <input type="text" class="regular-text" name="phone" value="<?php echo $phone; ?>" id="phone" /><br />
            </td>
        </tr>
    </table>
<?php
}
add_action( 'show_user_profile', 'custom_user_profile_fields' );
add_action( 'edit_user_profile', 'custom_user_profile_fields' );
add_action( "user_new_form", "custom_user_profile_fields" );

function save_custom_user_profile_fields($user_id){
    # again do this only if you can
    if(!current_user_can('manage_options'))
        return false;

    # save my custom field
    update_user_meta($user_id, 'user_company', $_POST['user_company']);
        update_user_meta($user_id, 'user_phone', $_POST['phone']);
}
add_action('user_register', 'save_custom_user_profile_fields');
add_action('profile_update', 'save_custom_user_profile_fields');
