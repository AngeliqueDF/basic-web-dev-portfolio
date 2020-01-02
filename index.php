<?php
get_header();
?>

<main>
    <div class="container">
        <?php the_breadcrumb(); ?>
        
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

                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="article-author"><small><?php the_author_posts_link(); ?></small></p>
                        <?php $fields = get_field_objects(); ?>
                        <?php if( $fields ): ?>
                        <p>
                                <?php foreach( $fields as $field ): ?>
                                    <?php if($field['value'] != ''): ?>
                                        <a href="<?php echo $field['value']; ?>"><?php echo $field['label']; ?></a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                        </p>
                        <?php endif; ?>
                    </header>

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
