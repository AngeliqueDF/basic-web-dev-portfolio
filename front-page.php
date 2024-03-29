<?php get_header(); ?>

<main>
    <section class="hero">
        <p>Bienvenue ! Je suis Angélique</p>
        <h1>Développeuse-intégratrice web.</h1>
    </section>

    <div class="container">
        <section class="skills">
            <h2>Compétences</h2>
            <h3>Certifications</h3>
            <ul>
                <li><a href="https://directory.opquast.com/fr/certificat/P0MO5X/">Opquast, la certification des professionnels du Web.</a></li>
            </ul>
            <h3>Langages</h3>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript (ES6)</li>
                <li>MySQL CRUD</li>
                <li>PHP OOP, MVC</li>
            </ul>

            <h3>Outils</h3>
            <ul>
                <li>Gulp</li>
                <li>Sass</li>
                <li>Git</li>
            </ul>

            <p><a href="https://github.com/angelique-df/">Github</a></p>
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
                $projects_query = new WP_Query($args);

                if ($projects_query->have_posts()) {
                    while ($projects_query->have_posts()) {
                        $projects_query->the_post();
                ?>
                        <!-- include template parts according to post format -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class('project'); ?>>
                            <header>
                                <div class="project-type"><?php the_category(); ?></div>

                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php get_template_part('links-to-code-demos'); ?>
                            </header>

                            <footer>
                                <div class="post-tags">
                                    <?php if (has_tag()) { ?>
                                    <?php the_tags('<ul><li>', '</li><li>', '</li></ul>');
                                    } ?>
                                </div>
                                <p class="article-author"><small><?php the_author_posts_link(); ?></small></p>
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