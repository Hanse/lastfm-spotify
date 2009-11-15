<?php

header('Content-type:text/html; charset=utf-8');

require 'lib/Spotify.php';
require 'lib/LastFM.php';

$tracks = unserialize(file_get_contents('tracks.cache'));

echo '<ul>';
foreach ($tracks as $track) {
    echo '<li><a href="'.$track['link'].'">'.$track['artist'].' &mdash; '.$track['track'].'</a></li>';
}
echo '</ul>';
