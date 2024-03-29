<?php get_header(); ?>

<div class="container">	
			
			<div class="primary">

            <!-- Start the Loop. -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <hr>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p class="date-author">Posted: <?php the_date(); ?> by <?php the_author(); ?></p>
                    <p><?php the_excerpt(); ?></p>
                    
					<?php endwhile; ?> 

					<?php else : ?>
                
                    <p><?php _e( 'Sorry, no posts matched your critera.' ); ?></p>
                    
                <?php endif; ?>
				<p><?php posts_nav_link(); ?></p>
				<hr>

			</div><!--/.primary-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
