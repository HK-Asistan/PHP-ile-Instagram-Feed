<?php

$instagram_url = 'INSTAGRAM_POST_URL'; // Burada, göstermek istediğiniz Instagram gönderisinin URL'sini girin.

$json_string = file_get_contents('https://api.instagram.com/oembed?url=' . $instagram_url);

$data = json_decode($json_string);

echo $data->html;

?>