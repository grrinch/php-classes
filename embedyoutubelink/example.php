<?php
require_once('embed_youtube_link_class.php');

$yt = new embedVideo('http://www.youtube.com/watch?v=Ri-MAfid-MI&list=PLXRC3l-ZhN3qLyJG26xPpcCu3-0PhrHtI&index=1');
echo $yt->embed();
