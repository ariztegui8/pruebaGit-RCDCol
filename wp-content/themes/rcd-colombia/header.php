<?php
   global $post;
   if ($post !== NULL) {
   $post_slug = $post->post_name;
   $post_type = get_post_type();
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title();?></title>

    
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/style.css">


    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/variables.css">


    <?php if (get_the_title() == 'Blog') : ?>
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/blog.css">
    <?php endif; ?>

    <?php if ($post_type == 'post') : ?>
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/interior-de-blog.css">
    <?php endif; ?>
    
    <?php if (is_404() || get_the_ID() == 16 || get_the_ID() == 14) : ?>
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/registro-404.css">
    <?php endif;?>


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">   

    <!-- Animations style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

	<?php wp_head(); ?>

	
</head>
<body <?php body_class(); ?>>
<div class="container container-padre">
            <img class="fondo-contenedor" src="<?php bloginfo( 'template_url' ); ?>/assets/fondo-contenedor.png" alt="Fondo-contenedor">

            <!-- Imagen Mobile -->
            <img class="fondo-contenedor-mobile" src="<?php bloginfo( 'template_url' ); ?>/assets/fondo-contenedor-mobile.png" alt="Fondo-contenedor">
        
		<!-- Header -->
        <header> 
            <nav>
                <div class="logo-header">
					<a href="<?php echo get_option('home'); ?>"> <!--ESTO NO ESTÁ FUNCIONANDO. POSIBLE SOBREESCRITURA JS-->
                    	<img src="<?php bloginfo( 'template_url' ); ?>/assets/LogoRCD.png" alt="Logo-header">
					</a>
                </div>

                <div class="enlaces">
                    <!-- <a href="#">Servicios</a>
                    <a href="#">Casos de estudio</a>
                    <a href="#">Industrias</a> -->
                    <a href="<?php echo get_option('home'); ?>/blog">Blog</a>
                    <!-- <a href="#">Contacto</a> -->
                </div>
            </nav>
        </header>

        <!-- menu hamburguesa mobile -->

       
    <div class="menu-mobile">
    <div class="logo-mobile">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/LogoRCDMobile.png" alt="Logo-mobile">
            </div>
        <div class="hamburger">
            <div class="logo-mobile-activo">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/logo-menu-mobile.png" alt="Logo-mobile">
            </div>
            <div>
                <div class="_layer -top"></div>
                <div class="_layer -mid"></div>
                <div class="_layer -bottom"></div>
            </div>
        </div>
    </div>
    

        <nav class="menuppal">
            <ul>
                <!-- <li><a href="#">Servicios</a></li>
                <li><a href="#">Casos de estudio</a></li>
                <li><a href="#">Industrias</a></li> -->
                <li><a href="<?php echo get_option('home'); ?>/blog">Blog</a></li>
                <!-- <li><a href="#">Contacto</a></li> -->
            </ul>
        </nav>
