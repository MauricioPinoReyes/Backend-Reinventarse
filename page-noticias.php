<?php get_header(); ?>

<div class="noticias-titulo-card">
		<h2>NOTICIAS</h2>
	</div>
<div class="container-noticias-card">
	
  <div class="noticias-card">
    <figure>
      <img src="<?php bloginfo('template_directory');?>/images/img1.jpeg">
    </figure>
    <div class="text-card">
      <h3>Pacto Global, publica en Mercurio de Santiago sobre el aporte de Komatsu Cummins y sus programas de reinserción</h3>
      <p>Con el objetivo de reinsertar social y laboralmente a jóvenes que infringieron la ley siendo menores de edad, en el 2011, Komatsu Cummins —empresa dedicada a la venta de equipos para la minería, construcción y forestal— creó el programa Reinventarse. […]</p>
      <a href="#">Leer Más</a>
    </div>
  </div>
  <div class="noticias-card">
    <figure>
      <img src="<?php bloginfo('template_directory');?>/images/img2.jpeg">
    </figure>
    <div class="text-card">
      <h3>Fundación Reinventarse firma convenio con el Instituto Profesional Chile (IP Chile)</h3>
      <p>Fundación Reinventarse firma convenio con el Instituto Profesional Chile (IP Chile)   El 29 de diciembre se firmó el acuerdo entre Fundación Reinventarse y el Instituto Profesional Chile (IP Chile) el cual formaliza el Campo Clínico que desde Junio del […]</p>
      <a href="#">Leer Más</a>
    </div>
  </div>
  <div class="noticias-card">
    <figure>
      <img src="<?php bloginfo('template_directory');?>/images/img3.jpeg">
    </figure>
    <div class="text-card">
      <h3>Certificación laboral Reinventarse dic 2016</h3>
      <p>Jóvenes de Fundación Reinventarse reciben certificación laboral El 22 de diciembre se desarrolló la ceremonia en la que 10 jóvenes del programa Reinventarse 2016, recibieron la certificación por las capacitaciones realizadas en Herramientas Computacionales Básicas, Excel Intermedio, y en Apresto […]</p>
      <a href="#">Leer Más</a>
    </div>
  </div>
  <div class="noticias-card">
    <figure>
      <img src="<?php bloginfo('template_directory');?>/images/img1.jpeg">
    </figure>
    <div class="text-card">
      <h3>Ceremonia graduación Gerdanmería</h3>
      <p>Fundación Reinventarse, KCC y Gendarmería Chile entregan oportunidades de formación laboral En el marco del programa de reinserción laboral para jóvenes infractores de ley y la alianza estratégica de Fundación Reinventarse y Komatsu Cummins con organismos estatales como Gendarmería de […]</p>
      <a href="#">Leer Más</a>
    </div>
  </div>
  </div>


  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
      <?php the_title(); ?>
      <?php the_content(); ?>
      
      <?php if(has_post_thumbnail()){
                the_post_thumbnail('post-thumbnails', array(
                'class' => 'img-noticias' ));}
             ?>       

    <?php  endwhile; endif;?>

<?php get_footer(); ?>