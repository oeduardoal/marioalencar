<div class="slide-eventos">
	<div class="row">
		<div class="large-10 large-centered columns">
			<h1 class="text-center">NOSSO EVENTOS</h1>
			<p class="text-center content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero ipsa, qui dolorem facilis aspernatur. Aliquid minima officiis animi quia quis dicta iste iure, error deserunt blanditiis reiciendis qui impedit, facere?</p>
		</div>
	</div>
	<style>
		.item{
			margin-right: 0.2rem;
			margin-left: 0.2rem;
		}
	</style>

	<div class="fotos eventos">
		<div class="owl-eventos" id="owl-eventos">
			<?php for ($i=0; $i < 9; $i++): ?>
				<div class="item">
				<div>
					<a href="<?php the_permalink() ?>"><i class="fa fa-link"></i></a>
					<img src="http://placehold.it/400x300" alt="" class="image-evento">
				</div>
					<div class="eventos-content">
						<h1 class="title">
							MANDROID 2016
						</h1>
						<p class="content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						</p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
		<button class="prev"><i class="fa fa-angle-left"></i></button>
		<button class="next"><i class="fa fa-angle-right"></i></button>
	</div>
</div>
