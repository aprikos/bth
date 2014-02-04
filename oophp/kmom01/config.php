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
define('Radix_INSTALL_PATH', __DIR__ . '/../Radix');
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
$Radix['title_append'] = ' | oophp ht2013';


/**
 * The navbar
 *
 */
//$Radix['navbar'] = null; // To skip the navbar
$Radix['navbar'] = array(
  'class' => 'navbar',
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min Me-sida'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisningar.php', 'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se min källkod'),
  ),
);


/**
 * Theme related settings.
 *
 */
$Radix['stylesheets'][] = 'css/style.css';
$Radix['stylesheets'][] = 'css/source.css';
$Radix['favicon']    = 'img/favicon.ico';

$stylesheets = $Radix['stylesheets'];

/**
 * Header
 * 
 */
$Radix['header'] = <<<EOD
<img class='sitelogo' src='img/cherries.png' height='100' alt='Radix Logo'/>
<span class='sitetitle'>Me oophp</span>
<span class='siteslogan'>Min Me-sida i kursen Databaser och Objektorienterad PHP-programmering</span>
EOD;


/**
 * Footer
 * 
 */
$Radix['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright &copy; Matilda Lorentzon 2014 | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

