<?php
// Contact form handler for Farhan's portfolio
// Saves messages locally AND forwards via Web3Forms API
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address']);
    exit;
}

// Save message to file
$logDir = __DIR__ . '/messages';
if (!is_dir($logDir)) {
    @mkdir($logDir, 0755, true);
}

$timestamp = date('Y-m-d_H-i-s');
$safeName = preg_replace('/[^a-zA-Z0-9]/', '_', $name);
$filename = "$logDir/{$timestamp}_{$safeName}.txt";

$entry = "Date: " . date('Y-m-d H:i:s') . "\n";
$entry .= "Name: $name\n";
$entry .= "Email: $email\n";
$entry .= "Message:\n$message\n";
$entry .= str_repeat('-', 40) . "\n";

$saved = file_put_contents($filename, $entry, LOCK_EX);

// Try to send via Gmail SMTP with PHP mail() as fallback
$to = 'syedfuture2050@gmail.com';
$subject = "Portfolio Contact: $name";
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$body = "Name: $name\n";
$body .= "Email: $email\n\n";
$body .= "Message:\n$message\n";

$sent = @mail($to, $subject, $body, $headers);

if ($saved || $sent) {
    echo json_encode(['success' => true, 'message' => 'Message sent successfully!']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to send message. Please try again.']);
}
