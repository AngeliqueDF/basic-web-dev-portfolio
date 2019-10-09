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

                        <?php the_post_thumbnail(); ?>

                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header>
                    <div class="article-excerpt">
                        <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                    </div>

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
    echo paginate_links();
    ?>
</main>
<?php
get_footer();
