<?php get_header();?>


        <!-- section 1 -->
        <div class="row container-section-1">

               <div class="col-md-6">
                        <div class="titulo-section-1">
                            <p><?php the_field('titulo');?></p>
                        </div>

                        <div class="parrafo-section-1">
                            <p><?php the_field('bajada');?></p>
                        </div>

                        <div class="btn-fixed">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/btn-fixed.png" alt="">
                        </div>

                        <div class="text-servicios-section-1">
                            <p><?php the_field('subtitulo');?></p>
                        </div>

                        <div class="container-servicios-section-1">

                            <?php while ( have_rows('servicios_seccion_1') ) : the_row(); ?>
                            <div class="contenido-servicios-sec1">
                                <img src="<?php the_sub_field('icono')?>" alt="icono <?php the_sub_field('titulo')?>">
                                <p><?php the_sub_field('titulo')?></p>
                            </div>
                            <?php endwhile; ?>
                        </div>
            </div> <!-- Div agregado faltante -->

            <?php include('inc/formulario-contacto.php');?>


        </div>








        <!-- section 2 -->
        <div class="row container-section-2">
            <div class="title-section2">
                <div class="titles-desktop">
                    <p class="parrafo1-desktop-title-section2"><?php the_field('titulo_cifras');?></p>
                    
                </div>
                <p class="parrafo-mobile-title-section2"><?php the_field('titulo_cifras');?></p>
            </div>
            <div class="row m-0">
                 <!-- Section 2 mobile -->
                 <div class="contenido-col-sec2-mobile">


                 <?php while ( have_rows('group_cifras') ) : the_row(); ?>
                    <div class="contain-mobile">
                        <div>
                            <img src="<?php the_sub_field('imagen');?>" alt="">
                        </div>
                        <div>
                            <p class="parrafo-columna"><?php the_sub_field('cifra');?></p>
                            <p class="parrafo2-columna"><?php the_sub_field('titulo');?></p>
                        </div>
                    </div>
                <?php endwhile; ?>


                    <!-- <div class="contain-mobile">
                        <div>
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/partners-1.png" alt="">
                        </div>
                        <div>
                            <p class="parrafo-columna">135+</p>
                            <p class="parrafo2-columna">colaboradores</p>
                        </div>
                    </div>

                    <div class="contain-mobile">
                        <div>
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/partners-5.png" alt="">
                        </div>
                        <div>
                            <p class="parrafo-columna">46+</p>
                            <p class="parrafo2-columna">clientes</p>
                        </div>
                    </div>

                    <div class="contain-mobile">
                        <div>
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/partners-3.png" alt="">
                        </div>
                        <div>
                            <p class="parrafo-columna">415+</p>
                            <p class="parrafo2-columna">certificaciones</p>
                        </div>
                    </div> -->
                    
                </div>


                <div class="col-md-4">
                    <!-- Section 2 desktop -->
                   <div class="contenido-col-sec2">
                        <div >
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/partners-1.png" alt="" class="sec2-imgs-li">
                        </div>
                        <div>
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/partners-2.png" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/partners-3.png" alt="" class="sec2-imgs-li">
                        </div>
                   </div> 
                </div>


                <div class="col-md-4">
                    <div class="contenido-col-sec2">
                        <div>
                            <p class="parrafo-columna">135+</p>
                            <p class="parrafo2-columna">colaboradores</p>
                        </div>
                        <div>
                            <p class="parrafo-columna">46+</p>
                            <p class="parrafo2-columna">clientes</p>
                        </div>
                        <div>
                            <p class="parrafo-columna">415+</p>
                            <p class="parrafo2-columna">certificaciones</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contenido-col-sec2">
                        <div>
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/partners-4.png" alt="">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/partners-4.png" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/partners-5.png" alt="" class="sec2-img-ld">
                        </div>
                        <div>
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/partners-6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <?php 
        // var_dump(get_field('rcd_servicios'));
        ?>





        <!-- section 3 -->
        <div class="row container-section-3">



            <div class="col-md-12">
                <div class="title-section3">
                    <p>Nuestros servicios</p>
                </div>
            </div>

            <div class="col-md-12">
                <div class="cards-section3">


                <?php while ( have_rows('rcd_servicios') ) : the_row(); ?>

                <?php if ( have_rows('servicio_1') ) : the_row(); ?>
                    <div class="card-1">
                        <div class="contenedor-titulo-card">
                            <p><?php the_sub_field('titulo');?></p>
                        </div>

                        <div>
                            <?php the_sub_field('listado');?>
                            <button><?php the_sub_field('texto_boton');?></button>
                        </div>
                    </div>
                <?php endif; ?>

                <?php endwhile;?>






                
  


                <?php while ( have_rows('rcd_servicios') ) : the_row(); ?>

                <?php if ( have_rows('gservicio_2') ) : the_row(); ?>
                    <div class="card-2">
                        <div class="contenedor-titulo-card2">
                        <p><?php the_sub_field('titulo');?></p>
                        </div>
                       
                        <div>
                            <?php the_sub_field('listado');?>
                            <button><?php the_sub_field('texto_boton');?></button>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile;?>
             
                    <?php while ( have_rows('rcd_servicios') ) : the_row(); ?>
                    <?php if ( have_rows('gservicio_3') ) : the_row(); ?>
                    <div class="card-3">
                        <div class="contenedor-titulo-card">
                            <p><?php the_sub_field('titulo');?></p>
                        </div>
                        <div>
                            <?php the_sub_field('listado');?>
                            <button><?php the_sub_field('texto_boton');?></button>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile;?>
            </div>

                


                <!-- slider nuestros servicios mobile -->
                <div class="slider-nuestros-servicios">
                <?php while ( have_rows('rcd_servicios') ) : the_row(); ?>

                <?php if ( have_rows('servicio_1') ) : the_row(); ?>
                    <div class="card-1">
                        <div class="contenedor-titulo-card">
                            <p><?php the_sub_field('titulo');?></p>
                        </div>

                        <div>
                            <?php the_sub_field('listado');?>
                            <button><?php the_sub_field('texto_boton');?></button>
                        </div>
                    </div>
                <?php endif; ?>

                <?php endwhile;?>


                <?php while ( have_rows('rcd_servicios') ) : the_row(); ?>

                <?php if ( have_rows('gservicio_2') ) : the_row(); ?>
                    <div class="card-2">
                        <div class="contenedor-titulo-card2">
                        <p><?php the_sub_field('titulo');?></p>
                        </div>
                       
                        <div>
                            <?php the_sub_field('listado');?>
                            <button><?php the_sub_field('texto_boton');?></button>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile;?>

                    <?php while ( have_rows('rcd_servicios') ) : the_row(); ?>
                    <?php if ( have_rows('gservicio_3') ) : the_row(); ?>
                    <div class="card-3">
                        <div class="contenedor-titulo-card">
                            <p><?php the_sub_field('titulo');?></p>
                        </div>
                        <div>
                            <?php the_sub_field('listado');?>
                            <button><?php the_sub_field('texto_boton');?></button>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile;?>
                    </div>
                </div>
            </div>



            <!-- section 4 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section-4">
                        <p>¿Cómo hemos ayudado a las empresas?</p>
                    </div>


                    <?php while ( have_rows('elementosayuda') ) : the_row(); ?>
                    
                    <div class="cajas-section4">
                        <div class="caja1-img-section4" id="caja<?php the_row_index();?>">
                            <img src="<?php the_sub_field('elemento_imagen');?>" alt="caja<?php the_row_index();?>">
                        </div>
                        <div class="caja-activa<?php the_row_index();?> caja-texto-section4 animate__animated">
                            <p class="parrafo-bold-section4"><?php the_sub_field('elemento_titulo');?></p>
                            <p class="parrafo-normal-section4"><?php the_sub_field('texto');?></p>
                        </div>
                    </div>
                    <?php endwhile;?>

                    <?php wp_reset_postdata(); ?>
                    <?php wp_reset_query(); ?>

                    
                    <!-- <div class="cajas-section4">
                        <div class="caja1-img-section4">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/image9.png" alt="caja1">
                        </div>
                        <div class="caja-activa caja-texto-section4 animate__animated">
                            <p class="parrafo-bold-section4">Compartimos una flor por las mujeres que han sido víctima de femicidio</p>
                            <p class="parrafo-normal-section4">Creamos un sitio web llamado "Flores que Exigen Respeto" para evidenciar la horrible realidad de las víctimas de femicidio y para que las personas compartan una flor digital por ellas exigiendo respeto.</p>
                        </div>
                    </div>
                    
                    <div class="cajas-section4">
                        <div class="caja1-img-section4" id="caja2">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/image 10.png" alt="caja1">
                        </div>
                        <div class="caja-activa2 caja-texto-section4 animate__animated">
                            <p class="parrafo-bold-section4">Compartimos una flor por las mujeres que han sido víctima de femicidio</p>
                            <p class="parrafo-normal-section4">Creamos un sitio web llamado "Flores que Exigen Respeto" para evidenciar la horrible realidad de las víctimas de femicidio y para que las personas compartan una flor digital por ellas exigiendo respeto.</p>
                        </div>
                    </div>
                    <div class="cajas-section4">
                        <div class="caja1-img-section4" id="caja3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/image 11.png" alt="caja1">
                        </div>
                        <div class="caja-activa3 caja-texto-section4 animate__animated">
                            <p class="parrafo-bold-section4">Compartimos una flor por las mujeres que han sido víctima de femicidio</p>
                            <p class="parrafo-normal-section4">Creamos un sitio web llamado "Flores que Exigen Respeto" para evidenciar la horrible realidad de las víctimas de femicidio y para que las personas compartan una flor digital por ellas exigiendo respeto.</p>
                        </div>
                    </div> -->


                </div>
            </div>

            
            



        <?php include('inc/clientes.php');?>



        <?php include('inc/posts-recientes.php');?>



       

            <!-- Section 7 -->
            <div class="container-section-7">
                <div class="container-titles-section-7">
                    <div class="title-section-7">
                        <p>Estamos presentes en todas las industrias</p>
                    </div>
                    <div class="subtitle-section-7">
                        <p>Hemos trabajado con grandes marcas</p>
                    </div>
                </div>

                    <div class="container-cards-section-7">
                        <?php while (have_rows('industrias')) : the_row(); ?>
                            <div class="contenido-cards-sec7">
                                <div class="card-front">
                                    <img src="<?php the_sub_field('imagen');?>" alt="">
                                </div>
                                <div class="card-back">
                                    <p><?php the_sub_field('titulo');?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div> 

                    <!-- slider cards industrias mobile -->
                    <div class="slider-cards-industrias">
                        <?php while ( have_rows('industrias') ) : the_row(); ?>
                            <div class="contain-card-mobile">
                                <div class="contenido-cards-sec7">
                                    <img src="<?php the_sub_field('imagen');?>" alt="">
                                </div>
                                <p><?php the_sub_field('titulo');?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>

            </div>

            <?php include('inc/piezas-claves.php');?>

 
           
</div>
<?php get_footer();?>