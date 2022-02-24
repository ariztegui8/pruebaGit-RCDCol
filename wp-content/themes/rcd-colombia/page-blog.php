<?php get_header();?>

<style>
    .gridlink {
        all: unset;
        cursor: pointer;
    }
</style>

        <!-- section 1 -->
        <div class="row position-relative seccion1-contenedor">

        <?php
            // Noticia Destacada
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'post__in' => get_option('sticky_posts'),
                'orderby'=> 'post_date', 
                'order' => 'DESC',
                'post_status' => 'publish',
            );
            $sticky = new WP_Query($args);
            if ($sticky->have_posts()) : $sticky->the_post(); ?>

            <div class="col-md-7">
                <a class="gridlink" href="<?php the_permalink();?>">

                    <div class="img-container-section1">
                    <?php if (get_the_post_thumbnail_URL()) : ?>
                        <img src="<?php the_post_thumbnail_URL(); ?>" class="img-fluid section1-img-form" alt="thumbnail <?php the_title();?>">
                    <?php else: ?>
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/group-101.jpg" class="img-fluid section1-img-form">
                    <?php endif;?>
                        <h2><?php the_title();?></h2>
                    </div>
                </a>
            </div>
            <?php
            endif;
            wp_reset_query();       
            ?>

            <div class="col-md-5">
                <div class="formulario">
                    <h2>Potencia tu negocio</h2>
                    <p>Accede a contenidos exclusivos</p>

                    <form>

                        <input type="text" id="formNombre" name="nombre" placeholder="Nombre">

                        <input type="text" id="formEmail" name="email" placeholder="Email">

                        <input type="submit" id="submit-rcd-suscribir" class="btn-form" value="Suscribirse">
                    </form>
                </div>
            </div>


            <!-- section 2 -->
            <div class="cajas-seccion2">

                <div class="cajas-li">


                    <?php
                        // Noticia Destacada
                        
                        $args = array(
                            'post_type' => 'post',
                            'post__in'            => get_option( 'sticky_posts' ),
                            'posts_per_page'      => 4,
                            'ignore_sticky_posts' => true,
                            'offset' => -1
                            // date descending is default sort so we don't need it explicitly

                        );
                        $blogposts = new WP_Query($args);

                    while ( $blogposts->have_posts() ) : $blogposts->the_post(); ?>

                    <div class="caja-li">
                        <?php if (get_the_post_thumbnail_URL()) : ?>
                            <img src="<?php the_post_thumbnail_URL(); ?>" alt="thumbnail <?php the_title();?>">
                        <?php else: ?>
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/blog-img2.jpg" alt="thumbnail por defecto <?php the_title();?>">
                        <?php endif;?>
                            <div class="fondo-gris">
                                <h2><?php the_title();?></h2>                                
                                <p>            
                                <?php
                                $content = get_the_excerpt(); 
                                if ( !empty( $content ) ){
                                $length = 180;
                                $content = preg_replace("/[^ ]*$/", '', substr($content, 0, $length));
                                $convert = strval( $content );
                                // $content = substr($convert, 12);
                                // $convert = str_replace('graph -->', '', $content);
                                // $content = str_replace('news-single_txt">', '', $convert);
                    
                                echo strip_tags($content, '<br>') . "...";
                                }
                                ?>
                                </p>
                                <a href="<?php the_permalink();?>">Leer más</a>
                            </div>
                    </div>
                    <?php 
                    endwhile;
                    wp_reset_query();       
                    ?>



                </div>
                <hr>
                <div class="cajas-ld">

                    <h2 class="articulos-recientes">Artículos recientes</h2>


                    <?php
                    $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'orderby' => 'post_date',
                                'order' => 'DESC',
                                'posts_per_page' => 5,
                                'post__not_in' => get_option( 'sticky_posts' ),
                                // 'offset' => -1,
                                );

                    $recientes = new WP_Query( $args ); ?>
                    <?php while ( $recientes->have_posts() ) : $recientes->the_post(); ?>

                    <div class="caja-ld">
                        <?php if (get_the_post_thumbnail_URL()) : ?>
                            <img src="<?php the_post_thumbnail_URL(); ?>" alt="thumbnail <?php the_title();?>">
                        <?php else: ?>
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/blog-img3.jpg" alt="">
                        <?php endif; ?>                     
                        <div class="fondo-trasparente">
                            <h2><?php the_title();?></h2>
                            <p><?php echo get_the_date('j F Y'); ?></p>
                            <a href="<?php the_permalink();?>">Leer más</a>
                        </div>
                    </div>
                    <?php 
                    endwhile;
                    wp_reset_query(); 
                    ?>



                </div>
            </div>
            <!--Sliders-->

            <div class="slider-1">


            <?php while ( $blogposts->have_posts() ) : $blogposts->the_post(); ?>
                <div class="caja-li">
                    <?php if (get_the_post_thumbnail_URL()) : ?>
                        <img src="<?php the_post_thumbnail_URL(); ?>" alt="thumbnail <?php the_title();?>">
                    <?php else: ?>
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/blog-img2.jpg" alt="">
                    <?php endif; ?>                     
                    <div class="fondo-gris">
                        <h2><?php the_title();?></h2>
                        <p>     
                        <?php
                        $content = get_the_excerpt(); 
                        if ( !empty( $content ) ){
                        $length = 180;
                        $content = preg_replace("/[^ ]*$/", '', substr($content, 0, $length));
                        $convert = strval( $content );
                        // $content = substr($convert, 12);
                        // $convert = str_replace('graph -->', '', $content);
                        // $content = str_replace('news-single_txt">', '', $convert);
            
                        echo strip_tags($content, '<br>') . "...";
                        }
                        ?>
                        </p>
                        <a href="<?php the_permalink();?>">Leer más</a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>

                <!-- <div class="caja-li">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/blog-img2.jpg" alt="">
                    <div class="fondo-gris">
                        <h2>10 razones por las que tu negocio debe estar en Google My Business</h2>
                        <p>En la actualidad, estar presente cuando un usuario te busca en medios digitales es muy
                            importante, sobre …</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>

                <div class="caja-li">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/blog-img2.jpg" alt="">
                    <div class="fondo-gris">
                        <h2>10 razones por las que tu negocio debe estar en Google My Business</h2>
                        <p>En la actualidad, estar presente cuando un usuario te busca en medios digitales es muy
                            importante, sobre …</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>

                <div class="caja-li">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/blog-img2.jpg" alt="">
                    <div class="fondo-gris">
                        <h2>10 razones por las que tu negocio debe estar en Google My Business</h2>
                        <p>En la actualidad, estar presente cuando un usuario te busca en medios digitales es muy
                            importante, sobre …</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>

                <div class="caja-li">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/blog-img2.jpg" alt="">
                    <div class="fondo-gris">
                        <h2>10 razones por las que tu negocio debe estar en Google My Business</h2>
                        <p>En la actualidad, estar presente cuando un usuario te busca en medios digitales es muy
                            importante, sobre …</p>
                        <a href="#">Leer más</a>
                    </div>
                </div> -->




            </div>
            <hr class="separador-mobile">
            <h2 class="articulos-recientes titulo-slider2">Artículos recientes</h2>

            <div class="slider-2">

            <?php while ( $recientes->have_posts() ) : $recientes->the_post(); ?>
                <div class="caja-ld">
                    <?php if (get_the_post_thumbnail_URL()) : ?>
                        <img src="<?php the_post_thumbnail_URL(); ?>" alt="thumbnail <?php the_title();?>">
                    <?php else: ?>
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/blog-img3.jpg" alt="standard thumbnail <?php the_title();?>">
                    <?php endif; ?>
                    <div class="fondo-trasparente">
                        
                        <h2><?php the_title();?></h2>
                        <p><?php echo get_the_date('j F Y'); ?></p>
                        <a href="<?php the_permalink();?>">Leer más</a>
                    </div>
                </div>
             <?php endwhile; ?>
            <?php wp_reset_query(); ?>
                
                <!-- <div class="caja-ld">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/blog-img3.jpg" alt="">
                    <div class="fondo-trasparente">
                        <h2>10 razones por las que tu negocio debe estar en Google My Business</h2>
                        <p>Noviembre 20201</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>

                <div class="caja-ld">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/blog-img3.jpg" alt="">
                    <div class="fondo-trasparente">
                        <h2>10 razones por las que tu negocio debe estar en Google My Business</h2>
                        <p>Noviembre 20201</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>

                <div class="caja-ld">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/blog-img3.jpg" alt="">
                    <div class="fondo-trasparente">
                        <h2>10 razones por las que tu negocio debe estar en Google My Business</h2>
                        <p>Noviembre 20201</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>

                <div class="caja-ld">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/blog-img3.jpg" alt="">
                    <div class="fondo-trasparente">
                        <h2>10 razones por las que tu negocio debe estar en Google My Business</h2>
                        <p>Noviembre 20201</p>
                        <a href="#">Leer más</a>
                    </div>
                </div> -->



            </div>

            <?php include('inc/piezas-claves.php');?>

            
        </div>

<?php get_footer();?>

