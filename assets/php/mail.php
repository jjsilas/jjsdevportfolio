<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        # Recipient Email
        $mail_to = "contact@jherichsilas.com";
        
        # 1. Security Challenge (Fail Fast)
        $quiz_answer = trim($_POST["quiz"]);
        if ($quiz_answer != "10") {
            http_response_code(403);
            echo "Security challenge failed. Please try again.";
            exit;
        }

        # 2. Sender Data Sanitization
        $subject = trim($_POST["subject"]);
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
        
        # 3. Standard Validation
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($subject) OR empty($message)) {
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }
        
        # Mail Content
        $content = "New Message From: $name\n";
        $content .= "Email: $email\n\n";
        $content .= "Subject: $subject\n\n";
        $content .= "Message:\n$message\n";

        # Email headers.
        $headers = "From: $name <$email>";

        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            http_response_code(500);
            echo "Oops! Something went wrong, we couldn't send your message.";
        }

    } else {
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>