<?php
/**
 * Config-file for Radix. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Radix paths.
 *
 */
define('Radix_INSTALL_PATH', __DIR__ . '/..');
define('Radix_THEME_PATH', Radix_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(Radix_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Radix variable.
 *
 */
$Radix = array();
 
 
/**
 * Site wide settings.
 *
 */
$Radix['lang']         = 'sv';
$Radix['title_append'] = ' | Radix en webbtemplate';


/**
 * Theme related settings.
 *
 */
$Radix['stylesheet'] = 'css/style.css';
$Radix['favicon']    = 'favicon.ico';