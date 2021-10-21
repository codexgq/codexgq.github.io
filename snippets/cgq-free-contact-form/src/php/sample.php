<!--
*
* Free Contact Form PHP
* Written by Monty Shokeen
* Copyright 2021 Envato Tuts+
* Terms: https://tutsplus.com/terms-of-use
*
* cgq-free-contact-form
* Written by Alexey Mitkin (GitHub: https://github.com/mitkine)
* Copyright 2021 codexgq, Inc. (https://codex.gq/)
* GitHub: https://github.com/codexgq/startbootstrap-creative-codexgq/cgq-free-contact-form
* Licensed under MIT (https://github.com/codexgq/startbootstrap-creative-codexgq/blob/master/LICENSE)
*
* PHP: Hypertext Preprocessor (https://www.php.net/)
* Privacy Policy: https://www.php.net/privacy.php
*
-->

<?php
  
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $visitor_phone = "";
    $email_title = "";
    $concerned_department = "";
    $visitor_message = "";
    $email_body = "<div>";
      
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                        </div>";
    }
 
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
    }

    if(isset($_POST['visitor_phone'])) {
        $visitor_phone = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_phone']);
        $visitor_phone = filter_var($visitor_phone, FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Phone:</b></label>&nbsp;<span>".$visitor_phone."</span>
                        </div>";
    }
      
    if(isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$email_title."</span>
                        </div>";
    }
      
    if(isset($_POST['concerned_department'])) {
        $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Concerned Department:</b></label>&nbsp;<span>".$concerned_department."</span>
                        </div>";
    }
      
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$visitor_message."</div>
                        </div>";
    }
      
    if($concerned_department == "finance") {
        $recipient = "finance@domain.com";
    }
    else if($concerned_department == "sales") {
        $recipient = "sales@domain.com";
    }
    else if($concerned_department == "technical_support") {
        $recipient = "support@domain.com";
    }
    else {
        $recipient = "info@domain.com";
    }
      
    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
      
    if(mail($recipient, $email_title, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply as soon as possible.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
      
} else {
    echo '<p>Something went wrong...</p>';
}
    
?>