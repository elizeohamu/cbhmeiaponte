<?php get_header(); ?>
    <div class="main-content">
        <section>
            <div class="container">
                <div class="row">
                    <?php
                        the_archive_title( '<h1 class="tag-title">', '</h1>' );
                        the_archive_description( '<h2>', '</h2>' );

                        if( have_posts() ):
                            while( have_posts() ): the_post();
                    ?>
                    <?php get_template_part( 'template-parts/content', 'tag' ); ?>
                    <?php
                            endwhile;
                        else:
                    ?>
                    <p><?php _e('There´s nothing yet to be displayed...', 'meiaponte'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>    
<?php get_footer(); ?>
   