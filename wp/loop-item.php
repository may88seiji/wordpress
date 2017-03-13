<div class="col-xs-6 col-sm-3">
    <div class="item" id="item_height">
        <a href="<?php the_permalink( $post ); ?>">
            <div class="item_top"><img src="
                <?php if ( has_post_thumbnail() ) {
                    //サムネイルの画像があるか判定してURLを返す
                    $image_id = get_post_thumbnail_id ();
                    $image_url = wp_get_attachment_image_src ($image_id, true);
                    echo $image_url[0];
                } else {
                    $url = get_template_directory_uri();
                    echo '/wordpress/wp-content/themes/museum/common/img/common/logo_museum.png' ;
                } ?>" alt="<?php my_the_title(); ?>"></div>
            <div class="item_bottom"><div><?php my_the_title(); ?><br><span><?php the_excerpt(); ?></span></div></div>
        </a>
    </div>
</div>


