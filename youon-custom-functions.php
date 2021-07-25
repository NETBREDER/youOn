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

add_filter( 'login_headerurl', 'youon_loginlogo_url' );

function youon_loginlogo_url($url) {
    return 'https://youon.digital';
}


// Customize the style of the login/registe page

add_action( 'login_enqueue_scripts', 'youon_login_css' );

function youon_login_css() { ?>
    <style>
		body {
			background: linear-gradient(to right, #cd2970 0%, #e96140 100%) !important;
		}
        #login h1 a, .login h1 a {
            background-image: url(https://youon.digital/wp-content/uploads/2021/07/logo-voceonline-by-apprank-white.png);
            height:41px;
            width:240px;
            background-size: 100%;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
		.login form {
			border: none !important;
			border-radius: 8px;
			box-shadow: 0 16px 26px 0 rgba(0,0,0,0.14) !important;
		}
		.login #backtoblog a, .login #nav a {
			color: #000 !important;
		}
    </style>
<?php }


// Customize the style of the admin panel

add_action( 'admin_head', 'youon_admin_css' );

function youon_admin_css() { ?>
    <style>
        li#wp-admin-bar-wp-logo {
            display: none;
        }
        #footer-left {
            display: none;
        }
    </style>
<?php }
