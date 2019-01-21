<?php /* Template Name: Full Width Page */ ?>

<?php get_header(); ?>

<div class="container"> 
            
            <div class="full">

            <!-- Start the Loop. -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    
                <?php endwhile; else : ?>
                
                    <p><?php _e( 'Sorry, no pages matched your critera.' ); ?></p>
                    
                <?php endif; ?>

            </div><!--/.primary-->


<?php get_footer(); ?>