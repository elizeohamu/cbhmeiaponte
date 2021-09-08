<?php get_header(); ?>
    <div class="main-content">
        <section>
            <div class="container">                
                    <?php
                        if( have_posts() ):
                            while( have_posts() ): the_post();
                    ?>
                    <?php get_template_part( 'template-parts/content', get_post_format()); ?>
                    <?php
                            endwhile;
                            ?>
									
								<div class="row">
									<div class="pages text-left col-6">
										<?php previous_posts_link( __( "<< Newer posts", 'meiaponte' ) ); ?>
									</div>
									<div class="pages text-right col-6">
										 <?php next_posts_link( __( "Older posts >>", 'meiaponte' ) ); ?>
									</div>
								</div>
	

								<?php
                        else:
                    ?>
                    <p><?php _e( 'There&rsquo;s nothing yet to be displayed...', 'meiaponte' ); ?></p>
                    <?php endif; ?>                
            </div>
        </section>
    </div>    
<?php get_footer(); ?>
   