<?php get_header(); ?>

<main>
    <section class="hero">
        <h2>Angélique D. Faye</h2>
        <p>Développeuse-intégratrice web</p>
    </section>


    <div class="container">
    
        <section class="skills">
            <h2>Compétences</h2>

            <h3>Développement WordPress</h3>
            
            <!-- <p>Vous avez un projet de site Internet et vous souhaitez utiliser WordPress</p> -->
            <ul>
                <li>Installation de WordPress configurée en fonction de vos besoins :</li>
                <ul>
                    <li>Mise en place de l'hébergement.</li>
                    <li>Choix des plugins et du thème.</li>
                    <li>Sécurisation.</li>
                    <li>Conformité RGPD.</li>
                </ul>
            </ul>
            <ul>
                <li>Maintenance du site :</li>
                <ul>
                    <li>Sécurisation.</li>
                    <li>Dépannage.</li>
                    <li>Optimisation.</li>
                </ul>
            </ul>

            <h3>Intégration</h3>
            <p>J'intègre vos maquettes le support de votre choix :</p>
            <ul>
                <li>Site vitrine.</li>
                <li>Thème WordPress.</li>
                <li>Landing Page.</li>
                <li>E-mail.</li>
            </ul>
            <ul>
                <li>Affichage adaptif à toutes tailles d'écran.</li>
                <li>Code HTML, CSS et JavaScript optimisés.</li>
            </ul>
            
        </section>
    </div>


        <!-- <section class="learning">
            <h2>Ce que j'apprends en ce moment</h2>
            <ul>
                <li>Node.js et Express</li>
                <li>Algorithmie</li>
            </ul>
        </section> -->

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
    
            </section>
        </div>
</main>

<?php get_footer(); ?>