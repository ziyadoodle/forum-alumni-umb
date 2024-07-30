<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('favicon.png'); ?>">

    <!-- Tailwindcss -->
    <link rel="stylesheet" href="<?= base_url('css/styles.css?v=1.0'); ?>">

    <title>Forum Alumni UMB</title>
</head>

<body>
    <?= $this->include('auth/navbar'); ?>

    <?= $this->renderSection('content'); ?>
</body>

</html>