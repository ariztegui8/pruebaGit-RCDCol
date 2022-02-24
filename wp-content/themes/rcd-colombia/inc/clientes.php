<!-- Section 5 -->
<div class="container-section-5">
                <div class="container-title">
                    <div class="title-section-5">
                        <p>Nuestros clientes</p>
                    </div>
                    <div class="subtitle-section-5">
                        <p><?php the_field('subtitulo', 'option');?></p>
                    </div>
                </div>
                <div class="container-mapa">
                    <img class="mapa" src="<?php bloginfo( 'template_url' ); ?>/assets/Mapa.png" alt="mapa">
                    <img class="mapa-mobile" src="<?php bloginfo( 'template_url' ); ?>/assets/mapa-mobile.png" alt="mapa">
                </div>
                    
                    <div class="slider">

                        <?php while ( have_rows('clientes', 'option') ) : the_row(); ?>
                            <div class="slider-section">
                                <img class="img-clientes" src="<?php the_sub_field('logo');?>" alt="<?php the_sub_field('alt_text');?>">
                            </div>
                        <?php endwhile; ?>

                    </div>
                    
                    <div class="container-padre-ubicacion"> 
                        <div class="container-ubicacion">
                            <div class="ubicacion-col">
                                <img class="img-ubicacion" src="<?php bloginfo( 'template_url' ); ?>/assets/icon-ubicacion.png" alt="">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/col-bogota.png" alt="">
                            </div>
                            <div class="ubicacion-chi">
                                <img class="img-ubicacion" src="<?php bloginfo( 'template_url' ); ?>/assets/icon-ubicacion.png" alt="">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/chi-las-condes.png" alt="">
                            </div>
                        </div>
                        <div class="ubicaciones-mobile">
                            <img class="imagen-ubicaciones-mobile" src="<?php bloginfo( 'template_url' ); ?>/assets/ubicaciones-mobile.png" alt="ubicaciones">
                        </div>
                </div>
                
               
            </div>