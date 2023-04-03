<?php

$access_token = 'INSTAGRAM_ACCESS_TOKEN'; // Burada, Instagram'dan aldığınız erişim anahtarınızı yerleştirin.

$json_string = file_get_contents('https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url,thumbnail_url&access_token=' . $access_token);

$data = json_decode($json_string);

foreach ($data->data as $post) {
    $media_url = $post->media_url;
    $thumbnail_url = $post->thumbnail_url;
    $caption = $post->caption;
    
    echo '<div>';
    echo '<img src="' . $thumbnail_url . '">';
    echo '<p>' . $caption . '</p>';
    echo '</div>';
}

?>