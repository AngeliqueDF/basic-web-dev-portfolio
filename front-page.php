<?php get_header(); ?>

<main>
    <section class="hero">
        <h2>Je suis développeuse-intégratrice de sites Internet et Applications Web</h2>
    </section>
    <div class="container">
        <section class="learning">
            <h2>Ce que j'apprends en ce moment</h2>
            <ul>
                <li>Node.js et Express</li>
                <li>Algorithmie</li>
            </ul>
        </section>

        <section class="projects">
            <?php
            // $arg = array(
            //     'posts_per_page' => 3,
            //     'order' => 'DESC'
            // );
            // The Query
            $the_query = new WP_Query(array(
                'posts_per_page' => 3,
                'order' => 'DESC'
            ));

            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>
                    <!-- <div class="container"> -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class('project'); ?>>
                        <header>
                            <p class="project-type"><?php the_category(); ?></p>
                            <div class="thumbnail-container">
                                <?php the_post_thumbnail(); ?>
                            </div>

                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </header>
                        <div class="article-excerpt">
                            <a href="javascript:void();">Brief</a>
                        </div>

                        <footer>
                            <div class="post-tags">
                                <?php if (has_tag()) { ?>
                                    <p>Technologies et outils utilisés :</p>
                                <?php the_tags('<ul><li>', '</li><li>', '</li></ul>');
                                        } ?>
                            </div>
                        </footer>
                    </article>

                    <!-- /.container -->
            <?php } // end while
            } // end if
            else {
                echo "no post";
            }
            ?>
        </section>
</main>

<?php get_footer(); ?>