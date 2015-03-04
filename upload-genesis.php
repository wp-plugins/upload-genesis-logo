<?php
/*
Plugin Name: Upload Genesis Logo
Plugin URI: http://buykodo.com
Description: Upload genesis logo Easily.
Version: 1.0
Author: cybergeekshop
Author URI: http://www.cybergeekshop.net
License: GPL2
*/

###################################################
####### plugin Code ###############
###################################################

add_action('admin_menu', 'upload_logo_genesis');

function upload_logo_genesis()
{
// Check that the user is allowed to update options

    if (!current_user_can('manage_options'))
    {
        wp_die('You do not have sufficient permissions to access this page.');
    }
 
//create new top-level menu
	
   
    add_submenu_page( 'genesis', 'Upload Logo', 'Upload Logo', 'administrator', 'upload-genesis-logo','upload_genesis_function');
//call register settings function
	
    add_action('admin_init', 'upload_logo_settings');
	
}



function upload_logo_settings() {
	register_setting('genesis-upload-logo-setting', 'uploadgenesislogo');
	register_setting('genesis-upload-logo-setting', 'floatgenesislogo');
	register_setting('genesis-upload-logo-setting', 'centergenesislogo');
	register_setting('genesis-upload-logo-setting', 'widthgenesislogo');
	register_setting('genesis-upload-logo-setting', 'heightgenesislogo');
}

function upload_genesis_function() {
	
	include ('lib/page-view.php'); 
	
}




$logo = get_option('uploadgenesislogo');
if ( isset($logo[0])) {
	
	// Remove the site header
 remove_action( 'genesis_header', 'genesis_do_header' ); 
 add_action( 'genesis_header', 'genesis_do_headers' ); 
 
        /* Some code goes here */
function genesis_do_headers() {
	
// Remove the site title			
remove_action( 'genesis_site_title', 'genesis_seo_site_title' ); 
// Remove the site description
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );
 
	global $wp_registered_sidebars;
    $logo = get_option('uploadgenesislogo');
	$floatgenesislogo = get_option('floatgenesislogo');
	$centergenesislogo = get_option('centergenesislogo');
	$widthgenesislogo = get_option('widthgenesislogo');
	$heightgenesislogo = get_option('heightgenesislogo');
 
	genesis_markup( array(
		'html5'   => '<div %s style="margin-bottom:-20px; padding:0px;">',
		'xhtml'   => '<div id="title-area" style="margin-bottom:-20px; padding:0px;">',
		'context' => 'title-area',
	) );
	if ( isset($logo[0])) { ?>  <a href="<?php get_bloginfo('url');?>"><img style=" <?php if ( isset($floatgenesislogo[0])) { ?>float:<?php echo $floatgenesislogo; ?>; <?php }?> <?php if ( isset($widthgenesislogo[0])) { ?>width:<?php echo $widthgenesislogo; ?>px; <?php }?> <?php if ( isset($heightgenesislogo[0])) { ?>height:<?php echo $heightgenesislogo; ?>px; <?php }?> <?php if ( isset($centergenesislogo[0])) { ?>margin:0px auto; display:block;<?php }?>" src="<?php echo $logo; ?>" /></a>
 <?php
	}
 else {
	do_action( 'genesis_site_title' );
	do_action( 'genesis_site_description' );
      }
	echo '</div>';

 }
 

}
