<!--
*
* Email validation on a server side with PHP
* Written by Alexander Zacharov
* Copyright 2021 Muba4 (Лунная База) (https://mb4.ru/)
* Terms: https://mb4.ru/support-main-ru/privacy-policy.html
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

if (isset($_POST['visitor_email'])) {$visitor_email = $_POST['visitor_email'];} else {$visitor_email = '';}
$visitor_email = filter_var($visitor_email, FILTER_SANITIZE_EMAIL);
if (filter_var($viaitor_email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail address <font color=green><b>" . $visitor_email . "</b></font> is valid.<br>\n";
} else {
    echo "E-mail address <font color=red><b>" . $visitor_email . "</b></font> is invalid.<br>\n";
}

?>
