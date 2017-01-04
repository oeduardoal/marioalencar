<?php get_header(); ?>
<?php get_template_part("templates/header-menu", "tpl"); ?>
<?php get_template_part('templates/title-header', 'tpl'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php #if(has_post_thumbnail()): ?>
<?php #else: ?>
<?php #endif; ?>
<div class="page-content">
	<div class="row">
		<div class="large-10 large-centered medium-10 small-12">
				<?php if (is_user_logged_in()) : ?>
				<a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
				<?php else : ?>
				<?php echo do_shortcode('[ultimatemember form_id=65]'); ?>
				<?php endif;?>
		</div>
	</div>
</div>
<?php endwhile; else: ?>
<?php endif; ?>
<?php if(is_page('sobre') || is_page('contato')): ?>
	<?php get_template_part('templates/conheca-nossos-cursos', 'tpl'); ?>
<?php endif; ?>
<?php if(is_page('cursos')): ?>
	<?php get_template_part('templates/slide-eventos','tpl'); ?>
<?php endif; ?>
<?php get_footer(); ?>