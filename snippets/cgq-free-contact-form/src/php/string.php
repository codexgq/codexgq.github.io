<!--
*
* PHP FILTER_SANITIZE_STRING Filter
* W3Schools (https://www.w3schools.com/) (W3Schools is Powered by W3.CSS)
* Copyright 1999-2021 by Refsnes Data

* cgq-free-contact-form
* Written by Alexey Mitkin (GitHub: https://github.com/mitkine)
* Copyright 2021 codexgq, Inc. (https://codex.gq/)
* GitHub: https://github.com/codexgq/startbootstrap-creative-codexgq/cgq-contact-form
* Licensed under MIT (https://github.com/codexgq/startbootstrap-creative-codexgq/blob/master/LICENSE)
*
* PHP: Hypertext Preprocessor (https://www.php.net/)
* Privacy Policy: https://www.php.net/privacy.php
*
-->

<?php

// The FILTER_SANITIZE_STRING filter removes tags and remove or encode special characters from a string.
$email_body = "<h1>Hello World!</h1>";

// Remove all HTML tags from a string.
$visitor_message = filter_var($email_body, FILTER_SANITIZE_STRING);
echo $visitor_message;

// Remove HTML tags and all characters with ASCII value > 127
$visitor_message = filter_var($email_body, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $visitor_message;

// Possible options and flags:

// FILTER_FLAG_NO_ENCODE_QUOTES - Do not encode quotes
// FILTER_FLAG_STRIP_LOW - Remove characters with ASCII value < 32
// FILTER_FLAG_STRIP_HIGH - Remove characters with ASCII value > 127
// FILTER_FLAG_ENCODE_LOW - Encode characters with ASCII value < 32
// FILTER_FLAG_ENCODE_HIGH - Encode characters with ASCII value > 127
// FILTER_FLAG_ENCODE_AMP - Encode the "&" character to &amp;

?>