<?php get_header(); ?>


    <main>
        <div class="container">
        <?php 
        the_breadcrumb();
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <article class="post-content">
                            <header>
                                <!-- <div class="thumbnail-container"> -->
                                    <?php// the_post_thumbnail(); ?>
                                <!-- </div> -->
                                <h1><?php the_title(); ?></h1>
                                <?php the_category(); ?>
                                <?php the_date(); ?>
                                <br />
                                <?php the_author(); ?>
                                <?php $fields = get_field_objects(); ?>
                                    <?php if( $fields ): ?>
                                    <ul class="projects-external-links">
                                            <?php foreach( $fields as $field ): ?>
                                                <?php if($field['value'] != ''): ?>
                                                    <li><a href="<?php echo $field['value']; ?>"><?php echo $field['label']; ?></a></li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                                </ul>
                                    <?php endif; ?>
                            </header>
                            <?php wp_link_pages(); ?>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>

                            <footer>
                            <p><?php the_author_posts_link(); ?></p>
                                <div class="post-tags">
                                    <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
                                </div>
                                
                            </footer>
                        </article>
                    </div>
                    <?php } // end while
        } // end if
        ?>
        </div>

        <div class="container">
            <?php 
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
            ?>
        </div>
    </main>
</div><!-- /.container -->
<?php
get_footer();
