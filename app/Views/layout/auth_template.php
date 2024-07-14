<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwindcss -->
    <link rel="stylesheet" href="<?= base_url('css/styles.css?v=1.0'); ?>">

    <title><?= $title; ?></title>
</head>

<body>
    <?= $this->renderSection('content'); ?>
</body>

</html>