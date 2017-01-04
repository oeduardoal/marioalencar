<?php get_header(); ?>
<?php get_template_part("templates/header-menu", "tpl"); ?>
<?php get_template_part('templates/title-header', 'tpl'); ?>	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php #if(has_post_thumbnail()): ?>
<?php #else: ?>
<?php #endif; ?>
<div class="page-cursos">
<div class="cursos-menu">
	<?php wp_nav_menu(array('theme_location' => 'cursos-menu', 'container' => false,'menu_class' => 'cursos-menu-ul', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>')); ?>
</div>
	<div class="page-content">
		<div class="row">
			<div class="large-10 large-centered medium-10 small-12">
				<div class="content">
					<?php the_content(); ?>
				</div>
			</div>		
		</div>
	</div>
</div>
<?php endwhile; else: ?>
<?php endif; ?>
<?php get_template_part('templates/slide-eventos','tpl'); ?>
<?php get_footer(); ?>