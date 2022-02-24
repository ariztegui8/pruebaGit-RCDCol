<?php
        $args = array(
                    'post_type' => 'Post',
                    'post_status' => 'publish',
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'posts_per_page' => 3,
                    'post__not_in' => get_option('sticky_posts'),
                     // 'offset' => -1,
                    );

            $recientes = new WP_Query( $args ); ?>

            <!-- Section 6 -->
            <div class="row container-section-6">
                <div class="col-md-12 margen-s">

                    <div class="container-titles-section6">
                        <div class="title-section-6">
                            <p>Entérate de las últimas tendencias digitales</p>
                        </div>
                        <div class="subtitle-section-6">
                            <p>Compartimos todo lo que tienes que saber acerca de las prácticas recomendadas</p>
                        </div>
                    </div>

                    <div class="container-cards-section6">

                    <?php while ( $recientes->have_posts() ) : $recientes->the_post(); ?>
                        <div class="contenido-card-section-6" id="card">
                            <?php if (get_the_post_thumbnail_URL()) : ?>
                                <img src="<?php the_post_thumbnail_URL(); ?>" alt="thumbnail <?php the_title();?>">
                            <?php else: ?>
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img-section6.png" alt="">
                            <?php endif; ?>  
                            <div class="container-parrafo-sec6">
                                <p class="parrafo-seccion-6"><?php the_title();?></p>
                                <p  class="sub-parrafo-seccion-6">                                 
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
                    <?php endwhile;?>
                    </div>



                    <!-- slider tendencias digitales mobile -->
                    <div class="slider-tendencias-digitales">

                    <?php while ( $recientes->have_posts() ) : $recientes->the_post(); ?>
                        <div class="contenido-card-section-6" id="card">
                        <?php if (get_the_post_thumbnail_URL()) : ?>
                                <img src="<?php the_post_thumbnail_URL(); ?>" alt="thumbnail <?php the_title();?>">
                            <?php else: ?>
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img-section6.png" alt="">
                            <?php endif; ?> 
                            <div class="container-parrafo-sec6">
                                <p class="parrafo-seccion-6"><?php the_title();?></p>
                                <p  class="sub-parrafo-seccion-6">                                <?php
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
                                ?>   </p>
                                <a href="<?php the_permalink();?>">Leer más</a>
                            </div>
                        </div>
                    <?php endwhile;?>
                    <?php wp_reset_query(); ?>

                        <!-- <div class="contenido-card-section-6">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img-section6-2.png" alt="">
                            <div class="container-parrafo-sec6">
                                <p class="parrafo-seccion-6">10 razones por las que tu negocio debe estar en Google My Business</p>
                                <p class="sub-parrafo-seccion-6">En la actualidad, estar presente cuando un usuario te busca en medios digitales es muy importante, sobre …</p>
                                <a href="#">Leer más</a>
                            </div>
                        </div>
                        <div class="contenido-card-section-6">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img-section6-3.png" alt="">
                            <div class="container-parrafo-sec6">
                                <p class="parrafo-seccion-6">10 razones por las que tu negocio debe estar en Google My Business</p>
                                <p class="sub-parrafo-seccion-6">En la actualidad, estar presente cuando un usuario te busca en medios digitales es muy importante, sobre …</p>
                                <a href="#">Leer más</a>
                            </div>
                        </div> -->

                    </div>

                </div>
            </div>