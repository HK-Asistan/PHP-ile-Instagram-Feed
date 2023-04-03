<?php

$access_token = 'YOUR_ACCESS_TOKEN';
$username = 'instagram_username';

$json_data = file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token={$access_token}&count=10");
$data = json_decode($json_data);

// Listelemek İçin

foreach ($data->data as $post) {
    echo "<img src='{$post->images->standard_resolution->url}'>";
} 

?>