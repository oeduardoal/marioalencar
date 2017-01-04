<?php get_header(); ?>
<?php get_template_part("templates/header-menu", "tpl"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if(has_post_thumbnail()): ?>

<?php else: ?>

<?php endif; ?>

<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>