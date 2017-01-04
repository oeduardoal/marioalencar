<?php
// Chamadas PHP

	/*
		
		usar sempre o WP_Query .. <3
		usar sempre o WP_Query .. <3
		usar sempre o WP_Query .. <3
		usar sempre o WP_Query .. <3

		##########################################################

		<?php get_header(); ?>
		<?php get_footer(); ?>
	
		##########################################################
		
		// Para criar templates
		Template name: Fale Conosco
	
		##########################################################
		
		// Chamar um arquivo que faz parte do template: file-url-tpl.php
		get_template_part('file-url', 'tpl');
		
		##########################################################
		
		// Loop Basico
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_title(); ?>
			<?php the_content(); ?>
			<?php the_excerpt(); ?>
			<?php echo excerpt(40); ?>
			<?php the_permalink(); ?>
			<?php the_post_thumbnail_url(); ?>
		<?php endwhile; else: ?>
		<?php endif; ?>

		##########################################################
		
		// ACF
		<?php if( have_rows('blocos', 56) ): while ( have_rows('blocos', 56) ) : the_row(); ?>
			<?php the_sub_field('image-bloco',56);?>
		<?php endwhile; else : endif; ?>
		################################
		<?php the_field('image-bloco',56); ?>

		##########################################################

		
		$o_senhor_argumento = array(
			'author' => ID, // Posts por autor - ID
			'author_name' => 'NOME DO AUTHOR', // Post Por autor - NAME
			'cat' => ID, // Posts por Categorias - ID, // Em uma single mostrar apenas os posts com a mesma categoria, IDEIA
			'p' => ID, // Post ID
			'name' => 'POST-SLUG', // Post Específico name
			'post_type' => 'NAME POST TYPE', // Pode também ser um array
			'post_status' => array(
					            'publish',
					            'pending',
					            'draft',
					            'auto-draft',
					            'future',
					            'private',
					            'inherit',
					            'trash'
	            			),
			'posts_per_page' => 10,
			'order' => 'DESC',
			'orderby' => 'date',
			'year' => 2012,
			'monthnum' => 3,
			'w' =>  25,
			'day' => 17,
			'hour' => 13,
			'minute' => 19,
			'second' => 30

		);
		
		$a_senhora_query = new $WP_Query($o_senhor_argumento);

		##########################################################
		// Pegar page por ID
		<?php $args = array('page_id' => 10);?>
		<?php $page = new $WP_Query('page_id' => 10); if($page->have_posts()): while($page->the_post()): ?>

					the_title();
					the_content();
					the_permalink();
					the_post_thumbnail_url();

		<?php endwhile; wp_reset_postdata(); endif; ?>


	*/
		define( 'WP_DEBUG', true );
		add_filter( 'if_menu_conditions', 'wpb_new_menu_conditions' );
		function wpb_new_menu_conditions( $conditions ) {
		  $conditions[] = array(
		    'name'    =>  'If it is Custom Post Type archive',
		    'condition' =>  function($item) {
		      return is_post_type_archive();
		    }
		  );
		  return $conditions;
		}


		function my_acf_google_map_api( $api ){
			
			$api['key'] = 'AIzaSyDRJHncUrH4hKD8UPnyOxTBfjmS20DPno4';
			
			return $api;
			
		}

		add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
	####################################################
	function load_assets() {
		//  Foundation
		wp_enqueue_style( 'style_foundation', assetsurl('marioalencar') . '/lib/foundation/css/foundation.min.css');
		wp_enqueue_script( 'script_foundation',  assetsurl('marioalencar') . '/lib/foundation/js/foundation.min.js');

		// Lightbox
		wp_enqueue_style( 'style_lightbox', assetsurl('marioalencar') . '/lib/lightbox/css/lightbox.min.css');
		wp_enqueue_script( 'script_lightbox',  assetsurl('marioalencar') . '/lib/lightbox/js/lightbox.min.js','','',true);

		// Vanilla
		wp_enqueue_script( 'script_vanilla',  assetsurl('marioalencar') . '/lib/vanillamasker/vanilla.js');

		// OWL
		// wp_enqueue_style( 'style_owl', assetsurl('marioalencar') . '/lib/owl/owl-carousel/owl.carousel.css');
		// wp_enqueue_style( 'style_owl', assetsurl('marioalencar') . '/lib/owl/owl-carousel/owl.theme.css');
		// wp_enqueue_style( 'style_owl', assetsurl('marioalencar') . '/lib/owl/owl-carousel/owl.transitions.css');
		// wp_enqueue_script( 'script_owl',  assetsurl('marioalencar') . '/lib/owl/owl-carousel/owl.carousel.min.js');
		
		wp_enqueue_style( 'style_owl', assetsurl('marioalencar') . '/lib/owl-beta/owl.carousel.css');
		wp_enqueue_script( 'script_owl',  assetsurl('marioalencar') . '/lib/owl-beta/owl.carousel.js');

	}
	add_action( 'wp_enqueue_scripts', 'load_assets' );

	####################################################
	function resumo_personalizado($more) {
		return ' …';
	}
	add_filter('excerpt_more', 'resumo_personalizado');

	####################################################
	function register_my_menus() {
		register_nav_menus(
			array(
			  'header-menu' => __( 'Header Menu' )
			)
		);
		register_nav_menus(
			array(
			  'sidebar-menu' => __( 'Sidebar Menu' )
			)
		);
		register_nav_menus(
			array(
				'cursos-menu' => __( 'Cursos Menu' )
			)
		);
	}
	add_action( 'init', 'register_my_menus' );

	####################################################
	// Registro das suas widgets
	if ( function_exists('register_sidebar') ){
	    register_sidebar(array(
	        'name' => __( 'Widget 1'),
	        'id' => 'widget-1',
	        'description' => __( ''),
	        'before_title' => '<h1>',
	        'after_title' => '</h1>',
	    ) );
	}

	####################################################
	// Tamanho da largura das imagens.
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 480, 350, true );
		
	}

	####################################################
	function tamanho_resumo($length) {
		return 12;
	}
	add_filter('excerpt_length', 'tamanho_resumo');

	function excerpt($limit) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'...';
		}else{
			$excerpt = implode(" ",$excerpt);
		}
			$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
			return $excerpt;
	}
	####################################################

	DEFINE('assetsurl', get_site_url() . "/wp-content/themes/marioalencar");

	function assetsurl($theme_name){
		return get_site_url() . '/wp-content/themes/' . $theme_name;
	}

	####################################################
	// Title HTML
	function setup_theme(){
		add_theme_support('title-tag');
	}
	add_action( 'after_setup_theme', 'setup_theme' );
	// Send Mail
	require_once "mail/mail.php";