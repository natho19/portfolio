<!-- Titre à gauche -->
<div class='row project-part'>
    <div class='col-md-5'>
        <div class='block'>
            <h2><?php the_sub_field('title'); ?></h2>
            <?php the_sub_field('description'); ?>
        </div>
    </div>
    <div class='col-md-7'>
        <img class="fadeIn" src="<?= esc_url(get_sub_field('image')['url']); ?>" alt="<?= esc_attr(get_sub_field('image')['alt']); ?>" />
    </div>
</div>