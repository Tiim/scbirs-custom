<?php

/** Redirect from /staff-members/* to / */

header("HTTP/1.1 301 Moved Permanently");
header("Location: /");
?>