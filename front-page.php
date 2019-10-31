<?php get_header(); ?>

<main>
    <section class="hero">
        <h2>Je suis développeuse-intégratrice de sites Internet et Applications Web.</h2>
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
        <h2>Projets</h2>
        <div class="projects-list">
            <?php
            $args = array(
                'posts_per_page' => 3,
                'order' => 'DESC',
                'category_name' => 'realisations'
            );
            // The Query
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>
                    <!-- include template parts according to post format -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class('project'); ?>>
                        <header>
                            <p class="project-type"><?php the_category(); ?></p>
                            <div class="thumbnail-container">
                                <?php the_post_thumbnail(); ?>
                            </div>

                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="project-links">
                                <?php
                                $fields = get_field_objects();
                                if( $fields ): ?>
                                        <?php foreach( $fields as $field ): ?>
                                            <?php if($field['value'] != ''): ?>
                                                <a href="<?php echo $field['value']; ?>"><?php echo $field['label']; ?></a>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </header>
                        <div class="article-excerpt">
                            <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                        </div>

                        <footer>
                            <div class="post-tags">
                                <?php if (has_tag()) { ?>
                                <?php the_tags('<ul><li>', '</li><li>', '</li></ul>');
                                        } ?>
                            </div>
                        </footer>
                    </article>
            <?php } // end while
            } // end if
            else {
                echo "no post";
            }
            ?>
        </div>
        </section>
</main>

<?php get_footer(); ?>