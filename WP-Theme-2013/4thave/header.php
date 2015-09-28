<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=165757410176047";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">
			<div class="site-logo">
	    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
					 x="0px" y="0px" viewBox="0 0 260 100" xml:space="preserve" width="260px" height="100px">
				<g>
					<path fill="#ffffff" d="M9.6,14.1v6.3c0,1.5,0.1,2.5,0.3,3.1c0.2,0.5,0.6,0.8,1.1,1.1H4.8c0.6-0.3,1-0.7,1.2-1.3
						c0.2-0.6,0.3-1.6,0.3-2.9V7.3c0-1.5-0.1-2.5-0.3-3.1C5.7,3.8,5.3,3.4,4.8,3.1h10.9c0.5,0,0.9-0.1,1.2-0.2v3.8
						c-0.5-0.5-0.9-0.8-1.4-1c-0.6-0.2-1.5-0.3-2.5-0.3c-1.4,0-2.5,0.1-3.4,0.2v6.1h4.4c0.4,0,0.8-0.1,1.1-0.2V15
						c-0.2-0.3-0.5-0.5-0.8-0.7c-0.4-0.2-1-0.2-1.8-0.2H9.6z"/>
					<path fill="#ffffff" d="M30.4,2.5c2,0,3.9,0.5,5.7,1.4c2.2,1.1,3.8,2.7,4.8,4.9c0.8,1.6,1.2,3.3,1.2,5c0,2.4-0.7,4.5-2.1,6.5
						c-1.3,1.8-2.9,3.1-5,4c-1.5,0.6-3.2,1-5,1c-2.8,0-5.3-0.8-7.5-2.4c-1.6-1.2-2.8-2.7-3.6-4.5C18.3,16.9,18,15.5,18,14
						c0-2.2,0.6-4.2,1.8-6.1c1.1-1.8,2.7-3.2,4.8-4.1C26.4,3,28.3,2.5,30.4,2.5z M30,4.9c-1.6,0-3.1,0.4-4.5,1.3
						c-1.3,0.8-2.3,1.9-2.9,3.4c-0.5,1.2-0.8,2.5-0.8,3.9c0,1.8,0.4,3.5,1.3,5.1c1.6,2.9,3.9,4.3,7,4.3c2.7,0,4.8-0.9,6.3-2.7
						c1.3-1.6,2-3.5,2-5.9c0-2.5-0.7-4.7-2.2-6.5C34.5,5.9,32.5,4.9,30,4.9z"/>
					<path fill="#ffffff" d="M59.7,24.7v-2.3c-0.5,0.6-1,1.1-1.7,1.5c-1.4,0.9-3,1.3-4.8,1.3c-2,0-3.6-0.5-5-1.5c-1.2-0.9-2-2.1-2.4-3.7
						c-0.1-0.6-0.2-1.7-0.2-3.2V7.3c0-1.5-0.1-2.5-0.4-3.1c-0.2-0.5-0.6-0.8-1.1-1.1h6.2c-0.6,0.3-1,0.7-1.2,1.3
						c-0.2,0.6-0.3,1.6-0.3,2.9v9.5c0,1.2,0.1,2,0.3,2.5c0.3,1.1,1,1.9,1.9,2.5c0.9,0.6,2,0.9,3.2,0.9c1.4,0,2.7-0.4,3.7-1.2
						c0.7-0.6,1.2-1.2,1.4-1.9c0.2-0.4,0.2-1,0.2-1.7V7.3c0-1.5-0.1-2.5-0.4-3.1c-0.2-0.5-0.6-0.8-1.1-1.1h6.2c-0.6,0.3-1,0.7-1.2,1.3
						c-0.2,0.6-0.3,1.6-0.3,2.9v13.2c0,1.5,0.1,2.5,0.4,3.1c0.2,0.5,0.6,0.8,1.1,1.1H59.7z"/>
					<path fill="#ffffff" d="M71.8,5.4v15.1c0,1.5,0.1,2.5,0.3,3.1c0.2,0.5,0.6,0.8,1.1,1.1H67c0.6-0.3,1-0.7,1.2-1.3
						c0.2-0.6,0.3-1.6,0.3-2.9V7.3c0-1.5-0.1-2.5-0.3-3.1C68,3.8,67.6,3.4,67,3.1h4.8c0.1,0,0.6,0,1.5,0c0.6,0,1,0,1.4,0
						c2.1,0,3.7,0.4,4.9,1.3c0.7,0.5,1.2,1.2,1.6,2c0.4,0.7,0.5,1.5,0.5,2.2c0,1.1-0.4,2.1-1.2,3.1c-1,1.2-2.4,2.1-4.1,2.5
						c1.1,1.5,2.6,3.4,4.4,5.6c2,2.4,3.9,4,5.6,5c-1.5,0.1-2.6,0.2-3,0.2c-1.1,0-2-0.3-2.8-0.9c-1.3-1-3.1-3.1-5.4-6.4
						c-0.9-1.3-1.8-2.6-2.6-4.1c3.7-0.6,5.5-2.2,5.5-4.7c0-1.1-0.4-2-1.2-2.7c-0.7-0.6-1.7-1-2.8-1C73.5,5.1,72.7,5.2,71.8,5.4z"/>
					<path fill="#ffffff" d="M101.3,2.9l-1.1,3.9c-0.2-0.4-0.5-0.7-0.8-0.9c-0.5-0.2-1.2-0.4-2.2-0.4c0,0-1,0-2.8,0.1v15.2
						c0,1.2,0.2,2,0.4,2.5c0.3,0.5,0.7,0.9,1.3,1.3h-6.5c0.6-0.3,1-0.7,1.2-1.3c0.2-0.6,0.3-1.6,0.3-2.9V5.6c-0.8-0.1-1.7-0.1-2.7-0.1
						C87,5.5,86,5.7,85.3,6c-0.3,0.1-0.7,0.4-1.1,0.7l1.2-3.9C85.6,3,86.2,3,87,3.1h12.3C100.3,3,101,3,101.3,2.9z"/>
					<path fill="#ffffff" d="M119.5,14.3h-11.8v6.2c0,1.5,0.1,2.5,0.3,3.1c0.2,0.5,0.6,0.8,1.1,1.1h-6.2c0.6-0.3,1-0.7,1.2-1.3
						c0.2-0.6,0.3-1.6,0.3-2.9V7.3c0-1.5-0.1-2.5-0.3-3.1c-0.2-0.5-0.6-0.8-1.1-1.1h6.2c-0.6,0.3-1,0.7-1.2,1.3
						c-0.2,0.6-0.3,1.6-0.3,2.9v4.5h11.8V7.3c0-1.5-0.1-2.5-0.4-3.1c-0.2-0.5-0.6-0.8-1.1-1.1h6.2c-0.6,0.3-1,0.7-1.2,1.3
						c-0.2,0.6-0.3,1.6-0.3,2.9v13.2c0,1.5,0.1,2.5,0.4,3.1c0.2,0.5,0.6,0.8,1.1,1.1H118c0.6-0.3,1-0.7,1.2-1.3c0.2-0.6,0.3-1.6,0.3-2.9
						V14.3z"/>
					<path fill="#ffffff" d="M149.6,16.6h-8.3l-1.9,5c-0.3,0.7-0.4,1.2-0.4,1.7c0,0.5,0.4,1,1.2,1.5h-6c0.6-0.4,1.1-0.7,1.4-1.2
						c0.3-0.4,0.6-0.8,0.8-1.2c0.2-0.3,0.4-1,0.8-2L143,5.9c0.3-0.6,0.4-1.1,0.4-1.5c0-0.5-0.3-1-1-1.3h5.2l6.9,17.2
						c0.5,1.3,0.9,2.1,1.2,2.5c0.6,0.8,1.2,1.4,2,1.9h-6.8c0.4-0.2,0.6-0.4,0.7-0.5c0.3-0.2,0.4-0.5,0.4-0.8c0-0.2-0.2-0.8-0.6-1.8
						L149.6,16.6z M148.7,14.4l-3.3-8.6l-3.3,8.6H148.7z"/>
					<path fill="#ffffff" d="M165.7,20.8l4.6-12.1c0.7-1.7,1-3,1-3.7c0-0.9-0.4-1.5-1.2-1.9h5l-8.8,22.5c-1.4-0.9-2.4-1.6-2.8-2.1
						c-0.3-0.4-0.6-0.8-0.9-1.5c-0.1-0.2-0.2-0.6-0.5-1.4l-4.4-12c-0.8-2.3-1.4-3.6-1.6-4c-0.4-0.6-0.8-1.2-1.3-1.6h4.8
						c0,0.2,0,0.3,0,0.4c0,0.4,0.3,1.3,0.8,2.7L165.7,20.8z"/>
					<path fill="#ffffff" d="M181.7,14.1v7.8c1.4,0.2,2.7,0.3,4.1,0.3c1.6,0,3-0.2,4.1-0.6c0.8-0.3,1.5-0.7,2.2-1.3l-1.5,4.3h-13.7
						c0.6-0.3,1-0.7,1.2-1.3c0.2-0.6,0.3-1.6,0.3-2.9V7.3c0-1.5-0.1-2.5-0.3-3.1c-0.2-0.5-0.6-0.8-1.1-1.1h10.9c0.5,0,0.9-0.1,1.2-0.2
						v3.8c-0.5-0.5-0.9-0.8-1.4-1c-0.6-0.2-1.5-0.3-2.6-0.3c-1.4,0-2.5,0.1-3.4,0.2v6.1h4.4c0.4,0,0.8-0.1,1.1-0.2V15
						c-0.2-0.3-0.5-0.5-0.8-0.7c-0.4-0.2-1-0.2-1.8-0.2H181.7z"/>
					<path fill="#ffffff" d="M197.3,7.7v13.1c0,1.2,0.2,2,0.4,2.5c0.3,0.5,0.7,0.9,1.3,1.3h-5.8c0.6-0.4,1.1-0.9,1.4-1.5
						c0.2-0.5,0.4-1.3,0.4-2.4V6.9c0-1.2-0.2-2.1-0.4-2.5c-0.3-0.5-0.7-0.9-1.3-1.3h4.8c0.1,0.2,0.4,0.6,0.8,1.2l12.1,15.5V6.9
						c0-1.2-0.2-2.1-0.4-2.5c-0.3-0.5-0.7-0.9-1.3-1.3h5.8c-0.6,0.4-1.1,0.9-1.4,1.5c-0.2,0.5-0.4,1.3-0.4,2.4v18.8
						c-1.7-0.6-3.2-1.7-4.5-3.4L197.3,7.7z"/>
					<path fill="#ffffff" d="M232.9,24.7v-2.3c-0.5,0.6-1,1.1-1.7,1.5c-1.4,0.9-3,1.3-4.8,1.3c-2,0-3.6-0.5-5-1.5
						c-1.2-0.9-2-2.1-2.4-3.7c-0.1-0.6-0.2-1.7-0.2-3.2V7.3c0-1.5-0.1-2.5-0.4-3.1c-0.2-0.5-0.6-0.8-1.1-1.1h6.2c-0.6,0.3-1,0.7-1.2,1.3
						c-0.2,0.6-0.3,1.6-0.3,2.9v9.5c0,1.2,0.1,2,0.3,2.5c0.3,1.1,1,1.9,1.9,2.5c0.9,0.6,2,0.9,3.2,0.9c1.4,0,2.7-0.4,3.7-1.2
						c0.7-0.6,1.2-1.2,1.4-1.9c0.2-0.4,0.2-1,0.2-1.7V7.3c0-1.5-0.1-2.5-0.4-3.1c-0.2-0.5-0.6-0.8-1.1-1.1h6.2c-0.6,0.3-1,0.7-1.2,1.3
						c-0.2,0.6-0.3,1.6-0.3,2.9v13.2c0,1.5,0.1,2.5,0.4,3.1c0.2,0.5,0.6,0.8,1.1,1.1H232.9z"/>
					<path fill="#ffffff" d="M245.1,14.1v7.8c1.4,0.2,2.7,0.3,4.1,0.3c1.6,0,3-0.2,4.1-0.6c0.8-0.3,1.5-0.7,2.2-1.3l-1.5,4.3h-13.7
						c0.6-0.3,1-0.7,1.2-1.3c0.2-0.6,0.3-1.6,0.3-2.9V7.3c0-1.5-0.1-2.5-0.3-3.1c-0.2-0.5-0.6-0.8-1.1-1.1h10.9c0.5,0,0.9-0.1,1.2-0.2
						v3.8c-0.5-0.5-0.9-0.8-1.4-1c-0.6-0.2-1.5-0.3-2.6-0.3c-1.4,0-2.5,0.1-3.4,0.2v6.1h4.4c0.4,0,0.8-0.1,1.1-0.2V15
						c-0.2-0.3-0.5-0.5-0.8-0.7c-0.4-0.2-1-0.2-1.8-0.2H245.1z"/>
					<path fill="#ffffff" d="M23.8,42.2v4.1c-2.3-1.3-4.5-2-6.5-2c-2.4,0-4.4,0.8-6.1,2.4c-1.7,1.6-2.5,3.8-2.5,6.4c0,2.7,0.8,5,2.5,7
						c1.8,2.1,4,3.1,6.6,3.1c2.3,0,4.9-0.8,7.9-2.3l-1.8,4.2c-1.7,0.7-3.6,1.1-5.6,1.1c-4.6,0-8.2-1.4-10.6-4.1c-2-2.3-3-5-3-8.3
						c0-4,1.4-7.1,4.2-9.5c2.4-2,5.3-3,8.6-3C19.1,41.3,21.3,41.6,23.8,42.2z"/>
					<path fill="#ffffff" d="M46.1,54.2h-13V61c0,1.6,0.1,2.7,0.4,3.4c0.2,0.5,0.6,0.9,1.2,1.2h-6.8c0.6-0.3,1.1-0.8,1.3-1.4
						c0.2-0.7,0.3-1.7,0.3-3.2V46.5c0-1.6-0.1-2.7-0.4-3.4c-0.2-0.5-0.6-0.9-1.2-1.2h6.8c-0.6,0.3-1.1,0.8-1.3,1.4
						c-0.2,0.7-0.3,1.7-0.3,3.2v4.9h13v-4.9c0-1.6-0.1-2.8-0.4-3.4c-0.2-0.5-0.6-0.9-1.2-1.2h6.8c-0.6,0.3-1.1,0.8-1.3,1.4
						c-0.2,0.7-0.3,1.7-0.3,3.2V61c0,1.6,0.1,2.8,0.4,3.4c0.2,0.5,0.6,0.9,1.2,1.2h-6.8c0.6-0.3,1-0.8,1.3-1.4c0.2-0.6,0.3-1.7,0.3-3.2
						V54.2z"/>
					<path fill="#ffffff" d="M56.5,61V46.5c0-1.6-0.1-2.7-0.4-3.4c-0.2-0.5-0.6-0.9-1.2-1.2h6.8c-0.6,0.3-1.1,0.8-1.3,1.4
						c-0.2,0.7-0.3,1.7-0.3,3.2V61c0,1.6,0.1,2.7,0.4,3.4c0.2,0.5,0.6,0.9,1.2,1.2h-6.8c0.6-0.3,1.1-0.8,1.3-1.4
						C56.4,63.6,56.5,62.5,56.5,61z"/>
					<path fill="#ffffff" d="M70.5,44.4V61c0,1.6,0.1,2.7,0.4,3.4c0.2,0.5,0.6,0.9,1.2,1.2h-6.8c0.6-0.3,1.1-0.8,1.3-1.4
						c0.2-0.7,0.3-1.7,0.3-3.2V46.5c0-1.6-0.1-2.7-0.4-3.4c-0.2-0.5-0.6-0.9-1.2-1.2h5.2c0.1,0,0.6,0,1.7,0c0.6,0,1.1,0,1.5,0
						c2.3,0,4.1,0.5,5.3,1.4c0.8,0.6,1.3,1.3,1.8,2.1c0.4,0.8,0.6,1.6,0.6,2.4c0,1.2-0.4,2.3-1.3,3.4c-1.1,1.4-2.6,2.3-4.5,2.7
						c1.2,1.7,2.8,3.7,4.9,6.1c2.2,2.6,4.3,4.4,6.2,5.4c-1.7,0.1-2.8,0.2-3.3,0.2c-1.2,0-2.2-0.3-3.1-1c-1.4-1.1-3.4-3.4-5.9-7
						c-1-1.4-1.9-2.9-2.9-4.5c4-0.7,6-2.4,6-5.2c0-1.2-0.4-2.2-1.3-2.9c-0.8-0.7-1.8-1-3-1C72.3,44.1,71.4,44.2,70.5,44.4z"/>
					<path fill="#ffffff" d="M100.1,41.3c2.2,0,4.3,0.5,6.2,1.5c2.4,1.2,4.1,3,5.3,5.4c0.9,1.8,1.3,3.6,1.3,5.4c0,2.6-0.8,5-2.3,7.2
						c-1.4,2-3.2,3.4-5.5,4.4c-1.7,0.7-3.5,1.1-5.4,1.1c-3.1,0-5.9-0.9-8.2-2.7c-1.8-1.3-3.1-3-3.9-4.9c-0.7-1.5-1-3.1-1-4.7
						c0-2.4,0.6-4.6,1.9-6.7c1.2-2,3-3.5,5.3-4.5C95.7,41.7,97.8,41.3,100.1,41.3z M99.6,43.9c-1.7,0-3.4,0.5-4.9,1.4
						c-1.4,0.9-2.5,2.1-3.2,3.7c-0.6,1.4-0.9,2.8-0.9,4.3c0,2,0.5,3.8,1.5,5.6c1.7,3.2,4.3,4.7,7.7,4.7c2.9,0,5.2-1,6.9-3
						c1.5-1.7,2.2-3.9,2.2-6.5c0-2.8-0.8-5.2-2.5-7.1C104.6,44.9,102.3,43.9,99.6,43.9z"/>
					<path fill="#ffffff" d="M121.3,44.7v16.7c0,1.3,0.2,2.3,0.5,2.8c0.3,0.6,0.8,1.1,1.4,1.4H116c0.6-0.3,1.1-0.8,1.3-1.4
						c0.2-0.7,0.3-1.7,0.3-3.2V46.5c0-1.6-0.1-2.7-0.4-3.4c-0.2-0.5-0.6-0.9-1.2-1.2h3.5c0.8,0,2.1,0,4,0c0.5,0,0.9,0,1.1,0
						c1.9,0,3.4,0.3,4.5,0.8c1.2,0.5,2.1,1.3,2.8,2.4c0.7,1,1,2.1,1,3.2c0,0.9-0.2,1.8-0.7,2.7c-0.5,0.9-1.1,1.7-1.9,2.3
						c-1.5,1.2-3.3,1.8-5.4,1.8c-0.9,0-1.8-0.2-2.6-0.5c2-0.3,3.5-0.8,4.5-1.7c1.3-1.1,2-2.4,2-4c0-1.5-0.6-2.6-1.7-3.5
						c-0.9-0.7-2.1-1-3.6-1C123,44.4,122.1,44.5,121.3,44.7z"/>
					<path fill="#ffffff" d="M141,44.4V61c0,1.6,0.1,2.7,0.4,3.4c0.2,0.5,0.6,0.9,1.2,1.2h-6.8c0.6-0.3,1.1-0.8,1.3-1.4
						c0.2-0.7,0.3-1.7,0.3-3.2V46.5c0-1.6-0.1-2.7-0.4-3.4c-0.2-0.5-0.6-0.9-1.2-1.2h5.2c0.1,0,0.6,0,1.7,0c0.6,0,1.1,0,1.5,0
						c2.3,0,4.1,0.5,5.3,1.4c0.8,0.6,1.3,1.3,1.8,2.1c0.4,0.8,0.6,1.6,0.6,2.4c0,1.2-0.4,2.3-1.3,3.4c-1.1,1.4-2.6,2.3-4.5,2.7
						c1.2,1.7,2.8,3.7,4.9,6.1c2.2,2.6,4.3,4.4,6.2,5.4c-1.7,0.1-2.8,0.2-3.3,0.2c-1.2,0-2.2-0.3-3.1-1c-1.4-1.1-3.4-3.4-5.9-7
						c-1-1.4-1.9-2.9-2.9-4.5c4-0.7,6-2.4,6-5.2c0-1.2-0.4-2.2-1.3-2.9c-0.8-0.7-1.8-1-3-1C142.8,44.1,141.9,44.2,141,44.4z"/>
					<path fill="#ffffff" d="M172.7,56.7h-9.1l-2.1,5.5c-0.3,0.8-0.4,1.4-0.4,1.8c0,0.6,0.4,1.1,1.3,1.6h-6.6c0.6-0.4,1.2-0.8,1.6-1.3
						c0.4-0.4,0.6-0.9,0.8-1.3c0.2-0.3,0.5-1.1,0.9-2.2l6.3-15.8c0.3-0.7,0.4-1.2,0.4-1.6c0-0.6-0.4-1.1-1.1-1.4h5.8l7.5,18.9
						c0.6,1.4,1,2.3,1.3,2.8c0.6,0.9,1.3,1.6,2.2,2.1h-7.5c0.4-0.2,0.7-0.4,0.8-0.5c0.3-0.3,0.5-0.6,0.5-0.9c0-0.3-0.2-0.9-0.6-2
						L172.7,56.7z M171.8,54.4l-3.6-9.4l-3.7,9.4H171.8z"/>
					<path fill="#ffffff" d="M202.4,42.2v4.1c-2.3-1.3-4.5-2-6.5-2c-2.4,0-4.4,0.8-6.1,2.4c-1.7,1.6-2.5,3.8-2.5,6.4c0,2.7,0.8,5,2.5,7
						c1.8,2.1,4,3.1,6.6,3.1c2.3,0,4.9-0.8,7.9-2.3l-1.8,4.2c-1.7,0.7-3.6,1.1-5.6,1.1c-4.6,0-8.2-1.4-10.6-4.1c-2-2.3-3-5-3-8.3
						c0-4,1.4-7.1,4.2-9.5c2.4-2,5.3-3,8.6-3C197.7,41.3,199.8,41.6,202.4,42.2z"/>
					<path fill="#ffffff" d="M223.2,41.7l-1.2,4.3c-0.2-0.4-0.5-0.8-0.9-0.9c-0.5-0.3-1.3-0.4-2.5-0.4c0,0-1.1,0-3.1,0.1v16.7
						c0,1.3,0.2,2.2,0.5,2.8c0.3,0.6,0.8,1,1.4,1.4h-7.1c0.6-0.3,1.1-0.8,1.3-1.4c0.2-0.6,0.3-1.7,0.3-3.2V44.7
						c-0.9-0.1-1.9-0.1-2.9-0.1c-1.5,0-2.6,0.2-3.4,0.6c-0.3,0.1-0.7,0.4-1.2,0.8l1.3-4.3c0.3,0.1,0.9,0.2,1.8,0.2h13.5
						C222.2,41.8,222.9,41.8,223.2,41.7z"/>
					<path fill="#ffffff" d="M226.4,61V46.5c0-1.6-0.1-2.7-0.4-3.4c-0.2-0.5-0.6-0.9-1.2-1.2h6.8c-0.6,0.3-1.1,0.8-1.3,1.4
						c-0.2,0.7-0.3,1.7-0.3,3.2V61c0,1.6,0.1,2.7,0.4,3.4c0.2,0.5,0.6,0.9,1.2,1.2h-6.8c0.6-0.3,1.1-0.8,1.3-1.4
						C226.3,63.6,226.4,62.5,226.4,61z"/>
					<path fill="#ffffff" d="M254,42.2v4.1c-2.3-1.3-4.5-2-6.5-2c-2.4,0-4.4,0.8-6.1,2.4c-1.7,1.6-2.5,3.8-2.5,6.4c0,2.7,0.8,5,2.5,7
						c1.8,2.1,4,3.1,6.6,3.1c2.3,0,4.9-0.8,7.9-2.3l-1.8,4.2c-1.7,0.7-3.6,1.1-5.6,1.1c-4.6,0-8.2-1.4-10.6-4.1c-2-2.3-3-5-3-8.3
						c0-4,1.4-7.1,4.2-9.5c2.4-2,5.3-3,8.6-3C249.3,41.3,251.4,41.6,254,42.2z"/>
				</g>
				<line fill="none" stroke="#a24027" stroke-width="3" stroke-miterlimit="10" x1="4.8" y1="33.3" x2="255.5" y2="33.3"/>
				<g>
					<path fill="#a24027" d="M163.2,69.7c-0.1,0.1-0.3,0.4-0.3,0.6c0,0.2-0.1,1.1-0.1,1.1s0,0.3,0.3,0.6c0.3,0.3,0.8,0.5,1.1,0.3
						c0.2-0.2,0.4-0.4,0.5-0.5c0.2-0.1,0.4-0.5,0.5-0.6c0.1-0.1,0.1-0.2,0.3-0.4c0.3-0.2,0.5-0.6,0.6-0.7c0.1-0.2,0.5-1,0.5-1l0.4-1.4
						c0,0,0.2-1.1,0.2-1.2c0-0.1,0.1-0.7,0.1-1.4c-0.1-0.9-0.3-2-0.5-2.5c-0.4-0.8-1.7-3-3-3.3c-1.3-0.4-3.1-0.4-3.1-0.4
						S160,59,159.9,59c-0.2,0-3.3,0.6-4.2,1.2l-0.7,0.3c0,0-0.5,0.2-0.6,0.3c-0.2,0.1-3,1.9-3,1.9s-1.5,1.1-1.6,1.2
						c-0.2,0.1-0.6,0.7-0.6,0.7l-0.6,0.3c0,0-1.6,1.4-1.9,1.7c-0.3,0.3-0.3,0.3-0.3,0.3l-0.3,0.4c0,0-0.3,0.1-0.4,0.2
						c-0.2,0.1-0.6,0.3-0.6,0.3s-1.5,1.9-1.7,2.1c-0.2,0.3-1.6,2-1.6,2l-0.6,1.1l-0.7,0.9c0,0-0.2,0.5-0.3,0.6c-0.1,0.2-0.2,0.4-0.3,0.5
						c-0.1,0.1-0.3,0.4-0.3,0.4s-0.8,1.3-1.1,1.9c-0.3,0.6-0.4,1.2-0.6,1.5c-0.2,0.3-0.3,0.6-0.4,0.9c-0.1,0.3-0.5,0.6-0.5,0.9
						c0,0.2-0.1,0.6-0.1,0.6s-0.3,1.5-0.3,1.6c0,0.1,0,0.6-0.1,0.8c-0.1,0.2-0.4,1-0.4,1.1c0,0.2-0.2,0.8-0.2,1s-0.2,0.5-0.2,0.6
						c0,0.2,0.2,0.6,0.2,0.6s0.1,0.1,0.1,0.3c0,0.2-0.2,0.6-0.2,0.6l0,0.6c0,0,0.4,0.6,0.5,0.7c0.1,0.1,0,0.7,0,0.7s-0.1,0.5-0.1,0.6
						c0,0.1,0.6,1.6,0.6,1.6l1.2,1.4l1.3,1c0,0,1.9,0.9,2.9,1s2.5,0.1,2.7,0c0.2-0.1,0.8-0.3,1.1-0.3c0.3,0,1.1-0.2,1.1-0.2l2.9-0.9
						c0,0,3.4-1.7,3.8-1.8c0.4-0.1,1.4-0.9,1.6-1.1c0.2-0.2,1.4-0.8,1.5-0.9c0.1-0.1,3.5-2.4,3.5-2.4s1.3-1.2,1.4-1.3
						c0.1-0.1,1.7-1.5,1.7-1.5s0.8-0.9,1-1c0.1-0.1,0.3-0.5,0.3-0.6c0-0.1-0.3-0.4-0.4-0.4c-0.1,0-0.5,0.2-0.5,0.2l-0.6,0.9
						c0,0-0.5,0.7-0.6,0.8c-0.1,0.1-2.2,1.8-2.2,1.8l-0.4,0.6c0,0-0.4,0.2-0.6,0.4c-0.2,0.2-0.4,0.5-0.6,0.6c-0.2,0-1.1,0.3-1.1,0.3
						l-1.9,1.4l-1.5,0.9l-2.4,1.2c0,0-1.7,0.8-1.8,0.8c-0.1,0-2.1,0.4-2.2,0.4c-0.1,0-2,0.2-2,0.2l-1.5,0l-1.4-0.2l-0.9-0.7
						c0,0-0.7-0.6-0.9-0.6c-0.1,0-0.6-0.1-0.6-0.3c0-0.2-0.9-1.1-0.9-1.1s-0.6-1-0.6-1.1c0-0.1-0.2-0.8-0.2-0.9
						c-0.1-0.1-0.1-0.6-0.1-0.7c0-0.2-0.4-0.6-0.4-1.1c0-0.6,0-1.1,0-1.2c0-0.2-0.1-0.6,0-0.9c0-0.2,0.2-1.7,0.2-1.7l0.2-1.2l0.5-1.5
						c0,0,0.8-2.2,0.9-2.3c0.1-0.1,0.8-1.2,0.8-1.3c0-0.1,0.6-1.5,0.6-1.7c0.1-0.1,0.7-1.5,0.7-1.5s0.5-0.5,0.5-0.6
						c0.1-0.1,1.7-2.1,1.9-2.4c0.2-0.3,0.8-1.1,1-1.2c0.1-0.2,0.8-1,0.8-1s1.3-1.1,1.5-1.3c0.2-0.2,0.6-1.1,0.9-1.1
						c0.3-0.1,1.8-1.1,1.8-1.1l2.6-1.6c0,0,2.3-1.6,3.5-2c1.2-0.4,3-1,4-0.6c1,0.3,2.1,1.2,2.2,1.4c0.1,0.2,0.5,0.6,0.5,0.8
						c0,0.2,0.4,0.8,0.4,1c0,0.2-0.1,0.4-0.1,0.7c0,0.3,0.2,0.6,0.2,0.7c0,0.1,0.2,1.1,0.2,1.6C164.1,67.4,163.4,69.3,163.2,69.7z"/>
					<path fill="#a24027" d="M178.8,61.3l0.3-0.7l0.4-0.4l0-0.5c0,0,0-0.2-0.2-0.2c-0.2,0-0.5,0-0.7,0c-0.2,0-0.3-0.1-0.5,0
						c-0.2,0.1-0.7,0.4-0.7,0.4s-0.2,0.2-0.4,0.4c-0.2,0.2,0,0.1-0.3,0.6c-0.3,0.4-0.5,0.3-0.5,0.7c0,0.4-0.1,0.5-0.1,0.6
						c0,0.1,0,0.3-0.1,0.5c-0.1,0.2-0.3,0.9-0.6,1.3c-0.3,0.3-0.2,0.1-0.5,0.5c-0.2,0.4-0.6,1.1-0.6,1.1s-0.3,0.4-0.4,0.7
						c-0.1,0.3-0.5,1.3-0.5,1.8c0,0.5-0.8,1.5-0.9,1.7c-0.1,0.1-0.1,0.3-0.3,0.6c-0.1,0.3-0.1,0.3-0.2,0.6c-0.1,0.3-0.2,0.6-0.2,0.6
						l-1.1,3c0,0-0.2,0.7-0.4,1.1c-0.1,0.4-1.4,3.4-1.5,3.6c-0.1,0.2-0.5,1.1-0.6,1.4c-0.1,0.3-1,2.9-1,2.9s-0.4,0.8-0.4,1
						c0,0.2-0.1,0.9-0.2,1.3c-0.1,0.3-0.4,1.2-0.4,1.2s-0.2,0.2-0.2,0.5c0,0.3,0,1,0,1s-0.3,0.6-0.3,0.8c0,0.3,0,0.7,0,0.9
						c0,0.2-0.3,1.1-0.3,1.3c0,0.1,0.1,0.4,0.1,0.6c0,0.2,0.2,1.1,0.1,1.3c0,0.2,0,0.5,0,0.8c0,0.3,0,0.5,0.1,0.8
						c0.1,0.3,0.2,0.5,0.4,0.7c0.2,0.2,0.4,0.4,0.6,0.4c0.1,0,0.5,0,0.6,0c0.1,0,1.4-0.3,1.5-0.4c0.1-0.1,0.3-0.1,0.6-0.4
						c0.3-0.2,0.7-0.4,0.8-0.6c0.1-0.1,1-0.6,1-0.6l0.7-0.7c0,0,0.2-0.2,0.4-0.3c0.2-0.1,0.4-0.3,0.4-0.3s0.6-0.4,0.7-0.6
						c0.1-0.1,0.4-0.2,0.6-0.5c0.1-0.3,1.1-1.2,1.1-1.2l0.5-0.6l0.2-0.3v-0.3c0,0-0.1-0.1-0.3-0.1c-0.1,0-0.4,0.2-0.4,0.2l-0.3,0.4
						l-0.4,0.4c0,0-0.7,0.6-0.9,0.9c-0.2,0.3-0.9,0.7-0.9,0.7l-0.4,0.4c0,0-0.2,0-0.3,0.2c-0.1,0.1-1,0.7-1,0.7s-1.2,0.6-1.4,0.7
						c-0.1,0.1-0.5,0.1-0.5,0.1s-0.4,0-0.7-0.3c-0.1-0.1-0.3-0.3-0.4-0.7c0-0.5-0.2-1.2-0.2-1.3c0-0.1,0-0.9,0-0.9v-1c0,0,0-0.3,0-0.6
						c0.1-0.2,0.1-0.7,0.1-0.7s0.1-0.8,0.1-0.9c0-0.1,0.5-1.7,0.6-1.8c0-0.1,0.2-1.3,0.3-1.5c0.1-0.2,0.1-0.7,0.2-0.9
						c0-0.1,0.7-1.7,0.7-1.7l0.4-0.7c0,0,0.2-0.3,0.2-0.5c0-0.2,0.3-1,0.3-1l0.3-0.7l0.9-1.9c0,0,0.8-2.3,0.8-2.4c0-0.1,0-0.2,0.2-0.5
						c0.2-0.3,0.5-1,0.5-1s0.7-1.6,0.8-2.1c0.1-0.4,0.9-2.4,0.9-2.4s1.1-1.8,1.2-2.1c0.1-0.3,1.5-2.9,1.5-2.9S178.3,61.9,178.8,61.3z"/>
					<path fill="#a24027" d="M183.5,72.7l0.6-0.6l0.5-0.4c0,0,0.7-0.3,0.9,0c0.2,0.3,0.4,0.4,0.3,1c-0.1,0.8-0.3,0.9-0.3,0.9l-0.5,0.5
						l-0.5,0.5l-1,0.5l-0.5,0.1c0,0-1,0.1-1.2,0.2c-0.2,0-0.8,0.1-0.8,0.1l-0.7-0.1c0,0-0.3-0.1-0.1-0.4c0.2-0.2,0.3,0,0.7-0.3
						c0.3-0.3,1.6-1,1.6-1L183.5,72.7z"/>
					<path fill="#a24027" d="M209.9,72.7l0.6-0.6c0,0,0.3-0.3,0.5-0.4c0.2-0.1,0.6-0.2,0.9,0c0.3,0.2,0.5,0.4,0.4,1
						c-0.1,0.6-0.3,0.8-0.7,1.3c-0.1,0.2-0.8,0.6-1.2,0.7c-0.2,0.1-1.9,0.5-2,0.5c-0.2,0-0.9,0.1-0.9,0.1l-0.7-0.1c0,0-0.3-0.1-0.1-0.4
						c0.2-0.2,0.4-0.1,0.7-0.3c0.4-0.2,1.3-0.8,1.6-1C209.4,73.3,209.9,72.7,209.9,72.7z"/>
					<path fill="#a24027" d="M180.9,77.7c0,0-0.6,0.5-0.9,1.2c-0.1,0.2-0.8,1.3-0.9,1.5c-0.2,0.4-0.8,1.4-0.8,1.4s-1.1,2.1-1.4,2.9
						c-0.3,0.8-0.7,1.6-0.7,1.6l-0.3,0.7c0,0,0,0.1,0,0.3c0,0.1-0.1,0.2-0.2,0.4c-0.1,0.3-0.2,0.5-0.2,0.7c0,0.2-0.1,0.4-0.2,0.7
						c-0.1,0.4-0.3,1-0.3,1.3c-0.1,0.4-0.6,2-0.2,2.7c0.3,0.7,0.6,0.9,0.8,0.9c0.2,0,0.7,0.1,1.2-0.1c0.5-0.2,1.4-0.6,1.6-0.7
						c0.6-0.4,1.5-1.1,1.7-1.2c0.1-0.1,1.9-1.6,2.7-2.3c0.8-0.6,1.6-1.4,1.6-1.4s0.4-0.5,0.3-0.7c-0.2-0.3-0.5-0.2-0.8,0
						c-0.2,0.2-0.6,0.6-0.9,0.8c-0.3,0.2-1,0.8-1.5,1.2c-0.5,0.4-0.9,0.7-1.3,0.9c-0.3,0.2-1.9,1.1-2.5,0.7c-0.6-0.5-0.7-1.5-0.3-2.9
						c0.4-1.4,1.3-3.3,1.3-3.3l1.6-3.2c0,0,0.8-1.9,1.1-2.3c0.3-0.5,0.8-1.6,0.6-2C181.9,77.2,181.2,77.4,180.9,77.7z"/>
					<path fill="#a24027" d="M191.5,78.2c0,0,0.5-0.8,0.4-1c-0.1-0.2-0.2-0.4-0.2-0.4h-0.3c0,0-0.1,0-0.3,0c-0.1,0-0.3,0-0.4,0.2
						c-0.1,0.1-0.2,0.2-0.3,0.4c-0.1,0.1-0.1,0.2-0.3,0.4c-0.1,0.1-2.3,5.2-2.6,6c-0.3,0.8-2.2,4.8-2.3,5.2c-0.1,0.5-0.7,1.4-0.7,1.7
						c-0.1,0.4-0.5,1.3-0.6,1.5c-0.1,0.3-0.8,2.2-0.7,2.6c0.1,0.2,0.5,0.4,0.9,0.3c0.4-0.1,1-0.9,1.7-1.5c0.7-0.6,2.2-2.5,2.9-3.3
						c0.7-0.8,1.9-2.3,2.8-3.3c0.8-0.9,2.8-3,3.3-3.4c0.6-0.5,1.3-0.7,1.6-0.3c0.4,0.4,0.5,0.8,0.1,1.9c-0.4,1.1-0.5,1.3-0.7,1.8
						c-0.4,1.2-0.7,3.2-0.7,3.7c0,0.6,0.2,1.8,0.6,2.1c0.4,0.3,0.9,0.4,1.4,0.2c1.2-0.5,4.7-3,4.7-3s0.4-0.3,0.4-0.6
						c0-0.2-0.2-0.5-0.4-0.4c-0.2,0-0.6,0.4-0.7,0.5c-0.1,0.1-1.8,1.1-2.4,0.6c-0.6-0.5-0.6-1.1-0.5-2.7c0-1.6,0.5-3.3,0.8-4
						c0.3-0.7,0.5-2.2,0.2-2.8c-0.2-0.4-1-0.7-1.7-0.6c-0.7,0-1.6,0.8-2.2,1.3c-0.6,0.5-1.1,1-1.6,1.5c-0.3,0.4-2.3,2.4-2.6,2.8
						c-0.3,0.4-1,1.2-1.5,1.7C189,87.8,188,89,188,89s-0.9,1-1.1,0.8c-0.4-0.4,0.3-1.7,0.5-2.1c0.2-0.4,1.4-3.4,1.4-3.4l2.2-4.8
						C191,79.5,191.3,78.8,191.5,78.2z"/>
					<path fill="#a24027" d="M207.8,77.4c-0.4,0.3-0.8,0.9-0.8,0.9s-1.1,1.9-1.3,2.3c-0.2,0.4-2.9,6.5-3.1,7c-0.1,0.2-0.4,1.1-0.7,1.8
						c-0.3,0.9-0.5,1.8-0.6,2.1c-0.1,0.5-0.1,0.8-0.1,1.1s0.3,0.6,0.4,0.9c0,0.3,0.5,0.6,0.5,0.6s0.2,0.1,0.7,0.1c0.5,0,0.8-0.1,1.1-0.1
						c0.6-0.1,0.6-0.3,0.8-0.5c0.3-0.1,1.1-0.9,1.8-1.4c0.7-0.5,1.7-1.5,2.1-1.8c0.4-0.3,1.3-1.1,1.7-1.3c0.4-0.2,1.5-0.7,1.5-1.1
						c0-0.4,0.2-0.8-0.4-0.6c-0.6,0.2-0.6,0.3-1,0.7c-0.5,0.3-1,0.8-1.2,0.9c-0.2,0.1-2,1.5-2.7,1.9c-0.7,0.4-1.6,0.8-2,0.5
						c-0.4-0.4-0.5-0.9-0.4-1.5c0.1-0.7,0.1-0.7,0.3-1.7c0.2-1,1-3.2,1.7-4.7c0.7-1.5,2-3.7,2.1-3.9c0.1-0.1,0.9-1.5,0.7-2
						C208.8,76.9,208,77.1,207.8,77.4z"/>
					<path fill="#a24027" d="M223.1,86.5l1.3-1.2c0,0,0.7-0.8,0.9-0.6c0.1,0.2,0.3,0.2,0,0.6c-0.3,0.4-1.8,1.8-1.8,1.8s-3,2.8-3.6,3.2
						c-0.5,0.4-2.8,2.5-2.8,2.5s-3,2.3-4.1,2.3c-1.5-0.1-2.3-0.9-2.4-1.5c-0.1-0.7-0.3-1.5-0.1-2.2c0.1-0.3,0.3-1.2,0.6-2
						c0.4-1.2,0.9-2.4,1.1-2.9c0.3-0.8,2.5-4.7,3-5.5c0.6-0.7,2-2.8,2.4-3.2c0.4-0.4,0.8-0.9,1.2-1.2c0.4-0.3,0.8-0.7,1.2-0.9
						c0.4-0.3,0.8-0.9,1.8-0.9c0.7,0,1.7,0,1.8,0.7c0.1,0.7-0.1,1.2-0.3,1.5c-0.2,0.4-0.6,0.9-0.8,1.4c-0.3,0.5-0.5,1.1-1,1.7
						c-0.5,0.6-0.9,1.9-1.6,2.1c-0.7,0.2-0.8-0.4-0.8-0.6c0-0.2,0.7-1.4,1-2c0.3-0.7,0.7-1.3,1.1-1.9c0.4-0.6,0.8-0.8,0.8-1.2
						c0-0.3,0.2-0.6-0.1-0.7c-0.3,0-1.1,0.3-1.1,0.3s-0.9,0.8-1,0.9c-0.1,0.1-4,5.6-4.4,6.4c-0.4,0.8-1.5,3.2-1.8,4.4
						c-0.3,1.5-0.5,3.7,0.5,4.3c0.8,0.4,1.9,0.1,2.9-0.5c1-0.6,2.8-2.1,3.4-2.6C220.8,88.5,223.1,86.5,223.1,86.5z"/>
				</g>
				</svg>
			</a>
    </div>

		<div class="site-right">
				<a class="header-link" href="tel:<?php echo bloginfo( 'description' ); ?>">
				  <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				  <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</a>
		</div>

		<div class="site-mobile"><a href="tel:(509) 624-5855"><h2>4th Ave Chiropractic <br>(509) 624-5855</h2></a></div>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
