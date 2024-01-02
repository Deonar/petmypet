<div class="family" id="family">
    <div class="container">
        <h2 class="head-title">
            PetMyPet is for everyone
        </h2>
        <div class="family-tab">
            <div class="tab-btn-wrap">
                <?php while (have_rows('family_with_pets')) : the_row(); ?>
                    <button class="family-tab-btn tab-btn-js active" data-tab="#tab-1"><?php the_sub_field('tab_title'); ?></button>
                <?php endwhile; ?>

                <?php while (have_rows('professional_pet_service_providers')) : the_row(); ?>
                    <button class="family-tab-btn tab-btn-js" data-tab="#tab-2"><?php the_sub_field('title'); ?></button>
                <?php endwhile; ?>
                <?php while (have_rows('animal_welfare_organizations')) : the_row(); ?>
                    <button class="family-tab-btn tab-btn-js" data-tab="#tab-3"><?php the_sub_field('title'); ?></button>
                <?php endwhile; ?>
            </div>
            <div class="tab-item-wrap" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">

                <?php while (have_rows('family_with_pets')) : the_row(); ?>
                    <div class="family-tab-item tab-item-js active" id="tab-1">
                        <div class="family-with-pets">
                            <div class="app-grid">

                                <div class="app-images">
                                    <?php while (have_rows('family_item')) : the_row(); ?>
                                        <?php $count = get_row_index(); ?>
                                        <div class="app-image <?php echo ($count == 1) ? "active" : "" ?>" id="app-image-<?php echo $count; ?>">
                                            <div class="app-image-icon-top icon-stiker icon-animate">
                                                <?php the_sub_field('icon_top'); ?>
                                            </div>
                                            <?php $image = get_sub_field('image');
                                            if ($image) : ?>
                                                <div class="app-image-phone">
                                                    <img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']); ?>">
                                                </div>
                                            <?php endif; ?>
                                            <div class="app-image-icon-bottom icon-stiker icon-animate">
                                                <?php the_sub_field('icon_bottom'); ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>

                                <div class="app-info">
                                    <?php while (have_rows('family_item')) : the_row(); ?>
                                        <?php $count = get_row_index(); ?>
                                        <div class="app-info-item <?php echo ($count == 1) ? "active" : "" ?>" data-tab="#app-image-<?php echo $count; ?>">

                                            <div class="app-info-arrow">
                                                <?php if ($count > 2) : ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="102" height="102" viewBox="0 0 102 102" fill="none">
                                                        <g clip-path="url(#clip0_1349_283)">
                                                            <path d="M11.9327 47.2879L15.2367 34.6306C15.5597 33.3933 16.8206 32.6544 18.0579 32.9774L30.7152 36.2814C31.9525 36.6044 32.6914 37.8653 32.3684 39.1026C32.0454 40.3399 30.7845 41.0788 29.5472 40.7558L22.2914 38.8618L24.1457 42.0261C29.7285 51.5531 38.8651 60.5628 49.1984 61.1358C42.4279 53.3555 45.7893 45.4248 51.1124 42.3055C56.6131 39.0821 63.7107 40.9348 66.9341 46.4355C69.8804 51.4634 69.3079 59.1723 60.6702 63.3361C69.1081 66.36 80.6548 65.1982 90.5968 59.3722C91.6981 58.7269 93.1146 59.0949 93.7611 60.1983C94.4077 61.3016 94.0364 62.7172 92.9351 63.3626C79.6832 71.1282 64.2573 71.5157 54.3342 65.4542C40.034 68.1331 27.3831 56.6986 20.1554 44.3644L18.3011 41.2001L16.407 48.4559C16.0841 49.6932 14.8231 50.4321 13.5859 50.1091C12.3486 49.7862 11.6097 48.5252 11.9327 47.2879ZM62.9437 48.7739C61.0099 45.4738 56.7508 44.362 53.4507 46.2958C49.0354 48.8832 48.165 55.1827 55.2567 60.4831C63.7181 58.1407 65.3616 52.8999 62.9437 48.7739Z" fill="#FF9900" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1349_283">
                                                                <rect width="74" height="74" fill="white" transform="matrix(-0.862777 0.505585 0.505585 0.862777 63.8457 0)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                <?php else : ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="102" height="102" viewBox="0 0 102 102" fill="none">
                                                        <g clip-path="url(#clip0_1273_332)">
                                                            <path d="M12.0895 53.5542L15.1897 66.263C15.4928 67.5053 16.7417 68.2644 17.984 67.9613L30.6928 64.8611C31.9351 64.5581 32.6942 63.3092 32.3911 62.0669C32.0881 60.8246 30.8391 60.0655 29.5969 60.3686L22.3115 62.1458L24.2164 59.0116C29.9516 49.5756 39.2318 40.7139 49.573 40.307C42.6784 47.9774 45.9119 55.9612 51.1842 59.1656C56.6323 62.477 63.7588 60.7385 67.0702 55.2904C70.0969 50.3105 69.6484 42.5934 61.0787 38.2913C69.5641 35.4034 81.0906 36.7506 90.9377 42.7356C92.0285 43.3986 93.4507 43.0533 94.1149 41.9605C94.7791 40.8677 94.4306 39.4463 93.3398 38.7833C80.2144 30.8058 64.7967 30.1704 54.7775 36.0717C40.5222 33.1633 27.6892 44.3931 20.2642 56.6095L18.3593 59.7436L16.5821 52.4583C16.2791 51.216 15.0301 50.4569 13.7879 50.76C12.5456 51.063 11.7865 52.3119 12.0895 53.5542ZM63.1179 52.8882C61.1313 56.1567 56.8548 57.1999 53.5863 55.2134C49.2131 52.5554 48.4441 46.2427 55.62 41.057C64.0426 43.535 65.6017 48.8016 63.1179 52.8882Z" fill="#FF9900" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1273_332">
                                                                <rect width="74" height="74" fill="white" transform="translate(63.2358 101.67) rotate(-148.709)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                <?php endif ?>
                                            </div>

                                            <h4 class="app-info-title">
                                                <?php the_sub_field('title'); ?>
                                            </h4>
                                            <div class="app-info-content" <?php echo ($count == 1) ? "style='display: block;'" : "" ?>>
                                                <p class="app-info-text">
                                                    <?php the_sub_field('content'); ?>
                                                </p>
                                                <div class="app-info-mob">

                                                    <div class="arrow-mob">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83" viewBox="0 0 83 83" fill="none">
                                                            <g clip-path="url(#clip0_1309_2805)">
                                                                <path d="M38.3158 72.5838L28.0706 69.8386C27.0692 69.5703 26.4767 68.544 26.745 67.5426L29.4902 57.2974C29.7585 56.2959 30.7848 55.7034 31.7862 55.9717C32.7877 56.2401 33.3802 57.2663 33.1119 58.2678L31.5382 64.1409L34.1135 62.654C41.8672 58.1774 49.22 50.8167 49.7388 42.4415C43.3951 47.8902 36.9826 45.1233 34.4813 40.791C31.8966 36.3142 33.436 30.5692 37.9128 27.9845C42.0048 25.622 48.2522 26.1265 51.5829 33.1518C54.0789 26.3262 53.1973 16.9581 48.5258 8.86673C48.0083 7.97039 48.3141 6.82387 49.2121 6.30543C50.11 5.78699 51.2559 6.09539 51.7734 6.99173C58.0003 17.777 58.2336 30.2862 53.267 38.3001C55.3641 49.9086 46.0269 60.106 35.9885 65.9016L33.4132 67.3885L39.2862 68.9621C40.2877 69.2305 40.8802 70.2567 40.6119 71.2582C40.3435 72.2596 39.3173 72.8521 38.3158 72.5838ZM39.7878 31.2321C37.102 32.7827 36.1783 36.2302 37.7289 38.916C39.8036 42.5095 44.9066 43.2482 49.2413 37.5261C47.3865 30.6534 43.1458 29.2934 39.7878 31.2321Z" fill="#FF9900" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_1309_2805">
                                                                    <rect width="60" height="60" fill="white" transform="matrix(0.5 0.866025 0.866025 -0.5 0.246094 30.2454)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>

                                                    <div class="app-image-icon-top icon-stiker icon-animate">
                                                        <?php the_sub_field('icon_top'); ?>
                                                    </div>

                                                    <?php $image = get_sub_field('image');
                                                    if ($image) : ?>
                                                        <div class="app-image-phone">
                                                            <img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']); ?>">
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="app-image-icon-bottom icon-stiker icon-animate">
                                                        <?php the_sub_field('icon_bottom'); ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    <?php endwhile; ?>

                                </div>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <div class="family-tab-item tab-item-js" id="tab-2">
                    <div class="animal-welfare">
                        <div class="row">
                            <?php while (have_rows('professional_pet_service_providers')) : the_row(); ?>
                                <?php while (have_rows('service_item')) : the_row(); ?>
                                    <div class="col-12 col-md-6 animal-welfare-col">
                                        <div class="animal-welfare-item">
                                            <h4 class="family-title">
                                                <?php the_sub_field('title'); ?>
                                            </h4>
                                            <p class="family-text">
                                                <?php the_sub_field('content'); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endwhile; ?>
                        </div>
                        <div class="rectangle"></div>
                        <div class="arrow icon-animate">
                            <svg xmlns="http://www.w3.org/2000/svg" width="101" height="101" viewBox="0 0 101 101" fill="none">
                                <g clip-path="url(#clip0_1362_6)">
                                    <path d="M89.1485 46.7434L85.7125 34.1213C85.3766 32.8875 84.108 32.1618 82.8742 32.4976L70.252 35.9336C69.0182 36.2695 68.2925 37.5381 68.6284 38.7719C68.9642 40.0057 70.2328 40.7314 71.4667 40.3955L78.7023 38.4259L76.8811 41.6094C71.3981 51.1941 62.3561 60.2987 52.0293 60.9796C58.7182 53.1291 55.2742 45.2339 49.9188 42.1703C44.3848 39.0045 37.3069 40.9312 34.1411 46.4653C31.2475 51.5236 31.9004 59.2261 40.5811 63.2995C32.1752 66.4114 20.617 65.3701 10.6148 59.6483C9.50677 59.0145 8.09423 59.3973 7.45924 60.5073C6.82425 61.6173 7.21022 63.029 8.31823 63.6628C21.6505 71.2897 37.0796 71.5161 46.9389 65.3514C61.2663 67.8808 73.7971 56.3149 80.8957 43.9059L82.7168 40.7224L84.6865 47.9581C85.0224 49.1919 86.291 49.9176 87.5248 49.5817C88.7586 49.2459 89.4843 47.9773 89.1485 46.7434ZM38.1557 48.7618C40.0549 45.4418 44.3023 44.2856 47.6223 46.1848C52.0644 48.7259 53.0005 55.016 45.9646 60.3902C37.4792 58.1362 35.781 52.9128 38.1557 48.7618Z" fill="#FF9900" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1362_6">
                                        <rect width="74" height="74" fill="white" transform="translate(36.7446) rotate(29.772)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="icon-stiker icon-animate">
                            💬
                        </div>
                    </div>
                </div>

                <div class="family-tab-item tab-item-js" id="tab-3">
                    <div class="professional-pet">
                        <div class="row">
                            <?php while (have_rows('animal_welfare_organizations')) : the_row(); ?>
                                <?php while (have_rows('animal_welfare_item')) : the_row(); ?>
                                    <div class="col-12 col-md-6 col-xl-4 professional-pet-col">
                                        <div class="professional-pet-item">
                                            <h4 class="family-title">
                                                <?php the_sub_field('title'); ?>
                                            </h4>
                                            <p class="family-text">
                                                <?php the_sub_field('content'); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endwhile; ?>
                        </div>
                        <div class="rectangle"></div>
                        <div class="arrow icon-animate">
                            <svg xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 77 77" fill="none">
                                <path d="M59.6078 70.9459L69.2088 62.0608C70.1473 61.1923 70.2038 59.7319 69.3353 58.7934L60.4502 49.1924C59.5817 48.2539 58.1213 48.1973 57.1828 49.0658C56.2443 49.9344 56.1877 51.3948 57.0562 52.3333L62.1496 57.837L58.4848 57.6951C47.4508 57.2678 35.1962 53.4631 29.8154 44.6226C39.8697 46.9212 45.2762 40.2157 45.515 34.0505C45.7617 27.6798 40.7793 22.296 34.4086 22.0493C28.5854 21.8238 22.0586 25.9658 22.4628 35.5461C15.8155 29.5332 11.3919 18.8044 11.8378 7.28984C11.8872 6.01429 10.8944 4.93907 9.6165 4.88958C8.33864 4.8401 7.26564 5.83532 7.21624 7.11087C6.62189 22.459 13.5585 36.2427 23.5848 42.1319C27.97 56.0043 44.0206 61.7635 58.3058 62.3167L61.9707 62.4586L56.4669 67.552C55.5284 68.4205 55.4718 69.8809 56.3404 70.8194C57.2089 71.7579 58.6693 71.8145 59.6078 70.9459ZM34.2296 26.6708C38.0516 26.8188 41.0415 30.0496 40.8934 33.8716C40.6954 38.9853 35.5519 42.7249 27.5325 38.9731C25.6055 30.4076 29.4509 26.4858 34.2296 26.6708Z" fill="#FF9900" />
                            </svg>
                        </div>
                        <div class="icon-stiker icon-animate">
                            😎
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>