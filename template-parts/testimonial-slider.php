<?php while (have_rows('testimonials')) : the_row(); ?>
    <?php $testimonials = get_field('testimonials');
    if ($testimonials) : ?>
        <div class="testimonial" id="testimonial">
            <div class="testimonial-wrap">
                <h2 class="title-icon">
                    <?php the_sub_field('title'); ?>
                </h2>
                <div class="testimonial-slider">
                    <div class="main-slider-js main-slider">
                        <div class="swiper-wrapper">
                            <?php while (have_rows('testimonial_item')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <?php $image = get_sub_field('image');
                                    if ($image) : ?>
                                        <div class="swiper-slide-img">
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_sub_field('pet_name'); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="slide-block">
                                        <p class="slide-block__text">
                                            <span class="slide-block__quote">“</span>
                                            <?php the_sub_field('content'); ?>
                                        </p>
                                        <div class="slide-block__name">
                                            <span class="slide-block__name-main"><?php the_sub_field('name'); ?><span class="dot"></span></span>
                                            
                                            <span class="slide-block__name-nick"><?php the_sub_field('pet_name'); ?></span>
                                        </div>
                                        <div class="slide-block__sub">
                                            <span><?php the_sub_field('position'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <div class="preview-slider-container ">
                        <div class="preview-slider-js preview-slider">
                            <div class="swiper-wrapper preview-slider-wrapper">

                                <?php while (have_rows('testimonial_item')) : the_row(); ?>
                                    <?php $image = get_sub_field('image');
                                    if ($image) : ?>

                                        <div class="swiper-slide preview-slider-item">
                                            <div class="preview-slider-img">
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_sub_field('pet_name'); ?>">
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                <?php endwhile; ?>

                            </div>
                            <div class="main-slider-controls">
                                <div class="main-slider-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <g clip-path="url(#clip0_2295_1949)">
                                            <path d="M0.34371 14.1705C0.344063 14.1701 0.344357 14.1697 0.344767 14.1694L6.46805 8.07562C6.92678 7.61912 7.66875 7.62082 8.12537 8.07961C8.58193 8.53834 8.58018 9.28031 8.12144 9.73687L4.01027 13.8281H28.8281C29.4754 13.8281 30 14.3528 30 15C30 15.6472 29.4754 16.1719 28.8281 16.1719H4.01033L8.12139 20.2631C8.58012 20.7197 8.58187 21.4617 8.12531 21.9204C7.66869 22.3792 6.92666 22.3808 6.46799 21.9244L0.344707 15.8306C0.344355 15.8303 0.344063 15.8299 0.343651 15.8295C-0.115313 15.3714 -0.113848 14.627 0.34371 14.1705Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2295_1949">
                                                <rect width="30" height="30" fill="white" transform="matrix(-1 0 0 1 30 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="main-slider-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <g clip-path="url(#clip0_2295_1955)">
                                            <path d="M29.6563 14.1705C29.6559 14.1701 29.6556 14.1697 29.6552 14.1694L23.532 8.07562C23.0732 7.61912 22.3312 7.62082 21.8746 8.07961C21.4181 8.53834 21.4198 9.28031 21.8786 9.73687L25.9897 13.8281H1.17188C0.524648 13.8281 0 14.3528 0 15C0 15.6472 0.524648 16.1719 1.17188 16.1719H25.9897L21.8786 20.2631C21.4199 20.7197 21.4181 21.4617 21.8747 21.9204C22.3313 22.3792 23.0733 22.3808 23.532 21.9244L29.6553 15.8306C29.6556 15.8303 29.6559 15.8299 29.6563 15.8295C30.1153 15.3714 30.1138 14.627 29.6563 14.1705Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2295_1955">
                                                <rect width="30" height="30" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endwhile; ?>