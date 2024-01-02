<?php while (have_rows('you_get')) : the_row(); ?>
    <?php $you_get = get_field('you_get');
    if ($you_get) : ?>
        <div class="you-get" id="you-get">

            <div class="container">

                <h2 class="title-icon" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-offset="100">
                    <span class="you-get-head">
                        <?php the_sub_field('title'); ?>
                        <div class="arrow icon-animate">
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="94" viewBox="0 0 94 94" fill="none">
                                <g clip-path="url(#clip0_1362_2067)">
                                    <path d="M69.7969 77.9821L58.114 83.8672C56.972 84.4425 55.5841 83.9844 55.0088 82.8424L49.1237 71.1595C48.5485 70.0175 49.0065 68.6296 50.1485 68.0544C51.2905 67.4791 52.6784 67.9371 53.2536 69.0791L56.6273 75.7763L57.7767 72.2935C61.2373 61.8076 61.961 48.9963 55.5622 40.8624C54.1974 51.0853 46.024 53.8038 40.165 51.8702C34.1106 49.8721 30.8106 43.3209 32.8086 37.2666C34.6349 31.7326 40.7989 27.0677 49.6322 30.7986C46.3253 22.4675 37.8226 14.5695 26.8799 10.9582C25.6677 10.5581 25.0078 9.25184 25.4086 8.03745C25.8094 6.82306 27.1171 6.16612 28.3293 6.56617C42.9152 11.3798 53.4004 22.7009 55.4091 34.1541C66.8701 43.1161 66.649 60.1672 62.1687 73.7429L61.0193 77.2258L67.7165 73.8522C68.8585 73.2769 70.2464 73.7349 70.8217 74.8769C71.3969 76.0189 70.9389 77.4068 69.7969 77.9821ZM37.2006 38.716C36.0019 42.3482 37.9823 46.2795 41.6145 47.4782C46.4742 49.082 51.7772 45.5721 51.0686 36.747C43.7188 31.9447 38.6994 34.1747 37.2006 38.716Z" fill="#FF9900" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1362_2067">
                                        <rect width="74" height="74" fill="white" transform="matrix(0.949623 0.313395 0.313395 -0.949623 0 70.2725)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </span>
                </h2>

                <div class="you-get-row">

                    <?php while (have_rows('service_item')) : the_row(); ?>
                        <div class="you-get-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-offset="100">
                            <?php $image = get_sub_field('image');
                            if ($image) : ?>
                                <div class="you-get-img">
                                    <img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php the_sub_field('title'); ?>">
                                </div>
                            <?php endif; ?>
                            <h4 class="title-icon you-get-title">
                                <?php the_sub_field('title'); ?>
                            </h4>
                            <p class="you-get-text">
                                <?php the_sub_field('content'); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                </div>

            </div>

        </div>
    <?php endif; ?>
<?php endwhile; ?>