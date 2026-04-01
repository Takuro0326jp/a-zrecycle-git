<?php
// Sidebar widget
 if(function_exists('register_sidebar'))
	  register_sidebar(array(
	  	'name' => 'Sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
 ));

// Custom menu
add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}


// 2012/01/24 11:40:05 ADD
// TEST ---
register_sidebar_widget(__('CategoryLink','hoge'), 'widget_ctgr_links');
// register_widget_control( 'Sample', 'sample_control' );
function widget_ctgr_links(){
echo '<!--<p>Hello Wordpress</p>-->';
}
// TEST ---
// 2012/01/24 11:40:05 ADD





function update_profile_fields( $contactmethods ) {
    unset($contactmethods['aim']);
    unset($contactmethods['jabber']);
    unset($contactmethods['yim']);
    return $contactmethods;
}
add_filter('user_contactmethods','update_profile_fields',10,1);



?>
<?php
define('HEADER_TEXTCOLOR', '000'); //  Default text color
define('HEADER_IMAGE', '%s/images/default.jpg'); // %s is theme dir uri, set a default image
define('HEADER_IMAGE_WIDTH', 960); //  Default image width is actually the div's height
define('HEADER_IMAGE_HEIGHT', 450);  // Same for height
define('NO_HEADER_TEXT', true );

function header_style() {
    //  This function defines the style for the theme
    //  You can change these selectors to match your theme
?>
<style type="text/css">
#header {
    background: url(<?php header_image() ?>) no-repeat;
    height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
    width:<?php echo HEADER_IMAGE_WIDTH; ?>px;
}
<?php
//  Has the text been hidden?
//  If so, set display to equal none
if ( 'blank' == get_header_textcolor() ) { ?>
#header h1, #header #desc {
    display: none;
}
<?php } else {
    //  Otherwise, set the color to be the user selected one
    ?>
#header h1 a, #desc {
    color:#<?php header_textcolor() ?>;
}
<?php } ?>
</style>
<?php
}
function admin_header_style() {
    //  This function styles the admin page
?>
<style type="text/css">
#headimg {
    background: url(<?php header_image() ?>) no-repeat;
    height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
    width:<?php echo HEADER_IMAGE_WIDTH; ?>px;
    padding:0 0 0 18px;
    font-family: arial;
}
#headimg h1 {
    padding-top:50px;
    margin: 0;
}
#headimg h1 a, #desc {
    color: #<?php header_textcolor() ?>;
    text-decoration: none;
    border-bottom: none;
}
#desc {
    padding-top: 15px;
    margin-right: 30px;
}
<?php if ( 'blank' == get_header_textcolor() ) { ?>
#headimg h1, #headimg #desc {
    display: none;
}
#headimg h1 a, #headimg #desc {
    color:#<?php echo HEADER_TEXTCOLOR ?>;
}
<?php } ?>
</style>
<?php
}
add_custom_image_header('header_style', 'admin_header_style');
add_filter('login_errors',create_function('$a', "return null;"));

?>
<?php remove_action('wp_head', 'wp_generator'); ?>
