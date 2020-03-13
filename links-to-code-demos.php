<?php 

$fields = get_field_objects(); 

if( $fields["lien-apercu-github"]["value"] || $fields["lien-apercu-codepen"]["value"] || $fields["lien-demo"]["value"] ){
    echo '<ul class="projects-external-links">';
    foreach( $fields as $field ): ?>
        <?php if($field['value']): ?>
            <li><a href="<?php echo esc_attr($field['value']); ?>"><?php echo esc_attr($field['label']); ?></a></li>
        <?php endif;
    endforeach;
    echo "</ul>"; ?>
<?php } ?> 