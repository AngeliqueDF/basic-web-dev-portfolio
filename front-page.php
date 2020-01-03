<?php get_header(); ?>

<main>
    <section class="hero">
        <h1>Bienvenue ! Je suis Angélique,</h1>
        <p>Développeuse-intégratrice web.</p>
    </section>

    <div class="container">
        <section class="skills">
            <h2>Compétences</h2>
                <h3>Langages</h3>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>MySQL</li>
                    <li>PHP</li>
                </ul>

                <h3>Outils</h3>
                <ul>
                    <li>Sass</li>
                    <li>Git</li>
                </ul>

            <small><a href="3">Github</a></small>
        </section>
    </div>

    <div class="container">
        <section class="projects">
        <h2>Réalisations</h2>
        <div class="projects-list">
            <?php
            $args = array(
                // 'posts_per_page' => 3,
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
                            <div class="project-type"><?php the_category(); ?></div>

                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php get_template_part('links-to-code-demos');?>
                        </header>

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

        </section>
    </div>
</main>

<?php get_footer(); ?>