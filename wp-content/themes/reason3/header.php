<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reason-wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container grid layout">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'reason-wp' ); ?></a>

	
	<header class="header grid layout-12">
      <div class="search flex width-10 align-items-center">
        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="18px" height="18px"><path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z"/></svg>
        <span>Search</span>

      </div>
		

		
      <nav aria-label="Call to Action Links" class="cta-links flex justify-self-end">
        
		  <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'top-menu',
					'items_wrap'           => '<ul class="flex text-align-center">%3$s</ul>',
					
				)
			);
			?>
		  
		  
      </nav>
      <div class="logo flex align-items-center">
        <?php
			the_custom_logo();
		?>
			
      </div>
      <nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'flex justify-content-s-b justify-self-end align-items-center',
					
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<nav class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </nav>
		
      
    </header>
