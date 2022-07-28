<?php get_header(); ?>
       
<div class="single-container">
        <div class="single">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    <div class="title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <?php if(has_post_thumbnail()){
                    the_post_thumbnail('post-thumbnails');}
                ?>
                    <?php the_content(); ?>

                </article>
                <?php  endwhile; endif;?>
        </div> 

        <!-- Sidebar -->
       
       <div class="sidebar-single">
            <h2>Últimas Noticias</h2>
            <?php
                global $post;
                $last_posts = get_posts(array('posts_per_page' => 3));
                foreach ( $last_posts as $post ) :
                setup_postdata( $post );?>
            <div>
                <ul class="single-noticias">
                    <li>
                        <article class="excerpt">
                            <div>
                                <h4 class="date"><?php the_time('F j, Y'); ?></h4>
                            </div>
                            <a href="">
                            <h4><?php the_title(); ?></h4>
                                 
                            </a>
                            <p><?php the_excerpt();?></p>
                        </article>
                    </li>
                    
                </ul>
            </div>
            <?php endforeach;
                wp_reset_postdata();
            ?>            
        </div>
        
    </div> 
    <?php get_footer() ?>