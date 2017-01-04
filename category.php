<?php get_header(); ?>
<? get_template_part("templates/header-menu", "tpl"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php if(has_post_thumbnail()): ?>

<div class="single-page">
	<div class="page-title">
		<h1><?php the_title() ?></h1>
	</div>
</div>
<div class="row single-page-content">
	<div class="large-10 large-centered columns">
		<div class="large-8 columns">
			<div class="page-content">
				<?php the_content() ?>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<div class="large-4 columns page-content">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>



<?php else: ?>

<div class="single-page">
	<div class="page-title">
		<h1><?php the_title() ?></h1>
	</div>
</div>
<div class="row single-page-content">
	<div class="large-10 large-centered columns">
		<div class="large-8 columns">
			<div class="page-content">
				<?php the_content() ?>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<div class="large-4 columns page-content">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php endif; ?>

<?php endwhile; else: ?>
<?php endif; ?>

<? get_template_part("templates/contato", "tpl"); ?>

<?php get_footer(); ?>