<?php get_header(); ?>
<?php get_template_part("templates/header-menu", "tpl"); ?>
<?php get_template_part('templates/title-header', 'tpl'); ?>	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php #if(has_post_thumbnail()): ?>
<?php #else: ?>
<?php #endif; ?>
<div class="page-sobre">
	<div class="page-content">
		<div class="row">
			<div class="large-10 large-centered medium-10 small-12">
				<div class="image-thumbnail large-4 medium-6 small-12 float-left">
					<a href="<?php the_post_thumbnail_url() ?>" data-lightbox="image-1"><img src="<?php the_post_thumbnail_url() ?>"></a>
				</div>
				<div class="content">
					<?php the_content() ?>
				</div>
				<div class="row boxes">
				<?php if( have_rows('boxes', 9) ): while ( have_rows('boxes', 9) ) : the_row(); ?>
				
					<div class="box">
						<h6><?php the_sub_field('titulo_do_box', 9);?></h6>
						<div class="content-box">
							<p><?php the_sub_field('conteudo_do_box', 9);?></p>
						</div>
					</div>
				<?php endwhile; else : endif; ?>
				</div>
			</div>		
		</div>
	</div>
</div>
<?php endwhile; else: ?>
<?php endif; ?>
<?php if(is_page('sobre') || is_page('contato')): ?>
	<?php get_template_part('templates/conheca-nossos-cursos', 'tpl'); ?>
<?php endif; ?>
<?php get_footer(); ?>