<?php
/**
 * Plugin Name: YouOn Custom Functions
 * Plugin URI: https://github.com/NETBREDER/youon-custom-functions/
 * Description: Add custom styles and other functionality to the YouOn network of websites.
 * Version: 1.0
 * Author: YouOn
 * Author URI: https://youon.digital/
 */


// Login logo redirection
add_filter( 'login_headerurl', 'youon_login_logo_url' );
function youon_login_logo_url() {
    return home_url();
}


// Customize the style of the login/registe page
add_action( 'login_enqueue_scripts', 'youon_login_page' );
function youon_login_page() { ?>
    <style type="text/css">
		body {
			background: #1C61D8 !important;
		}
        #login h1 a, .login h1 a {
            background-image: url(https://ead.toquemaisbaixo.com.br/wp-content/uploads/2021/01/TMBX-LOGO.png);
			height:auto;
			width:182px;
			background-size: 100%;
			background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
