<div class="col-md-4">
    <div class="blog-entry">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('medium', array('class' => 'blog-image'));
        }
        ?>
        <span class="tag-blog">
            <?php
            // Get the post's tags
            $post_tags = get_the_tags();

            if ($post_tags) {
                foreach ($post_tags as $tag) {
                    echo '<a href="' . get_tag_link($tag->term_id) . '">' . esc_html($tag->name) . '</a>';
                }
            }
            ?>
        </span>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php
        echo wpautop(wp_trim_words(get_the_content(), $max_words, '...'));
        ?>
        <div class="blog-meta">
            <span class="blog-date"><?php the_date('F j, Y'); ?></span>
            <span class="f-right blog-more-btn">
                <a href="<?php the_permalink(); ?>"><i class="fas fa-long-arrow-alt-rigght"></i> <span class="blog-more"> More</span></a>
            </span>
        </div>
    </div>
</div>