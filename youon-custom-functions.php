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

add_action( 'login_enqueue_scripts', 'youon_login_css' );

function youon_login_css() { ?>
    <style>
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


// Customize the style of the admin panel

add_action( 'admin_head', 'youon_admin_css' );

function youon_admin_css() { ?>
    <style>
        body {background-color: #DED51F; }
    </style>
<?php }
