<article <?php post_class(); ?>>    
    <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
    <header>
        <div class="post-header-area">
            <h2><?php the_title(); ?></h2>
            <p><?php _e('Published in ', 'meiaponte'); ?> <?php echo get_the_date(); ?> <?php _e('by', 'meiaponte'); ?> <?php the_author_posts_link(); ?></p>
            <p><?php _e('Categories: ', 'meiaponte'); ?> <?php the_category( ' ' ); ?></p>
            <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
        </div>        
    </header>    
    <?php the_content(); ?>    
</article>