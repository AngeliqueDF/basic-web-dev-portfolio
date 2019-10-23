<?php
get_header();
?>

<main>
    <div class="container">
        <?php the_breadcrumb(); ?>
        <!-- <div class="paginate-links"> -->
        <?php /*echo paginate_links(
                $args = array(
                    'prev_text'          => __('« Page précédente'),
                    'next_text'          => __('Page suivante »')
                )
            ); */ ?>
        <!-- </div> -->
    </div>
    <div class="container">
        <h2>Blog</h2>
    </div>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <div class="container">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header>
                        <?php the_category(); ?>
                        <div class="thumbnail-container">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="article-author"><small><?php the_author_posts_link(); ?></small></p>
                    </header>
                    <div class="article-excerpt">
                        <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                    </div>

                    <footer>
                        <div class="post-tags">
                            <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
                        </div>
                    </footer>
                </article>

            </div>
    <?php } // end while
    } // end if
    ?>
    <div class="container">
        <div class="paginate-links">
            <?php echo paginate_links(
                $args = array(
                    'prev_text'          => __('« Page précédente'),
                    'next_text'          => __('Page suivante »')
                )
            ); ?>
        </div>
    </div>
</main>
<?php
get_footer();
