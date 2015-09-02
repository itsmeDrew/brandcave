<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Brandcave
 * @subpackage brandcave
 * @since Brandcave 1.0.1
 */
?>
<!DOCTYPE html>
<!--
	 _____ _    _          _ _         _                 _       ___
	|_   _| |  |/         | | |       | |               | |     |_  |
	  | | | |_ ___    __ _| | |   __ _| |__   ___  _   _| |_      | | ___  ___ _   _ ___
	  | | | __/ __|  / _` | | |  / _` | '_ \ / _ \| | | | __|     | |/ _ \/ __| | | / __|
	 _| |_| |_\__ \ | (_| | | | | (_| | |_) | (_) | |_| | |_  /\__/ /  __/\__ \ |_| \__ \
	 \___/ \__|___/  \__,_|_|_|  \__,_|_.__/ \___/ \__,_|\__| \____/ \___||___/\__,_|___/
-->
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- stylesheets -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="<?php bloginfo(template_url); ?>/css/bootstrap.css" rel="stylesheet" />
		<link href="<?php bloginfo(template_url); ?>/css/font-awesome.css" rel="stylesheet">
		<link href="<?php bloginfo(template_url); ?>/style.css" rel="stylesheet" />
		<?php wp_head(); ?>
	</head>
