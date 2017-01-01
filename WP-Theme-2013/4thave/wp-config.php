<?php
/** WordPress's config file **/
/** http://wordpress.org/   **/

// ** MySQL settings ** //
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/spo4aveci/fourthavechiropractic.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'fourthavechiropractic_co');     // The name of the database
define('DB_USER', 'fourthavechiropr');     // Your MySQL username
define('DB_PASSWORD', '5YRWznuD'); // ...and password
define('DB_HOST', 'mysql.fourthavechiropractic.com');     // ...and the server MySQL is running on

// Change the prefix if you want to have multiple blogs in a single database.

$table_prefix  = 'wp_73td3a_';   // example: 'wp_' or 'b2' or 'mylogin_'

// Turning off Post Revisions. Comment this line out if you would like them to be on.

define('WP_POST_REVISIONS', false );

// Change this to localize WordPress.  A corresponding MO file for the
// chosen language must be installed to wp-includes/languages.
// For example, install de.mo to wp-includes/languages and set WPLANG to 'de'
// to enable German language support.
define ('WPLANG', '');

/* Stop editing */

$server = DB_HOST;
$loginsql = DB_USER;
$passsql = DB_PASSWORD;
$base = DB_NAME;

define('ABSPATH', dirname(__FILE__).'/');

// Get everything else
require_once(ABSPATH.'wp-settings.php');
?>
