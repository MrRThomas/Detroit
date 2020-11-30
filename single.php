<?php get_header(); ?>

<div class="container">	
			
			<div class="primary">
                
                <hr>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    
                <?php 

                // If comments are open or we have at least one comment, load up the comment template.
 				if ( comments_open() || get_comments_number() ) :
     			comments_template();
 				endif; ?>
				<hr>

			</div><!--/.primary-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
