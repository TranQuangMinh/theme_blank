<?php

function open_body ()
{
	echo '<div class="container"><div class="main-page">';
}
add_action('open_body', 'open_body');

function close_body ()
{
	echo '</div></div>';
}
add_action('close_body', 'close_body');
 ?>