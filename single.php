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

                                <ul class="lang-container">
                                    <?php
                                        $args = array(
                                            "show_names" => 1,
                                            "show_flags" => 1,
                                            "hide_current"=> 1,
                                            "hide_if_no_translation" => 1
                                    );

                                        pll_the_languages($args);
                                    ?>
                                </ul>

                                <div class="meta">
                                    <?php the_category(); ?>
                                    <p><?php the_date(); ?></p>
                                    <p><?php the_author(); ?></p>
                                    <?php get_template_part('links-to-code-demos');?>
                                </div>
                            </header>
                            <?php wp_link_pages(); ?>

                            <div class="main-article-content">
                                <?php the_content(); ?>
                            </div>
                                
                            <?php wp_link_pages(); ?>

                            <footer>
                            <!-- <p><?php //the_author_posts_link(); ?></p> -->
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
