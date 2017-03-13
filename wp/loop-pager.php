<nav aria-label="...">
    <ul class="pager">
        <?php  
        $next_post = get_next_post();  
        if (!empty( $next_post )):  
        echo '<li class="btn_prev"><a href="',get_permalink( $next_post->ID ),'">&lt; 前へ</a></li>';  
        endif;  
        ?>
        <li class="back_all"><a href="../<?php $slug_name = $post->post_name; ?>">一覧へ戻る</a></li>
        <?php  
        $prev_poxt = get_previous_post();  
        if (!empty( $prev_poxt  )):  
        echo ' <li class="btn_next"><a href="',get_permalink( $prev_poxt->ID ),'">次へ &gt;</a></li>';  
        endif;  
        ?>
    </ul>
</nav>