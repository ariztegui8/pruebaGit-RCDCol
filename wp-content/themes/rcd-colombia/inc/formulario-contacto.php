<div class="col-md-6">
    <!-- Imagen Mobile -->
    <img class="fondo-contenedor-middle-mobile" src="<?php bloginfo( 'template_url' ); ?>/assets/fondo-contenedor-middle-mobile.png" alt="Fondo-contenedor">

    <!-- Formulario Desktop -->
    <div class="texto-formulario-section-1">
        <p><?php the_field('titulo_formulario');?></p>
    </div>

    <div class="texto2-formulario-section-1">
        <p><?php the_field('bajada_formulario');?></p>
    </div>

    <form>
        <div class="formulario">
            <div class="formulario-label-section1">
                <label for="nombre">Nombre y Apellido*</label>
                <input id="formNombre" name="nombre"type="text">
            </div>
            <div class="formulario-label-section1">
                <label for="celular">Número de celular</label>
                <input  id="formCelular" name="telefono" type="number">
            </div>
            <div class="formulario-label-section1">
                <label for="email">Email*</label>
                <input id="formEmail" name="email" type="email">
            </div>
            <div class="formulario-label-section1">
                <label for="mensaje">Mensaje*</label>
                <textarea id="formMsg" name="msg"></textarea>
            </div>
            <input type="hidden" name="hubspot_owner_id" id="hubspot_owner_id" value="31876291" />

            <div class="btn-formulario-section1">
                <!-- <button type="submit" id="submit-rcd-contacto" type="submit" value="Contactárme">SUBMIT</button> -->
                    <input type="submit" id="submit-rcd-contacto" type="submit" value="Contactárme">
            </div>
        </div>
        <div class="toast-container position-fixed bottom-0 start-50 translate-middle-x p-3" style="z-index: 5;" id="alertaRCDForm"></div>
    </form>

</div>
