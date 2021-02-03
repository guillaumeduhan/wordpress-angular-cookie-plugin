<?php
 /*
 * Plugin Name: Cookie-Plugin
 * Author: Guillaume Duhan
 * Version: 1.0.0
 * Description: This plugin aims to display a GDPR bar to allow/disallow cookies usage.
 * 
*/

 if (!$_COOKIE["myCookieFromPlugin"] && !$_COOKIE["declineCookies"]) {
  wp_enqueue_script('angularjs', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js');
  wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
  wp_enqueue_script('js-cookies', 'https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js');
  wp_enqueue_script('app', plugin_dir_url(__FILE__) . './app.js');
 
  echo file_get_contents('wp-content/plugins/cookie-plugin/templates/CookieBanner.html');
 }

?>