<?php
    $page_title = "About MICHI64N";
    $page_description = "About Samantha Bales (MICHI64N).";
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
        <h1>About</h1>
        <p>
            This website, created by Samantha Bales (MICHI64N), was created for multiple reasons:
            <ul>
                <li>to express their authentic self through web development, and</li>
                <li>to showcase their skills to potential employers in an online <a href="portfolio.php">portfolio</a>.</li>
            </ul>
        </p>
    </main>
    <?php require $root_path . "/includes/bottom.php"; ?>
</body>
</html>