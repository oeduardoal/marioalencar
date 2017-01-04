<?php get_header(); ?>
<?php get_template_part("templates/header-menu", "tpl"); ?>
<?php get_template_part('templates/title-header', 'tpl'); ?>	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php #if(has_post_thumbnail()): ?>
<?php #else: ?>
<?php #endif; ?>
<div id="map" style="width:100%;height:65vh;"></div>
<div class="page-contato">
	<div class="row">
		<div class="large-11 large-centered medium-10 small-12">
			<div class="content">
				<div class="large-6 medium-6 small-12 columns">
					<h3 class="title">ALGUMA DÚVIDA?</h3>
					<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium atque dicta dolor, accusamus temporibus magni repellendus quisquam assumenda consequuntur consectetur cupiditate debitis similique tempore reprehenderit harum sapiente, unde iusto ratione.</p>
					<div class="form">
						<form action="" method="post">
						  <div class="row">
						    <div class="large-6 columns">
						    	<input type="hidden" name="para" value="eduardoalmeida258@gmail.com">
						      <label>
						        <input type="text" placeholder="Seu nome" name="nome" required="true" />
						      </label>
						    </div>
						  </div>
						  <div class="row">
						    <div class="large-6 columns">
						      <label>
						        <input type="text" placeholder="Seu e-mail para resposta" name="email" required="true" />
						      </label>
						    </div>
						  </div>
						  <div class="row">
						    <div class="large-6 columns">
						      <label>
						        <input type="text" placeholder="Assunto" name="assunto" required="true" />
						      </label>
						    </div>
						  </div>

							<div class="row">
								<div class="large-12 columns">
									<label>
										<textarea placeholder="Mensagem" name="mensagem" style="height: 8.48rem !important;"></textarea>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="large-12 small-12 columns">
									<button type="submit" id="enviar" class="button button-bem-vindo enviar" name="enviar">ENVIAR</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="large-6 medium-6 small-12 columns">
					<h3 class="title">AGRADECIMENTOS</h3>
					<div class="content">
						<?php the_field('agradecimentos'); ?>
					</div>
					<h3 class="title">ALUNOS</h3>
					<?php the_field('alunos');?>
				</div>
			</div>
		</div>		
	</div>
</div>
<script>
	var map;
	function initMap() {
	var LatLgn = {lat: -3.8538606, lng: -38.5107165};
	  map = new google.maps.Map(document.getElementById('map'), {
	    center: LatLgn,
	    zoom: 16,
	    scrollwheel: false,
	  });
	  var marker = new google.maps.Marker({
	    position: LatLgn,
	    map: map,
	    title: 'Hello World!'
	  });
	   var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">EEEP Mário Alencar</h1>'+
      '<div id="bodyContent content">'+
      '<p> <?php the_field('descrição_para_maps'); ?>' + 
      '</p>'+
      '</div>'+
      '</div>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		infowindow.open(map, marker);


	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRJHncUrH4hKD8UPnyOxTBfjmS20DPno4&callback=initMap" async defer></script>
<?php endwhile; else: ?>
<?php endif; ?>
<?php if(is_page('sobre') || is_page('contato')): ?>
	<?php get_template_part('templates/conheca-nossos-cursos', 'tpl'); ?>
<?php endif; ?>
<?php if(is_page('cursos')): ?>
	<?php get_template_part('templates/slide-eventos','tpl'); ?>
<?php endif; ?>
<?php get_footer(); ?>