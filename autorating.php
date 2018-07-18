<?php
/*
Plugin Name: Auto-Rating
Description: Magic Auto rating 3000
Version: 0.1
Author: Lataste Théo
License: GPL2
*/

function so_post_40744782( $new_status, $old_status, $post ) {


    $postMeta = get_post_meta($post->ID);


    if ( empty($postMeta['_kksr_casts']) ) {
        $nbCommentaires = rand(10, 40);
        $noteMoyenne = rand($nbCommentaires*4, $nbCommentaires*5);

        update_post_meta($post->ID, '_kksr_casts', $nbCommentaires);
        update_post_meta($post->ID, '_kksr_ratings', $noteMoyenne);
        update_post_meta($post->ID, '_kksr_ips', 'YToxOntpOjA7czo5OiIxMjcuMC4wLjEiO30=');
        update_post_meta($post->ID, '_kksr_avg', '4');
    }
}
add_action('transition_post_status', 'so_post_40744782', 10, 3 );