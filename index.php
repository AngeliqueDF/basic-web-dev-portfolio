<?php
get_header();
?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <div class="container">
                <article>
                    <header>
                        <?php the_category(); ?>
                        <div>
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header>
                    <div class="article-excerpt">
                        <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                    </div>

                    <footer>
                        <?php the_tags('', ' '); ?>
                        <p><?php the_author_posts_link(); ?></p>
                    </footer>
                </article>
            </div>
    <?php } // end while
    } // end if
    ?>
</main>
<?php
get_footer();
