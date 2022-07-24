  <!--HEADER-->
  <?php get_header(); ?>
  <!--HEADER-->
  
  <!--SLIDER 1-->
  <div class="slideshow">
    <ul class="slider">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <li class="slider1">
            <?php if(has_post_thumbnail()){
                the_post_thumbnail('post-thumbnails', array(
                'class' => 'img-noticias' ));}
             ?>                    
                
        <section class="caption animacion2">
          <a href=" <?php the_permalink(); ?>"><?php the_title('<h1>', '</h1>' ); ?></a>
            <!-- <p><?php the_excerpt()?></p>-->
				</section>
			</li>                
    <?php  endwhile; endif;?>



     <!-- <li class="slider1">
        <img src=".\wp-content\uploads/img1.jpeg" alt="">
        <section class="caption">
          <p>Capacitación, apoyo y desarrollo para la reinserción</p>
          <h1>Construyamos una sociedad</h1>
          <h1>de oportunidades </h1>
        </section>
      </li>
      <li class="slider1">
        <img src=".\wp-content\uploads/img2.jpeg" alt="">
        <section class="caption">
          <p>Capacitación, apoyo y desarrollo para la reinserción</p>
          <h1>Construyamos una sociedad</h1>
          <h1>de oportunidades </h1>
        </section>
      </li>
      <li class="slider1">
        <img src=".\wp-content\uploads/img3.jpeg" alt="">
        <section class="caption">
          <p>Capacitación, apoyo y desarrollo para la reinserción</p>
          <h1>Construyamos una sociedad</h1>
          <h1>de oportunidades </h1>
        </section>
      </li>
    </ul> -->
    
    <!--<ol class="pagination">
    </ol>-->

    <div class="left">
      <span class="fa fa-chevron-left"></span>
    </div>

    <div class="right">
      <span class="fa fa-chevron-right"></span>
    </div>

  </div>
  <!--FIN SLIDER 1-->

  <!--QUE HACEMOS-->
  <div class="que-hacemos-container animacion">
    <div>
      <img src=".\wp-content\uploads/img4.png" width="100px">
    </div>
    <div class="que-hacemos-tex">
      <div class="que-hacemos-title">
        <h1>Qué hacemos</h1>
      </div>
      <p>Nuestra fundación está orientada en contribuir
        a una sociedad más justa e inclusiva, en la que
        todas y todos se sientan legitimizados y con oportunidades
        de desarrollar sus potencialidades.</p>
    </div>
  </div>

  <!--FIN QUE HACEMOS-->

  <!--SLIDER 2-->

  <div class="slider2 ">
    <div class="slideshow animacion2">
      <ul class="slider">
        <li>
          <img src=".\wp-content\uploads/slider2img1.png" alt="">
          <div class="slider-tex">
            <h1>LOREM M.</h1>
            <p>Lorem ipsum dolor, sit amet
              consectetur sit amet
              consecteturadipisicing
              psum dolor, sit elit.</p>
          </div>

        </li>
        <li>
          <img src=".\wp-content\uploads/slider2img2.png" alt="">
          <div class="slider-tex">
            <h1>LOREM M.</h1>
            <p>Lorem ipsum dolor, sit amet
              consectetur sit amet
              consecteturadipisicing
              psum dolor, sit elit.</p>
          </div>
        </li>
        <li>
          <img src=".\wp-content\uploads/slider3img3.png" alt="">
          <div class="slider-tex">
            <h1>LOREM M.</h1>
            <p>Lorem ipsum dolor, sit amet
              consectetur sit amet
              consecteturadipisicing
              psum dolor, sit elit.</p>
          </div>
        </li>
      </ul>
      <div class="left">
        <span class="fa fa-chevron-left"></span>
      </div>
      <div class="right">
        <span class="fa fa-chevron-right"></span>
      </div>
    </div>
    <div class="casos-exito">
      <div class="casos-exito-text animacion">
        <h1>Casos de éxito</h1>
      </div>
    </div>
  </div>

  <!--FIN SLIDER 2-->

  <!--CONTADOR ESTADISTICAS Y BOTON DONAR-->

  <div class="contador-container">
    <div class="capacitaciones animacion">
      <h1>200</h1>
      <p>Jóvenes capacitados</p>
    </div>
    <div class="contrataciones animacion">
      <h1>100+</h1>
      <p>Contrataciones</p>
    </div>
    <div class="cursos animacion">
      <h1>15</h1>
      <p>Cursos realizados</p>
    </div>
  </div>
  <div class="donacion-container animacion">
    <div class="donacion-text">
      <h4>¿Te gustaría ser parte y seguir apoyando a más personas?</h4>
    </div>
    <div class="donacion-boton">
      <input type="button" value="Haz tu donacion aquí">
    </div>
  </div>

  <!-- FIN CONTADOR ESTADISTICAS Y BOTON DONAR-->

  <!--  PROGRAMAS -->

  <div class="programas-container animacion2">
    <div class="programas-titulo">
      <h1>Nuestros Programas</h1>
    </div>
    <div class="programas-container-modal">

      <!--VENTANA MODAL 1-->

      <div id="open1" class="box">
        <img src=".\wp-content\uploads/icono1.png" class="icono" alt="">
        <h5>PROGRAMA INTEGRAL
          DE HABILITACIÓN
          LABORAL
        </h5>
        <h4>PROGRAMA INTEGRAL
          DE HABILITACIÓN
          LABORAL</h4>
      </div>
      <div id="modal_container1" class="modal-container">
        <div class="modal">
          <p><strong>Duración.</strong> Desde 6 meses a 3 años.</p>
          <p><strong>Componentes</strong></p>
          <div class="lista">
            <ul>
              <li>Desarrollo y fortalecimiento de habilidades personales y <br>
                laborales.</li>
              <li>Capacitación técnica en oficios en rubros productivos <br>
                ajustados a las necesidad de la empresa.</li>
              <li>Pasantía laboral en la empresa Komatsu Cummins Chile.</li>
              <li>Contratación Laboral.</li>
            </ul>
          </div>
          <p><strong>Apoyo transversal</strong></p>
          <div class="lista">
            <ul>
              <li>Acompañamiento a la empresa contratante.</li>
              <li>Acompañamiento y seguimiento al joven contratado.</li>
              <li>Actividades transversales (deportivas-culturales) y <br>
                voluntariado.</li>
              <li>Apadrinamiento de colaboradores de la empresa.</li>
              <li>Monitoreo y acompañamiento del proceso escolar.</li>
              <li>Trabajo familiar (figura significativa y/o de apoyo).</li>
            </ul>
          </div>
          <p><strong>Cierre y egreso del programa.</strong> Programa Anual de <br>
            Seguimiento (PAS).
          </p>
          <div class="modal-btn-close">
            <button id="close1">Cerrar</button>
            <button><a href="https://www.google.com/?hl=es">Ver todos los Programas</a></button>
          </div>
        </div>
      </div>

      <!--VENTANA MODAL 2-->

      <div id="open2" class="box">
        <img src=".\wp-content\uploads/icono2.png" class="icono" alt="">
        <h5>PROGRAMA DE
          INTERMEDIACIÓN
          LABORAL</h5>
        <h4>PROGRAMA DE
          INTERMEDIACIÓN
          LABORAL
        </h4>
      </div>
      <div id="modal_container2" class="modal-container">
        <div class="modal">
          <p><strong>Duración.</strong> Desde 6 meses a 1 año.</p>
          <p><strong>Componentes</strong></p>
          <div class="lista">
            <ul>
              <li>Desarrollo y fortalecimiento de habilidades personales y <br>
                laborales.</li>
              <li>Habilitación en uso de TIC</li>
              <li>Colocación y mantención laboral.</li>
            </ul>
          </div>
          <p><strong>Apoyo transversal</strong></p>
          <div class="lista">
            <ul>
              <li>Acompañamiento a la empresa contratante.</li>
              <li>Acompañamiento y seguimiento al joven contratado.</li>
              <li>Evaluación sistemática del desempeño laboral.</li>
              <li>Apadrinamiento de colaboradores de la empresa.</li>
              <li>Monitoreo y acompañamiento del proceso escolar.</li>
              <li>Trabajo familiar (figura significativa y/o de apoyo).</li>
            </ul>
          </div>
          <p><strong>Cierre y egreso del programa.</strong> Programa Anual de <br>
            Seguimiento (PAS).
          </p>
          <div class="modal-btn-close">
            <button id="close2">Cerrar</button>
            <button><a href="https://www.google.com/?hl=es">Ir a todos los Programas</a></button>
          </div>
        </div>
      </div>

      <!--VENTANA MODAL 3-->

      <div id="open3" class="box">
        <img src=".\wp-content\uploads/icono3.png" class="icono" alt="">
        <h5>SERVICIOS
          TRANSITORIOS
          FUNDACIÓN
          REINVENTARSE</h5>
        <h4>SERVICIOS
          TRANSITORIOS
          FUNDACIÓN
          REINVENTARSE</h4>
      </div>
      <div id="modal_container3" class="modal-container">
        <div class="modal">
          <p><strong>Duración.</strong> Desde 6 meses a 1 año.</p>
          <p><strong>Componentes</strong></p>
          <div class="lista">
            <ul>
              <li>Desarrollo y fortalecimiento de habilidades personales y <br>
                laborales.</li>
              <li>Capacitación técnica en oficios en rubros productivos <br>
                ajustados a las necesidad de la empresa.</li>
              <li>Contratación Laboral por parte de Fundación <br>
                Reinventarse.</li>
            </ul>
          </div>
          <p><strong>Apoyo transversal</strong></p>
          <div class="lista">
            <ul>
              <li>Acompañamiento a la empresa contratante.</li>
              <li>Acompañamiento y seguimiento al joven contratado.</li>
              <li>Monitoreo y acompañamiento del proceso escolar.</li>
              <li>Trabajo familiar (figura significativa y/o de apoyo).</li>
            </ul>
          </div>
          <p><strong>Cierre y egreso del programa.</strong> Programa Anual de <br>
            Seguimiento (PAS).
          </p>
          <div class="modal-btn-close">
            <button id="close3">Cerrar</button>
            <button><a href="https://www.google.com/?hl=es">Ir a todos los Programas</a></button>
          </div>
        </div>
      </div>

      <!--VENTANA MODAL 4-->

      <div id="open4" class="box">
        <img src=".\wp-content\uploads/icono4.png" class="icono" alt="">
        <h5>UNIDAD PRODUCTIVA
          ESCUELA TALLER
          24 VOLT.</h5>
        <h4>UNIDAD PRODUCTIVA
          ESCUELA TALLER
          24 VOLT.</h4>
      </div>
      <div id="modal_container4" class="modal-container">
        <div class="modal">
          <p><strong>Duración.</strong> Desde 2 meses a 1 año.
          </p>
          <p><strong>Componentes</strong></p>
          <div class="lista">
            <ul>
              <li>Desarrollo y fortalecimiento de habilidades personales y <br>
                laborales.</li>
              <li>Módulos transversales de apresto laboral, habilidades <br>
                blandas y laborales.</li>
              <li>Capacitación técnica en remanufacturación de <br>
                componentes por parte de la empresa KRCC.</li>
              <li>Contratación Laboral por parte de Fundación <br>
                Reinventarse.</li>
              <li>Pasantías Laborales</li>
            </ul>
          </div>
          <p><strong>Apoyo transversal</strong></p>
          <div class="lista">
            <ul>
              <li>Acompañamiento al coordinador de la unidad.</li>
              <li>Acompañamiento terapéutico y sistemático al joven <br> en
                su proceso formativo-productivo-laboral.</li>
              <li>Sesiones de intervención individual enfocadas en las <br>
                necesidades y dificultades del joven. </li>
              <li>Monitoreo y acompañamiento del proceso escolar.</li>
              <li>Trabajo familiar (figura significativa y/o de apoyo).</li>

            </ul>
          </div>
          <p><strong>Cierre y egreso del programa.</strong> Programa Anual<br>
            de Seguimiento (PAS)-Contratación por parte <br> de la empresa
            KRCC.
          </p>
          <div class="modal-btn-close">
            <button id="close4">Cerrar</button>
            <button><a href="https://www.google.com/?hl=es">Ir a todos los Programas</a></button>
          </div>
        </div>
      </div>

      <!--VENTANA MODAL 5-->

      <div id="open5" class="box">
        <img src=".\wp-content\uploads/icono5.png" class="icono" alt="">
        <h5>PROGRAMA DE
          CAPACITACIÓN
          PROCAP</h5>
        <h4>PROGRAMA DE
          CAPACITACIÓN
          PROCAP</h4>
      </div>
      <div id="modal_container5" class="modal-container">
        <div class="modal">
          <p><strong>Duración.</strong> Desde 120 a 150 horas.
          </p>
          <p><strong>Características de la capacitación</strong></p>
          <div class="lista">
            <ul>
              <li>Cupo para 10 beneficiarios.</li>
              <li>Hombres y mujeres derivados de SENAME y GENCHI</li>
              <li>Acondicionados y habilitados para ejecución en el <br>
                medio libre y/o centros privativos de libertad.</li>
              <li>Certificados por SENCE.</li>
            </ul>
          </div>
          <p><strong>Áreas de capacitación</strong></p>
          <div class="lista">
            <ul>
              <li>Operación de grúa horquilla con obtención de <br>
                licencia clase D.</li>
              <li>Operación de maquinaria pesada.</li>
              <li>Soldadura calificada</li>
              <li>Logística y bodega.</li>
              <li>Asistencia administrativa y contable.</li>
              <li>Mecánica básica.</li>
            </ul>
          </div>
          <div class="modal-btn-close">
            <button id="close5">Cerrar</button>
            <button><a href="https://www.google.com/?hl=es">Ir a todos los Programas</a></button>
          </div>
        </div>
      </div>

      <!--VENTANA MODAL 6-->

      <div id="open6" class="box">
        <img src=".\wp-content\uploads/icono6.png" class="icono" alt="">
        <h5>SERVICIO DE
          FORMACIÓN LABORAL </h5>
        <h4>SERVICIO DE
          FORMACIÓN LABORAL </h4>
      </div>
      <div id="modal_container6" class="modal-container">
        <div class="modal">
          <p><strong>Duración.</strong> Desde 3 meses a 1 año.
          </p>
          <p><strong>Componentes Etapa Pre-Oficio</strong></p>
          <div class="lista">
            <ul>
              <li>Desarrollo y fortalecimiento de habilidades personales y <br>
                laborales.</li>
              <li>Módulos transversales de apresto laboral y <br>
                empleabilidad.</li>
              <li>Módulos de actividad física, deporte y ergoterapia.</li>
            </ul>
          </div>
          <p><strong>Etapa Oficio</strong></p>
          <div class="lista">
            <ul>
              <li>Módulos de formación en oficio.</li>
              <li>Habilitación en uso de TIC</li>
              <li>Intermediación laboral</li>
            </ul>
          </div>
          <p><strong>Apoyo transversal</strong></p>
          <div class="lista">
            <ul>
              <li>Acompañamiento terapéutico y sistemático al <br>
                joven en su proceso de formación.</li>
              <li>Sesiones de intervención individual enfocadas <br>
                en las necesidades y dificultades del joven.</li>
              <li>Evaluación sistemática del desempeño en las <br>
                áreas de formación pre-oficio/oficio.</li>
            </ul>
          </div>
          <p><strong>Cierre y egreso del programa.</strong> Certificación en <br> oficios e
            intermediación laboral con redes del medio libre.</p>
          <div class="modal-btn-close">
            <button id="close6">Cerrar</button>
            <button><a href="https://www.google.com/?hl=es">Ir a todos los Programas</a></button>
          </div>
        </div>
      </div>

      <!--VENTANA MODAL 7-->

      <div id="open7" class="box">
        <img src=".\wp-content\uploads/icono7.png" class="icono" alt="">
        <h5>UNIDAD FORMATIVA PRODUCTIVA CASA 7</h5>
        <h4>UNIDAD FORMATIVA PRODUCTIVA CASA 7</h4>
      </div>
      <div id="modal_container7" class="modal-container">
        <div class="modal">
          <p><strong>Duración.</strong> Desde 3 meses a 1 año.
          </p>
          <p><strong>Componentes Etapa Pre-Oficio</strong></p>
          <div class="lista">
            <ul>
              <li>Desarrollo y fortalecimiento de habilidades personales y <br>
                laborales.</li>
              <li>Módulos transversales de apresto laboral y <br>
                empleabilidad.</li>
              <li>Módulos de actividad física, deporte y ergoterapia.</li>
            </ul>
          </div>
          <p><strong>Etapa Oficio</strong></p>
          <div class="lista">
            <ul>
              <li>Módulos de formación en oficio.</li>
              <li>Habilitación en uso de TIC</li>
              <li>Intermediación laboral</li>
            </ul>
          </div>
          <p><strong>Apoyo transversal</strong></p>
          <div class="lista">
            <ul>
              <li>Acompañamiento terapéutico y sistemático al <br>
                joven en su proceso de formación.</li>
              <li>Sesiones de intervención individual enfocadas <br>
                en las necesidades y dificultades del joven.</li>
              <li>Evaluación sistemática del desempeño en las <br>
                áreas de formación pre-oficio/oficio.</li>
            </ul>
          </div>
          <p><strong>Cierre y egreso del programa.</strong> Certificación en <br> oficios e
            intermediación laboral con redes del medio libre.</p>
          <div class="modal-btn-close">
            <button id="close7">Cerrar</button>
            <button><a href="https://www.google.com/?hl=es">Ir a todos los Programas</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FIN PROGRAMAS -->

  <!--SLIDER 3-->
  <div class="slider3-container animacion2">
    <div class="slider3">
      <div class="noticias-titulo">
        <div class="noticias-text">
          <h1>Últimas Noticias</h1>
        </div>
      </div>
      <div class="slideshow ">
        <ul class="slider">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>
              <?php if(has_post_thumbnail()){
                  the_post_thumbnail('post-thumbnails');}
              ?>                    
              <div class="slider-tex">
              <a href=" <?php the_permalink(); ?>"><?php the_title('<h1>', '</h1>' ); ?></a>
                <p><?php the_excerpt()?></p>
              </div>
          </li>                
        <?php  endwhile; endif;?>
          
        </ul>

        <div class="left3">
          <span class="fa fa-chevron-left"></span>
        </div>        
        <div class="right3">
          <span class="fa fa-chevron-right"></span>
        </div>
      </div>
    </div>     
    </div>

  <!--FIN SLIDER 3-->

  <!--SLIDER 4-->

  <div class="container-slider4">
    <h1>Nuestras Alianzas</h1>
    <div class="slider4 animacion2">
      <div class="item"><a href="#"><img src=".\wp-content\uploads/Group_116.png" alt=""></a></div>
      <div class="item"><a href="#"><img src=".\wp-content\uploads/Group_117.png" alt=""></a></div>
      <div class="item"><a href="#"><img src=".\wp-content\uploads/Group_118.png" alt=""></a></div>
      <div class="item"><a href="#"><img src=".\wp-content\uploads/Group_119.png" alt=""></a></div>
      <div class="item"><a href="#"><img src=".\wp-content\uploads/Group_120.png" alt=""></a></div>
      <div class="item"><a href="#"><img src=".\wp-content\uploads/Group_121.png" alt=""></a></div>
      <div class="item"><a href="#"><img src=".\wp-content\uploads/Group_122.png" alt=""></a></div>
      <div class="item"><a href="#"><img src=".\wp-content\uploads/Group_123.png" alt=""></a></div>
    </div>
  </div>

  <!--FIN SLIDER 4-->

  <!--FORMULARIO-->
  
  <div class="container-form-title">
      <h2>Contacta con nosotros</h2>
    </div>
  <div class="container-form animacion">
    <?php echo do_shortcode('[contact-form-7 id="5" title="Formulario de contacto 1"]'); ?>
  </div>

  <!--FIN FORMULARIO-->

  <!--FOOTER-->
  <?php get_footer(); ?>
  <!--FOOTER-->
</body>

</html>