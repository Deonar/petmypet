<?php while (have_rows('about_block')) : the_row(); ?>
    <?php $about_block = get_field('about_block');
    if ($about_block && !$about_block['hide_block']) : ?>
        <div id="about-us" class="about">
            <div class="about-wrap">
                <div class="container">
                    <div class="about-body">
                        <div class="about-img">
                            <div class="about-img-desc">
                                <div class="about-img-label label-register" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400">
                                    view profile
                                    <div class="label-arrow icon-animate">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="102" height="102" viewBox="0 0 102 102" fill="none">
                                            <g clip-path="url(#clip0_3310_2447)">
                                                <path d="M89.3164 53.9863L86.0048 66.6417C85.681 67.8788 84.4197 68.6169 83.1826 68.2932L70.5272 64.9816C69.2902 64.6579 68.552 63.3965 68.8757 62.1594C69.1994 60.9224 70.4608 60.1842 71.6979 60.5079L78.9526 62.4063L77.1002 59.2408C71.5231 49.7106 62.3919 40.6954 52.0589 40.1161C58.8247 47.9005 55.4586 55.8292 50.1336 58.9453C44.631 62.1654 37.5345 60.3084 34.3144 54.8058C31.3712 49.7762 31.9482 42.0676 40.5884 37.909C32.1523 34.88 20.605 36.0349 10.6595 41.8549C9.5578 42.4996 8.14157 42.1307 7.49568 41.027C6.8498 39.9233 7.22186 38.5078 8.32358 37.8631C21.5802 30.1055 37.0063 29.7272 46.9257 35.7947C61.2275 33.1243 73.8715 44.5664 81.0919 56.9049L82.9443 60.0704L84.8427 52.8157C85.1664 51.5786 86.4278 50.8405 87.6649 51.1642C88.9019 51.4879 89.6401 52.7493 89.3164 53.9863ZM38.3062 52.4698C40.238 55.771 44.4965 56.8854 47.7977 54.9536C52.2146 52.3688 53.0887 46.0699 46.0003 40.7652C37.5375 43.1025 35.8908 48.3424 38.3062 52.4698Z" fill="#FF9900" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3310_2447">
                                                    <rect width="74" height="74" fill="white" transform="matrix(0.86308 -0.505068 -0.505068 -0.86308 37.375 101.243)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="about-img-label label-add" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                                    find
                                    <div class="label-arrow icon-animate">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
                                            <path d="M69.5787 14.9019L59.676 6.35426C58.708 5.51873 57.2504 5.62578 56.4149 6.59377L47.8673 16.4965C47.0318 17.4645 47.1388 18.922 48.1068 19.7576C49.0748 20.5931 50.5324 20.486 51.3679 19.518L56.2678 13.8413L56.5365 17.4991C57.3453 28.5116 54.9343 41.1148 46.7507 47.45C47.911 37.2018 40.6431 32.5788 34.4899 33.0307C28.1315 33.4977 23.3384 39.0506 23.8054 45.4091C24.2323 51.2209 29.0779 57.2439 38.5531 55.7712C33.3209 63.049 23.1538 68.6442 11.6616 69.4883C10.3885 69.5818 9.431 70.6886 9.52467 71.964C9.61834 73.2393 10.7273 74.1944 12.0003 74.1009C27.3187 72.9758 40.2406 64.5419 44.9721 53.9201C58.2674 48.0117 62.1962 31.4178 61.1491 17.1603L60.8804 13.5026L66.5571 18.4025C67.5251 19.238 68.9827 19.1309 69.8182 18.1629C70.6538 17.195 70.5467 15.7374 69.5787 14.9019ZM28.418 45.0703C28.1378 41.2557 31.0141 37.9234 34.8287 37.6433C39.9325 37.2684 44.2237 41.9617 41.3918 50.3502C33.0954 53.2226 28.7683 49.8397 28.418 45.0703Z" fill="#FF9900" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="about-img-label label-plan" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="400">
                                    meet pet owners
                                    <div class="label-arrow icon-animate">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="102" height="102" viewBox="0 0 102 102" fill="none">
                                            <g clip-path="url(#clip0_3310_2449)">
                                                <path d="M11.9263 53.9863L15.2379 66.6417C15.5616 67.8788 16.823 68.6169 18.0601 68.2932L30.7154 64.9816C31.9525 64.6579 32.6907 63.3965 32.367 62.1594C32.0432 60.9224 30.7818 60.1842 29.5448 60.5079L22.2901 62.4063L24.1425 59.2408C29.7195 49.7106 38.8508 40.6954 49.1837 40.1161C42.4179 47.9005 45.784 55.8292 51.109 58.9453C56.6117 62.1654 63.7081 60.3084 66.9282 54.8058C69.8715 49.7762 69.2944 42.0676 60.6542 37.909C69.0903 34.88 80.6377 36.0349 90.5832 41.8549C91.6849 42.4996 93.1011 42.1307 93.747 41.027C94.3929 39.9233 94.0208 38.5078 92.9191 37.8631C79.6625 30.1055 64.2364 29.7272 54.317 35.7947C40.0151 33.1243 27.3711 44.5664 20.1508 56.9049L18.2984 60.0704L16.4 52.8157C16.0763 51.5786 14.8149 50.8405 13.5778 51.1642C12.3408 51.4879 11.6026 52.7493 11.9263 53.9863ZM62.9365 52.4698C61.0047 55.771 56.7461 56.8854 53.445 54.9536C49.0281 52.3688 48.1539 46.0699 55.2424 40.7652C63.7052 43.1025 65.3519 48.3424 62.9365 52.4698Z" fill="#FF9900" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3310_2449">
                                                    <rect width="74" height="74" fill="white" transform="translate(63.8677 101.243) rotate(-149.664)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>

                                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">
                                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/img/about-block/about-img.png" alt="About App">
                                </div>
                            </div>
                            <div class="about-img-mob">
                                <div class="about-img-mob-item about-img-mob-reg">
                                    <div class="rectangle"></div>
                                    <div class="icon-cat icon-stiker icon-animate">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/img/icon/icon-cat.png" alt="smile cat">
                                    </div>
                                    <div class="about-img-label label-register" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400">
                                        find
                                        <div class="label-arrow icon-animate">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66" fill="none">
                                                <g clip-path="url(#clip0_1309_2742)">
                                                    <path d="M48.3868 60.4139L56.6265 53.7351C57.4319 53.0822 57.5552 51.9037 56.9024 51.0982L50.2235 42.8585C49.5707 42.0531 48.3921 41.9298 47.5867 42.5826C46.7812 43.2355 46.6579 44.4141 47.3108 45.2195L51.1394 49.9429L48.1818 49.6335C39.2773 48.7018 29.5645 44.9727 25.6806 37.5344C33.6931 39.9281 38.4234 34.7899 38.944 29.8146C39.4819 24.6733 35.7368 20.0529 30.5955 19.5149C25.8961 19.0233 20.3955 22.0278 20.2138 29.8005C15.1549 24.5826 12.1457 15.6673 13.1179 6.3749C13.2256 5.34552 12.4794 4.42287 11.4482 4.31497C10.417 4.20707 9.49597 4.9553 9.38827 5.98468C8.09234 18.3708 12.9725 29.8912 20.7718 35.1884C23.583 46.645 36.2633 52.1569 47.7916 53.3631L50.7492 53.6726L46.0258 57.5012C45.2204 58.1541 45.097 59.3326 45.7499 60.1381C46.4028 60.9435 47.5813 61.0668 48.3868 60.4139ZM30.2052 23.2446C33.2896 23.5673 35.5371 26.34 35.2144 29.4244C34.7826 33.5512 30.4225 36.3037 24.1335 32.8424C23.0293 25.8099 26.3488 22.8411 30.2052 23.2446Z" fill="#FF9900" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1309_2742">
                                                        <rect width="60" height="60" fill="white" transform="translate(65.918 6.24365) rotate(95.973)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-aos="fade-left" data-aos-easing="linear" data-aos-duration="400">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/img/about-block/about-phone_1.png" alt="About App">
                                    </div>
                                </div>
                                <div class="about-img-mob-item about-img-mob-add">
                                    <div class="icon-dog icon-stiker icon-animate">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/img/icon/icon-dog.png" alt="smile dog">
                                    </div>
                                    <div class="about-img-label label-add" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="400">
                                        view profile
                                        <div class="label-arrow icon-animate">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                                                <g clip-path="url(#clip0_1309_2740)">
                                                    <path d="M12.1048 8.13946L5.22845 16.2151C4.55629 17.0045 4.65104 18.1857 5.44043 18.8579L13.5161 25.7342C14.3055 26.4064 15.4867 26.3116 16.1588 25.5222C16.831 24.7328 16.7363 23.5516 15.9469 22.8795L11.3175 18.9376L14.2817 18.6998C23.2062 17.984 33.4379 19.8701 38.6191 26.4707C30.3036 25.5859 26.5949 31.5038 26.9948 36.4903C27.4082 41.6432 31.9366 45.4991 37.0894 45.0857C41.7993 44.708 46.6562 40.7463 45.4105 33.072C51.3399 37.2745 55.9318 45.4874 56.6789 54.8006C56.7616 55.8323 57.6642 56.6026 58.6978 56.5197C59.7313 56.4368 60.4996 55.5325 60.4169 54.5008C59.4211 42.0869 52.5125 31.6559 43.8746 27.8775C39.0116 17.1301 25.536 14.0351 13.9819 14.9618L11.0177 15.1996L14.9595 10.5702C15.6317 9.78085 15.5369 8.59964 14.7475 7.92748C13.9582 7.25532 12.777 7.35006 12.1048 8.13946ZM36.7896 41.3478C33.6983 41.5957 30.9808 39.2818 30.7328 36.1905C30.4011 32.0544 34.183 28.5496 40.9997 30.7999C43.3739 37.5109 40.6547 41.0377 36.7896 41.3478Z" fill="#FF9900" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1309_2740">
                                                        <rect width="60" height="60" fill="white" transform="translate(4.79688 64.6052) rotate(-94.5859)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/img/about-block/about-phone_2.png" alt="About App">
                                    </div>
                                </div>
                                <div class="about-img-mob-item about-img-mob-plan">
                                    <div class="rectangle"></div>
                                    <div class="icon-humster icon-stiker icon-animate">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/img/icon/icon-humster.png" alt="humster">
                                    </div>
                                    <div class="about-img-label label-plan" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400">
                                        meet pet owners
                                        <div class="label-arrow icon-animate">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                                                <path d="M51.4369 7.16574L58.4764 15.0996C59.1645 15.8751 59.0939 17.058 58.3184 17.7461L50.3845 24.7856C49.609 25.4737 48.4261 25.403 47.738 24.6275C47.0499 23.852 47.1205 22.6691 47.8961 21.981L52.4441 17.9456L49.4757 17.7683C40.5385 17.2345 30.3474 19.3287 25.3017 26.0335C33.5975 24.9794 37.426 30.8206 37.1277 35.8142C36.8195 40.9744 32.3706 44.9217 27.2105 44.6135C22.4939 44.3318 17.5572 40.47 18.6463 32.7718C12.8038 37.0943 8.38012 45.3991 7.82305 54.7256C7.76134 55.7587 6.87463 56.5473 5.83959 56.4854C4.80457 56.4236 4.01801 55.5351 4.07972 54.502C4.82226 42.0704 11.5169 31.5007 20.0759 27.5472C24.7189 16.7028 38.1286 13.3339 49.6993 14.025L52.6677 14.2023L48.6323 9.6542C47.9442 8.87867 48.0149 7.69577 48.7904 7.00767C49.5659 6.31956 50.7488 6.39021 51.4369 7.16574ZM27.434 40.8702C30.5298 41.0551 33.1995 38.6863 33.3844 35.5906C33.6318 31.4486 29.7793 28.0215 23.0098 30.4103C20.7729 37.1683 23.5634 40.639 27.434 40.8702Z" fill="#FF9900" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-aos="fade-left" data-aos-easing="linear" data-aos-duration="400">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/img/about-block/about-phone_3.png" alt="About App">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-content" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-offset="100">
                            <h2 class="title-icon">
                                <?php the_sub_field('title'); ?>
                            </h2>
                            <?php the_sub_field('content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endwhile; ?>