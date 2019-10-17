<div class="comments">
    <?php if (post_password_required()) : ?>
        <p>Ce commentaire est protégé par mot de passe.</p>
</div>

<?php return;
endif; ?>

<?php if (have_comments()) : ?>

    
    <h2><?php comments_number(); ?></h2>

    <ul>
        <?php wp_list_comments();?>
    </ul>

    <?php paginate_comments_links(); ?>

<?php elseif (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>

    <p>Les commentaires sont désactivés</p>

<?php endif; ?>

<?php comment_form(); ?>

</div>