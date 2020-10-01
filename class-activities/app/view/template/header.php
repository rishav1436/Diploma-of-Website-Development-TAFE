<?php
$themeClass = '';
if (!empty($_COOKIE['theme'])) {
    if ($_COOKIE['theme'] == 'dark') {
        $themeClass = 'dark-theme';
    } else if ($_COOKIE['theme'] == 'light') {
        $themeClass = 'light-theme';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ICT5065">
    <title>ICT5065</title>
    <link rel="stylesheet" type="text/css" href="/public/css/stylesheet.css?v=19">
    <link rel="stylesheet" type="text/css" href="/public/css/theme.css?v=1">
    <link rel="stylesheet" type="text/css" href="/public/css/cssgrids.css?v=19">
    <link rel="stylesheet" type="text/css" href="/public/css/font-awesome-4.7.0/css/font-awesome.css">
</head>

<!-- LIGHT/DARK THEME TOGGLE CLASS -->

<body class="<?php echo $themeClass; ?>">

    <!-- MAIN GRID START -->
    <div id="maingrid">

        <!-- NAVBAR -->
        <?php
        require(ROOT . "app/view/template/navigation.php");
        ?>

        <!-- SUB-MAIN GRID START -->
        <div id="submaingrid">

            <!-- BANNER -->
            <figure>
                <input type="checkbox" id="theme-toggle" style="display: none">
                <label for="theme-toggle"><img class="logo" src="/public/img/logo.png"></label>
            </figure>

            <!-- SUBGRID START -->
            <div id="subgrid">

                <!-- LEFT SIDE -->
                <?php
                require(ROOT . "app/view/template/sg-left.php");
                ?>