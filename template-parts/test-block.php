<?php while (have_rows('test_block')) : the_row(); ?>
    <?php $test_block = get_field('test_block');
    if ($test_block) : ?>
        <div class="test-block">
            <div class="container">
                <div class="test-block-row">
                    <div class="test-block-description" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400" data-aos-offset="100">
                        <?php the_sub_field('content'); ?>

                        <?php if (get_sub_field('link')) : ?>
                            <a href="<?php echo esc_url(get_sub_field('link')['url']); ?>" <?php echo (get_sub_field('link')['target']) ? 'target="_blank"' : ''; ?> class="btn btn-icon btn-blue openModal" data-modal="modal-contact-pdf">
                                <?php echo esc_html(get_sub_field('link')['title']); ?>
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M18.8089 8.21584L2.6724 1.52014C1.99259 1.23803 1.22459 1.36213 0.668141 1.84385C0.111696 2.32564 -0.121038 3.06799 0.0608368 3.78115L1.49713 9.41365H8.52939C8.85299 9.41365 9.11537 9.676 9.11537 9.99963C9.11537 10.3232 8.85302 10.5856 8.52939 10.5856H1.49713L0.0608368 16.2181C-0.121038 16.9313 0.111657 17.6736 0.668141 18.1554C1.22572 18.6381 1.99381 18.7606 2.67244 18.4791L18.8089 11.7834C19.5436 11.4786 20 10.7951 20 9.99963C20 9.2042 19.5436 8.52064 18.8089 8.21584Z" fill="#fff" />
                                    </svg>
                                </span>
                            </a>
                        <?php endif; ?>

                    </div>
                    <div class="test-block-img" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="400" data-aos-offset="100">
                        <div class="arrow icon-animate">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="58" viewBox="0 0 72 58" fill="none">
                                <path d="M63.4885 57.059L71.3508 46.6039C72.1194 45.5819 71.9146 44.1349 70.8926 43.3663L60.4375 35.504C59.4155 34.7355 57.9684 34.9403 57.1999 35.9623C56.4313 36.9843 56.6362 38.4314 57.6581 39.1999L63.6515 43.707L60.0201 44.221C49.0869 45.7686 36.3501 44.2106 29.4789 36.4716C39.7819 36.94 43.9058 29.3777 43.0411 23.2688C42.1475 16.9562 36.2848 12.5474 29.9722 13.4409C24.2022 14.2577 18.5188 19.4974 20.6253 28.852C13.0121 24.1211 6.74581 14.3533 5.13082 2.94389C4.95192 1.67998 3.78323 0.799082 2.51704 0.978309C1.25085 1.15754 0.37256 2.32818 0.551463 3.59208C2.70413 18.8001 11.988 31.1256 22.9039 35.1321C29.693 47.9999 46.5135 50.8039 60.6683 48.8003L64.2997 48.2863L59.7927 54.2797C59.0241 55.3017 59.229 56.7488 60.2509 57.5173C61.2729 58.2858 62.72 58.081 63.4885 57.059ZM30.6204 18.0203C34.4075 17.4842 37.9256 20.1299 38.4617 23.917C39.1789 28.9841 34.7848 33.5812 26.2249 31.3198C22.8011 23.2353 25.8853 18.6905 30.6204 18.0203Z" fill="#FF9900" />
                            </svg>
                        </div>
                        <div class="icon-rocket ">
                            <div class="icon-stiker icon-animate">
                                🚀
                            </div>
                        </div>
                        <div class="icon-smile icon-stiker icon-animate">
                            🤓
                        </div>
                        <?php $image = get_sub_field('image');
                        if ($image) : ?>
                            <img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endwhile; ?>