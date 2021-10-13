<?php

function my_pagination($pages = '', $range = 2) {
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged)) $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages)
            $pages = 1;
    }

    if (1 != $pages) {
        echo '<div class="row projects-pagination">';
        echo '<div class="col-md-offset-3 col-md-6 text-center">';
        echo '<div class="btn-group" role="group">';

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems))
                echo ($paged == $i) ? '<a class="btn btn-xs btn-default active" href="#">' . $i . '</a>' : '<a class="btn btn-xs btn-default" href="' . get_pagenum_link($i) . '">' . $i . '</a>';
        }

        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}