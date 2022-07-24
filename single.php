<?php get_header(); ?>
       
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="card-body">
                    <h2><?php the_title(); ?></h2>
                </a>
                <p class="small mb-3">Fecha: <?php the_time('F j, Y'); ?></p>
                <p class="small mb-3">Autor: <?php the_author() ;?></p>
                <p class="small">Categorias : <?php the_category(' / '); ?>
                    Etiquetas: <?php the_tags('', ' / ',''); ?>
                </p>    
                <?php
                    if(has_post_thumbnail()){
                        the_post_thumbnail('post-thumbnails');
                    }
                ?>
                <!--<img src="img/img4.jpg" alt="" class="img-fluid mb-3" width="800px">-->
                <?php the_content();?>
            </div>
        <?php  endwhile; endif;?>
                     
    <?php get_footer() ?>