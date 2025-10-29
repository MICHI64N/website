<?php
    $page_title = "TITLE";
    $page_description = "DESCRIPTION";
    $root_path = $_SERVER['DOCUMENT_ROOT'];
?> 
<!DOCTYPE html>
<html lang="en" <?php
    if (isset($_COOKIE["color-mode"])) {
        if ($_COOKIE["color-mode"] == "dark") {
            print 'class="dark"';
        }
    }?>>
<head>
    <?php require $root_path . "/includes/head.php"; ?>
</head>
<body>
    <?php require $root_path . "/includes/top.php"; ?>
    <main>
    </main>
    <?php require $root_path . "/includes/bottom.php"; ?>
</body>
</html>