<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php if (!empty($csrf)) echo $csrf; ?>">

    <title><?php if (!empty($title)) echo $title; else echo "Sin título"; ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php if (!empty($assets['bootstrap'])) echo $assets['bootstrap']; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php if (!empty($assets['fontawesome'])) echo $assets['fontawesome']; ?>/css/fontawesome.css">

    <!-- Scripts -->
    <script type="text/javascript" src="<?php if (!empty($assets['jquery'])) echo $assets['jquery']; ?>/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php if (!empty($assets['jquery'])) echo $assets['jquery']; ?>/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php if (!empty($assets['bootstrap'])) echo $assets['bootstrap']; ?>/js/bootstrap.js"></script>
</head>
<body>
<div class="min-h-screen bg-gray-100">
    <?php if (!empty($body)) echo $body; else echo "<h1>Simpl0x</h1>"; ?>
</body>
</html>
