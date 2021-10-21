<!--
*
* Strip all tags and encode special characters
* Written by Monty Shokeen
* Copyright 2021 Envato Tuts+
* Terms: https://tutsplus.com/terms-of-use
*
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

// Sanitization is used to remove any offending characters that pose a security risk.
// Function will strip necessary information from a message .e.g. rid of unwanted characters in user input.
$email_body = "One of your posts about inequalities mentioned that when x < y and y < z then x < z.";
  
// Output: One of your posts about inequalities mentioned that when x...
echo filter_var($visitor_message, FILTER_SANITIZE_STRING);
  
// Output: One of your posts about inequalities mentioned that when x &lt; y and y &lt; z then x &lt; z.
echo htmlspecialchars($visitor_message);

?>
