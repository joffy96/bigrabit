<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = isset($_POST["phone"]) ? htmlspecialchars(trim($_POST["phone"])) : '';
    $state = isset($_POST["state"]) ? htmlspecialchars(trim($_POST["state"])) : '';
    $message = htmlspecialchars(trim($_POST["message"]));

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["status"=>"error","msg"=>"Invalid form data"]);
        exit;
    }

    $recipient = "sales@bigrabit.co.in";
    $subject = "Bigrabit Contact Form - $name";

    $email_content = "Name: $name\nEmail: $email\nPhone: $phone\nLocation: $state\nMessage:\n$message\n";
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8\r\n";
    $headers .= "From: $name <$email>\r\n";

    if (mail($recipient, $subject, $email_content, $headers)) {
        http_response_code(200);
        echo json_encode(["status"=>"success","msg"=>"Message sent"]);
    } else {
        http_response_code(500);
        echo json_encode(["status"=>"error","msg"=>"Mail sending failed"]);
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["status"=>"error","msg"=>"Only POST allowed"]);
}
?>
