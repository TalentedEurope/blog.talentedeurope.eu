<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?>
<!doctype html>
<!--[if !IE]>
<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href='https://fonts.googleapis.com/css?family=Titillium+Web:200,400,700,400italic,200italic,700italic,900' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<link rel="apple-touch-icon" sizes="57x57" href="http://talentedeurope.eu/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="http://talentedeurope.eu/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="http://talentedeurope.eu/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="http://talentedeurope.eu/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="http://talentedeurope.eu/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="http://talentedeurope.eu/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="http://talentedeurope.eu/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="http://talentedeurope.eu/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="http://talentedeurope.eu/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="http://talentedeurope.eu/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="http://talentedeurope.eu/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="http://talentedeurope.eu/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="http://talentedeurope.eu/img/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

</head>

<body <?php body_class(); ?>>
<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default <?php if( of_get_option( 'sticky_header' ) ) echo 'navbar-fixed-top'; ?>" role="navigation">
			<div class="container">
				<div class="row">
					<div class="site-navigation-inner col-sm-12">
						<div class="navbar-header">
							<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<?php if( get_header_image() != '' ) : ?>

							<div id="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
							</div><!-- end of #logo -->

							<?php endif; // header image was removed ?>

							<?php if( !get_header_image() ) : ?>

							<div id="logo">
								<?php echo is_home() ?  '<h1 class="site-name">' : '<p class="site-name">'; ?>
									<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
								<?php echo is_home() ?  '</h1>' : '</p>'; ?>
							</div><!-- end of #logo -->

							<?php endif; // header image was removed (again) ?>

						</div>
						<div class="lang-social">
						<ul class="poly-language-switcher"><?php pll_the_languages(array('display_names_as' => 'slug') );?></ul>
						<?php /* echo do_shortcode( '[bogot]' ); */ ?>
						<ul>
						<li>
						  <a href="https://www.facebook.com/Talented-Europe-839419182764068/">
						    <i class="fi flaticon-facebook"></i>
						  </a>
						</li>
						<li>
						  <a href="https://twitter.com/talentedeurope">
						    <i class="fi flaticon-twitter"></i>
						  </a>
						</li>
						<li>
						  <a href="https://www.youtube.com/channel/UCkj5UUptbZnQ5kvxVpDfkBw">
						    <i class="fi flaticon-youtube"></i>
						  </a>
						</li>
						</ul>
						</div>
						<?php sparkling_header_menu(); // main navigation ?>
					</div>
				</div>
			</div>
		</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<div class="top-section">
			<?php sparkling_featured_slider(); ?>
			<?php sparkling_call_for_action(); ?>
		</div>

		<div class="container main-content-area">
            <?php $layout_class = get_layout_class(); ?>
			<div class="row <?php echo $layout_class; ?>">
				<div class="col-md-offset-2 main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?>">