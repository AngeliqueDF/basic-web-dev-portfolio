<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <div class="container">
            <article>
                <header>
                    <?php the_category(); ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </header>
                <div class="article-excerpt">
                    <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                </div>

                <footer>
                    <?php the_tags('', ' '); ?>
                    <p><?php the_author(); ?></p>
                </footer>
            </article>
        </div>
<?php } // end while
} // end if

get_footer();
