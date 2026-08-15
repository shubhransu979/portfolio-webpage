<?php
function handleContactSubmission(): array {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') return ['', []];
    $data = ['name'=>trim($_POST['name'] ?? ''), 'email'=>trim($_POST['email'] ?? ''), 'phone'=>trim($_POST['phone'] ?? ''), 'subject'=>trim($_POST['subject'] ?? ''), 'message'=>trim($_POST['message'] ?? '')];
    if (!$data['name'] || !$data['email'] || !$data['subject'] || !$data['message'] || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) return ['Please complete all required fields with a valid email address.', $data];
    try {
        require_once __DIR__ . '/db.php'; $db = getDatabaseConnection();
        $stmt = $db->prepare('INSERT INTO contact_submissions (name, email, phone, subject, message, status, created_at) VALUES (?, ?, ?, ?, ?, "New", NOW())');
        $stmt->bind_param('sssss', $data['name'], $data['email'], $data['phone'], $data['subject'], $data['message']); $stmt->execute(); $stmt->close(); $db->close();
        return ['success', []];
    } catch (Throwable $e) { return ['Your message could not be sent right now. Please try again later.', $data]; }
}
