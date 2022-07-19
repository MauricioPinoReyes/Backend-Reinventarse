<!DOCTYPE html>
<html lang="es">

<head>
  
  <title>Reinventarse</title>
    <?php wp_head(); ?>
</head>

<body>
  <!--CABECERA FIJA-->
  <header>
    <a href="#" class="brand">
      <img src=".\wp-content\uploads/logo1.png" >
    </a>
    <nav class="menu-nav">
      <div class="btn">
        <i class="fas fa-times close-btn"></i>
      </div>
     <!-- <ul>
        <li><a href="#">Conócenos</a></li>
        <li><a href="#">Nuestro impacto</a></li>
        <li><a href="#">Programas</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#" class="donar">Donar</a></li>
      </ul>-->
      <?php
        $arg = array(
            'theme_location' => 'principal',
        );
        wp_nav_menu($arg);
      ?>


    </nav>
    <div class="btn">
      <i class="fas fa-bars menu-btn"></i>
    </div>
  </header>
  <!-- FIN CABECERA FIJA-->