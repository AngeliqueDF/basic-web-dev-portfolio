<?php
get_header();
?>

<div class="container">
    <main class="post-content">
        <?php
        the_breadcrumb();
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <article>
                        <header>
                            <?php the_category(); ?>
                            <div class="thumbnail-container">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <h2><?php the_title(); ?></h2>
                        </header>
                        <?php wp_link_pages(); ?>
                        <?php the_content(); ?>
                        <?php wp_link_pages(); ?>

                        <footer>
                            <div class="post-tags">
                                <?php the_tags('', ' '); ?>
                            </div>
                            <p><?php the_author_posts_link(); ?></p>
                        </footer>
                    </article>
                </div>
        <?php } // end while
        } // end if

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;


        ?>
    </main>
</div><!-- /.container -->
<?php
get_footer();
