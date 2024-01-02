<?php while (have_rows('chat_block')) : the_row(); ?>
    <?php $chat_block = get_field('chat_block');
    if ($chat_block && !$chat_block['hide_block']) : ?>
<div class="chat-block">
    <div class="chat-block-wrap">
        <div class="chat-block-img">
            <div class="massage-left">
                <div class="massage-group">
                    <div class="massage massage-1" data-aos="fade-up-right">
                        <img class="img-responsive massage-animate-1" src="<?php echo get_template_directory_uri(); ?>/dist/img/chat-block/message-1.png" alt="#">
                    </div>
                    <div class="massage massage-2" data-aos="fade-up-right">
                        <img class="img-responsive massage-animate-2" src="<?php echo get_template_directory_uri(); ?>/dist/img/chat-block/message-2.png" alt="#">
                        <div class="icon-rocket">
                            <div class="icon-stiker icon-animate">
                                🚀
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="massage-right">
                <div class="massage massage-3" data-aos="fade-up-left">
                    <img class="img-responsive massage-animate-3" src="<?php echo get_template_directory_uri(); ?>/dist/img/chat-block/message-3.png" alt="#">

                    <div class="icon-smile">
                        <div class="icon-stiker icon-animate">
                            😄
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endwhile; ?>