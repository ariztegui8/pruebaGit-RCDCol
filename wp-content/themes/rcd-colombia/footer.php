<?php
$ig = get_field('link_instagram', 'option');
$li = get_field('link_linkedin', 'option');
$tw = get_field('link_twitter', 'option');
$fb = get_field('link_facebook', 'option');
$yt = get_field('link_youtube', 'option');
$cr = get_field('copyright', 'option');

?>


<!-- Footer -->
<footer>

	<?php wp_footer(); ?>

		<div class="contenido-footer">
			<div class="parrafo-footer">
				<p><?php echo $cr;?></p>
			</div>
			<div class="redes-sociales">


			<?php if ($ig) : ?>
				<a href="<?php echo $ig;?>">
					<img src="<?php bloginfo( 'template_url' ); ?>/assets/instagram.svg" alt="instagram icon">
				</a>
			<?php endif; ?>

			<?php if ($li) : ?>
				<a href="<?php echo $li;?>">
					<img src="<?php bloginfo( 'template_url' ); ?>/assets/linkedin.svg" alt="linkedin icon">
				</a>
			<?php endif; ?>

			<?php if ($tw) : ?>
				<a href="<?php echo $tw;?>">
					<img src="<?php echo $tw;?>" alt="twitter icon">
				</a>
			<?php endif; ?>

			</div>
		</div>
</footer>

    <!-- Scripts JQUERY - SLICK -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	

    <!-- Script JS -->
	<!-- <script src="<?php bloginfo( 'template_url' ); ?>/js/recibido.js"></script> -->


	<?php wp_reset_postdata(); 
	$curposttype = get_post_type();

	$thisID = get_the_ID();

	?>
	<?php if ($thisID == 14) : ?>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/recibido.js"></script>
	<?php endif; ?>

    <?php if (is_404() || $thisID == 16 || $thisID == 14) : ?>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/registroExitoso.js"></script>
	<?php endif; ?>

	<?php if ($thisID == 7) : ?>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/index.js"></script>
	<?php endif; ?>

	<?php if (get_the_title() == 'Blog') : ?>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/blog.js"></script>
	<?php endif;?>

	<?php if ($curposttype == 'post') : ?>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/interiorBlog.js"></script>
	<?php endif;?>

	<?php if ($thisID == 7) : ?>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/form-contacto.js"></script>
	<?php endif;?>

	<?php if ($thisID == 10) : ?>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/form-suscribir.js"></script>
	<?php endif;?>


</body>
</html>