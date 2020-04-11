<?

function RenderThumb($size=null) {
    if (has_post_thumbnail()){
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, $size, true);
        $thumb_url = $thumb_url_array[0];
        $thumb_alt   = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
    
        return "<img src='$thumb_url' alt='$thumb_alt'>" ;
    }
}

?>