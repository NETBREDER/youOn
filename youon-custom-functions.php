<?php
/**
 * Plugin Name: YouOn Custom Functions
 * Plugin URI: https://github.com/NETBREDER/youon-custom-functions/
 * Description: Add custom styles and other functionality to the YouOn network of websites.
 * Version: 1.0
 * Author: YouOn
 * Author URI: https://youon.digital/
 */


// Add Google Analytics code to the entire network

add_action('wp_head', 'youon_googleanalytics');

function youon_googleanalytics() { ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98304873-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-98304873-3');
    </script>
<?php }


// Login logo redirection

add_filter( 'login_headerurl', 'youon_loginlogo_url' );

function youon_loginlogo_url($url) {
    return 'https://youon.digital';
}


// Customize the style of the login/registe page

add_action( 'login_enqueue_scripts', 'youon_login_css' );

function youon_login_css() { ?>
    <style>
        #login h1 a, .login h1 a {
            background-image: url(https://youon.digital/wp-content/uploads/2021/06/youon-logo-purple-300.png);
            height:auto;
            width:161px;
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
        li#wp-admin-bar-wp-logo {
            display: none;
        }
        #footer-left {
            display: none;
        }
    </style>
<?php }
