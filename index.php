<?php

/* view_renderer.php */

include 'View.php';

$content = View::render('content.php', ['user' => 'Andrew!']);

echo View::render('main.php', ['content' => $content]);
