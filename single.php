<?php
get_header();
?>

<div class="container">
    <main class="post-content">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <article>
                    <header>
                        <?php the_category(); ?>
                        <div>
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
        <?php } // end while
        } // end if
        
        comment_form();
        ?>
    </main>
</div><!-- /.container -->
<?php
get_footer();
