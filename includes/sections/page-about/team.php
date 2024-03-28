<section class="team">
    <div class="container">
        <div class="team__wrap">

            <div class="team__title">
                <img src="<?= bloginfo('template_url') . '/images/about/team.svg' ?>"
                    alt="about"
                    width="585"
                    height="226"
                >
            </div>

            <div class="team__list">
                <?php if (have_rows('team_list')) :
                    while ( have_rows('team_list')) : the_row(); ?>

                        <div class="team__item item">
                            <div class="item__icon">
                                <img src="<?= get_sub_field('persone_photo')['url'];?>" >
                                <?php $reasonsCounter++ ?>
                            </div>

                            <div class="item__name"><?= get_sub_field('persone_name') ?></div>

                            <div class="item__position"><?= get_sub_field('persone_position') ?></div>

                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>