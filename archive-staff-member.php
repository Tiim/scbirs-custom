<?php
/** Redirect the user from /staff-members/ to the homepage */
header("HTTP/1.1 301 Moved Permanently");
header("Location: /");
?>