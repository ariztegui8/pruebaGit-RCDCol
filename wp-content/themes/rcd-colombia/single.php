<?php 
$bannerdesktop = get_field('banner_desktop');
$bannermobile = get_field('banner_mobile');
$authorid = $post->post_author;
$authorog = get_author_name($authorid);

$nombreautor = get_field('nombre_autor');
$cargoautor = get_field('cargo_autor');
$linkedinautor = get_field('linkedin_autor');






// echo '<pre>';
// var_dump($post);
// echo '</pre>';

get_header(); ?>

       <!-- Banner principal -->
	   <div class="row">
                <div class="col-md-12 contenedor-banner-interior">
                    <!-- texto mobile -->
                    <div class="texto-10-razones-mobile">
                        <?php the_title();?>
                    </div>
                    <div>          
                        <?php if ($bannerdesktop) : ?>
                        <img class="banner-interior" src="<?php echo $bannerdesktop;?>" alt="banner-interior-blog">
                        <?php endif;?>

                        <?php if ($bannermobile) : ?>
                        <!-- mobile -->
                        <img class="banner-interior-mobile" src="<?php echo $bannermobile;?>" alt="banner-interior-blog">
                        <?php endif;?>

                    </div>

                    <div>
                        <h2><?php the_title();?></h2>
                    </div>

                    <?php if ($nombreautor || $cargoautor || $linkedinautor) : ?>
                        <div>
                            <h4>Escrito por <?php if ($nombreautor) : echo $nombreautor; else: echo $author; endif;?> 
                                <?php if ($linkedinautor) : ?> 
                                    <a href="<?php echo $linkedinautor;?>"> 
                                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/logo-linkedin.png" alt="logo-linkedin">
                                    </a>
                                <?php endif;?>

                            </h4>
                        </div>
                        <?php if ($cargoautor) : ?>
                            <div>
                                <h5><?php echo $cargoautor; ?></h5>
                            </div>
                        <?php endif; ?>

                    <?php endif;?>      

                </div>
            </div>

            <div class="row">

                <?php the_content();?>

            </div>
       



            <div class="row margen-btn">
                <div class="col-md-12 btn-cotizar-proyecto">
                    <a href="#">¿Necesitas cotizar un proyecto con nosotros?</a>
                </div>
            </div>   
          
        <?php include('inc/posts-recientes.php');?>

        <?php include('inc/piezas-claves.php');?>

        
          

<?php get_footer(); ?>
