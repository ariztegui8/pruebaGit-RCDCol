            <!-- Section 8 -->
            <div class="container-section-8">
                <!-- img fondo mobile -->
                <img class="fondo-contenedor-back-mobile" src="<?php bloginfo( 'template_url' ); ?>/assets/fondo-contenedor-back-mobile.png" alt="Fondo-contenedor">
                
                <div class="container-titles-section-8">
                    <div class="title-section-8">
                        <p>Piezas claves</p>
                    </div>
                    <div class="subtitle-section-8">
                        <p>Nuestros aliados</p>
                    </div>
                </div>


                <div class="container-marcas-section-8">

                <?php while ( have_rows('piezas_claves', 'option') ) : the_row(); ?>
                   <div class="contenido-marca">
                        <img src="<?php the_sub_field('logo');?>" alt="<?php the_sub_field('alt_text');?>">
                        <p><?php the_sub_field('titulo');?></p>
                   </div>
                <?php endwhile;?>

                   

                   <img class="fondo-contenedor-footer" src="<?php bloginfo( 'template_url' ); ?>/assets/fondo-contenedor-footer.png" alt="">

                </div>
            </div>