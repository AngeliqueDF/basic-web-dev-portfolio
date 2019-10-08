<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <article>
            <header>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_category(); ?></p>
            </header>
            <p><?php the_author(); ?></p>
            <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
            <footer>
                <?php the_tags('', ' ', ''); ?>
            </footer>
        </article>
<?php } // end while
} // end if

get_footer();
