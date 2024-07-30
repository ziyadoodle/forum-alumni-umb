<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('favicon.png'); ?>">

    <title><?= $title; ?> | Forum Alumni UMB</title>

    <!-- Tailwindcss -->
    <link rel="stylesheet" href="<?= base_url('css/styles.css?v=1.0'); ?>">

    <?= $this->renderSection('head'); ?>
</head>

<body>
    <!-- 🌟 Navbar 🌟 -->
    <?= $this->include('layout/navbar'); ?>
    <!-- 🌟 Navbar 🌟 -->

    <!-- 🎆 Content 🎆 -->
    <?= $this->renderSection('content'); ?>
    <!-- 🎆 Content 🎆 -->

    <!-- 🌟 Footer 🌟 -->
    <?= $this->include('layout/footer'); ?>
    <!-- 🌟 Footer 🌟 -->

    <?= $this->renderSection('script'); ?>
</body>

</html>