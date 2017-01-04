<footer>
	<div class="footer">
		<div class="row">
			<div class="large-11 medium-10 small-12 large-centered medium-centered columns">
				<div class="large-6 float-left">
					<a href="#topo"><h1>E.E.E.P. <?php bloginfo() ?></h1></a>
				</div>
				<div class="large-6 float-left text-right">
					<?php wp_nav_menu(array('menu_location' => 'header-menu','menu_class' => 'footer-menu')) ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>