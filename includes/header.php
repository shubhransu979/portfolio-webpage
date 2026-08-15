<?php
$pageTitle = $pageTitle ?? 'Shubhransu Sekhar | UI/UX Designer & Web Developer';
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Portfolio of Shubhransu Sekhar, UI/UX Designer and Web Developer.">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&family=Playfair+Display:ital,wght@0,700;0,800;0,900;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="page-transition"></div>
<?php include __DIR__ . '/navbar.php'; ?>
<main class="site-main">
