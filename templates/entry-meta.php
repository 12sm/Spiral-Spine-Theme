<?php echo get_the_category_list(); ?>
<time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
<div class="addthis_sharing_toolbox" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"></div>