<?php get_header(); ?>

<div class="noticias-titulo-card">
		<h2>NOTICIAS</h2>
</div>
<div class="container-noticias-card">
<?php
              global $post;
              $last_posts = get_posts(array('posts_per_page' => 3));

              foreach ( $last_posts as $post ):setup_postdata( $post );?>    
<div class="noticias-card">
          
      <figure>
      <?php if(has_post_thumbnail()){
                  the_post_thumbnail('post-thumbnails');}
              ?>
        
      </figure>
      <div class="text-card">
        <h3><?php the_title();?></h3>
        <p><?php the_excerpt();?></p>
        <a href="#">Leer Más</a>
        
       
          
          
      </div>
        
    </div>
   <?php endforeach;wp_reset_postdata();?>
  </div>
  


  
    

<?php get_footer(); ?>