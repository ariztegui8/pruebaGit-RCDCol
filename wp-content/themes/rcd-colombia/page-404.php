<?php get_header();?>

<div class="container">
                    <h2 class="subti">¡Oops! Algo ha salido mal.</h2>

                    <p style="text-align: center;">No hemos encontrado la página que buscas.</p>

                    <img class="img-m" src="<?php bloginfo( 'template_url' ); ?>/assets/404.png" alt="Error">

                    <div class="btn-pink">
                        <a href="<?php echo get_option('home'); ?>">Volver al Home</a>
                    </div>

                    <div class="mobile">
                        <h2 class="subti piezas">Piezas claves</h2>

                        <div class="aliados">
                            <div class="aliado">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/thelabel.png" alt="The label" width="214">
                                <p>Contenido libre y sin ataduras</p>
                            </div>


                            <div class="aliado">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/mind.png" alt="Somos mind" class="aliados" width="162">
                                <p>Human Centered-Design</p>
                            </div>


                            <div class="aliado">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/Soulmedia.png" alt="Soulmedia" class="aliados" width="215">
                                <p>Conversion First</p>
                            </div>

                            <div class="aliado">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/AD.png" alt="Agencia Digital" width="173">
                                <p>Tecnología y tendencias en Marketing Digital</p>
                            </div>

                            <div class="aliado">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/wihook.png" alt="wihook" width="135">
                                <p>Innovación tecnológica para conocer e impactar a tu cliente</p>
                            </div>
                        </div>
                    </div>
                </div>

<?php get_footer();?>