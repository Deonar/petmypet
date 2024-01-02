<?php while (have_rows('hero_block')) : the_row(); ?>
    <?php $hero = get_field('hero_block');
    if ($hero) : ?>
        <div class="hero">
            <div class="container">
                <div class="hero-body">
                    <div class="icon-rocket">
                        <div class="icon-stiker icon-animate">
                            🚀
                        </div>
                    </div>
                    <div class="hero-col-left text-white">
                        <?php if (get_sub_field('title')) : ?>
                            <h1 class="h1">
                                <?php the_sub_field('title'); ?>
                            </h1>
                        <?php endif; ?>
                        <?php if (get_sub_field('contant')) : ?>
                            <div class="hero-contant primary-text">
                                <?php the_sub_field('contant'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="hero-btn">

                            <?php if (get_sub_field('first_btn')) : ?>
                                <a href="<?php echo esc_url(get_sub_field('first_btn')['url']); ?>" <?php echo (get_sub_field('first_btn')['target']) ? 'target="_blank"' : ''; ?> class="btn btn-light btn-icon openModal" data-modal="modal-contact">
                                    <?php echo esc_html(get_sub_field('first_btn')['title']); ?>
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M18.8089 8.21584L2.6724 1.52014C1.99259 1.23803 1.22459 1.36213 0.668141 1.84385C0.111696 2.32564 -0.121038 3.06799 0.0608368 3.78115L1.49713 9.41365H8.52939C8.85299 9.41365 9.11537 9.676 9.11537 9.99963C9.11537 10.3232 8.85302 10.5856 8.52939 10.5856H1.49713L0.0608368 16.2181C-0.121038 16.9313 0.111657 17.6736 0.668141 18.1554C1.22572 18.6381 1.99381 18.7606 2.67244 18.4791L18.8089 11.7834C19.5436 11.4786 20 10.7951 20 9.99963C20 9.2042 19.5436 8.52064 18.8089 8.21584Z" fill="#4543F5" />
                                        </svg>
                                    </span>
                                </a>
                            <?php endif; ?>

                            <?php if (get_sub_field('second_btn')) : ?>
                                <a href="<?php echo esc_url(get_sub_field('second_btn')['url']); ?>" <?php echo (get_sub_field('second_btn')['target']) ? 'target="_blank"' : ''; ?> class="btn btn-dark openModal" data-modal="modal-contact-pdf">
                                    <?php echo esc_html(get_sub_field('second_btn')['title']); ?>
                                </a>
                            <?php endif; ?>
                        </div>

                    </div>
                    <div class="hero-img">
                        <div class="hero-img-desc" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="-350">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/img/hero/hero-img.png" alt="pet service">
                        </div>
                        <div class="hero-img-mob">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/img/hero/hero-img-mob.png" alt="pet service">
                        </div>
                        <div class="hero-arrow" data-aos="fade-right" data-aos-duration="1000">
                            <div class="icon-animate">
                                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96" fill="none">
                                    <g clip-path="url(#clip0_1273_30)">
                                        <path d="M80.2856 26.4645L85.5593 38.4358C86.0749 39.606 85.5458 40.9684 84.3756 41.4839L72.4043 46.7577C71.2341 47.2732 69.8717 46.7441 69.3562 45.5739C68.8407 44.4037 69.3698 43.0414 70.54 42.5258L77.4025 39.5026L73.9837 38.1749C63.6905 34.1773 50.9337 32.7928 42.4801 38.7629C52.619 40.6539 54.9116 48.9569 52.678 54.7081C50.3698 60.6512 43.6569 63.6085 37.7138 61.3003C32.2816 59.1906 27.9413 52.794 32.1235 44.1652C23.6327 47.0373 15.306 55.1207 11.1343 65.8623C10.6722 67.0522 9.33357 67.6437 8.14151 67.1807C6.94944 66.7177 6.36093 65.3778 6.82305 64.1879C12.3837 49.8701 24.2312 39.9837 35.7729 38.5693C45.3149 27.5865 62.3319 28.6881 75.6581 33.8636L79.0769 35.1914L76.0537 28.3288C75.5382 27.1586 76.0673 25.7963 77.2375 25.2808C78.4077 24.7652 79.77 25.2943 80.2856 26.4645ZM39.3882 56.9891C42.9536 58.3738 46.982 56.5991 48.3667 53.0337C50.2194 48.2633 46.9881 42.7861 38.1381 43.0379C32.9626 50.1298 34.9304 55.2578 39.3882 56.9891Z" fill="#FF9900" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1273_30">
                                            <rect width="74" height="74" fill="white" transform="matrix(0.362028 -0.932167 -0.932167 -0.362028 68.9805 95.7704)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="icon-smile icon-stiker icon-animate">
                            😄
                        </div>
                        <div class="icon-dog icon-stiker icon-animate">
                            🐶
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="modal-contact" class="modal">
            <div class="modal-content">
                <span class="close close-js">&times;</span>
                <h2 class="modal-title primary-title">Beta testing</h2>
                <p>
                    Thank you for your interest in beta. Currently, we have enough beta testers,<br>but you can join the waitlist to get the app in February 2024.
                </p>
                <a href="#subscribe" class="btn btn-icon btn-blue scrollto close-js mt-40">
                    Join waitlist
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M18.8089 8.21584L2.6724 1.52014C1.99259 1.23803 1.22459 1.36213 0.668141 1.84385C0.111696 2.32564 -0.121038 3.06799 0.0608368 3.78115L1.49713 9.41365H8.52939C8.85299 9.41365 9.11537 9.676 9.11537 9.99963C9.11537 10.3232 8.85302 10.5856 8.52939 10.5856H1.49713L0.0608368 16.2181C-0.121038 16.9313 0.111657 17.6736 0.668141 18.1554C1.22572 18.6381 1.99381 18.7606 2.67244 18.4791L18.8089 11.7834C19.5436 11.4786 20 10.7951 20 9.99963C20 9.2042 19.5436 8.52064 18.8089 8.21584Z" fill="#fff"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>

        <!-- Modal PDF-->
        <div id="modal-contact-pdf" class="modal">
            <div class="modal-content">
                <span class="close close-js">&times;</span>
                <h2 class="modal-title primary-title">Get a free checklist</h2>
                <p>
                    Enter your email, and we will send you a PDF checklist in a minute.
                </p>
                <div class="modal-form">
                    <?php echo do_shortcode('[contact-form-7 id="010d0d7" title="Get a free checklist"]'); ?>
                </div>
            </div>
        </div>

    <?php endif; ?>
<?php endwhile; ?>