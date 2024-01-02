<?php while (have_rows('faq_block')) : the_row(); ?>
    <?php $faq_block = get_field('faq_block');
    if ($faq_block) : ?>
        <div class="faq" id="faq">
            <div class="faq-wrap">
                <div class="container">
                    <div class="faq-body">
                        <h2 class="title-icon" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-offset="100">
                            <?php the_sub_field('title'); ?>
                        </h2>

                        <div class="faq-accordion accordion-wrapper-js" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-offset="100">

                            <?php while (have_rows('faq_item')) : the_row(); ?>
                                <?php $count = get_row_index(); ?>
                                <div class="faq-accordion-item accordion-tab-js <?php echo ($count == 1) ? "active" : "" ?>">
                                    <div class="faq-accordion-head">
                                        <h3 class="faq-accordion-title"><?php the_sub_field('title'); ?></h3>
                                        <div class="faq-accordion-icon">
                                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.4995 15.4663L3.7735 5.8477C2.90996 4.98415 1.51121 4.98415 0.64766 5.8477C-0.215887 6.71125 -0.215887 8.11 0.64766 8.97351L10.7994 20.1624C11.266 20.6289 11.8895 20.8347 12.5005 20.7963C13.1116 20.8347 13.7351 20.6289 14.2017 20.1624L24.3523 8.97251C25.2159 8.10896 25.2159 6.71021 24.3523 5.84666C23.4888 4.98311 22.09 4.98311 21.2265 5.84666L12.4995 15.4663Z" fill="#4543F5" />
                                                <clipPath>
                                                    <rect width="25" height="25" fill="white" transform="matrix(0 -1 1 0 0 25.5)" />
                                                </clipPath>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="faq-accordion-content accordion-content-js" style="display: <?php echo ($count == 1) ? "block" : "none" ?>;">
                                        <?php the_sub_field('content'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endwhile; ?>