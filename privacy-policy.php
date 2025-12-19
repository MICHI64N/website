<?php
    $page_title = "Privacy Policy";
    $page_description = "The Privacy Policy for Samantha Bales (MICHI64N)'s website.";
    $root_path = $_SERVER['DOCUMENT_ROOT'];
?> 
<!DOCTYPE html>
<html lang="en" <?php
    if (isset($_COOKIE["color-mode"])) {
        if ($_COOKIE["color-mode"] == "dark") {
            print 'class="dark"';
        }
    }?>>
    <style>
        .datetime {
            text-align: center;
            margin-top: 0;
        }
    </style>
<head>
    <?php require $root_path . "/includes/head.php"; ?>
</head>
<body>
    <?php require $root_path . "/includes/top.php"; ?>
    <main>
        <h1>Privacy Policy</h1>
        <p class="datetime">Last Modified: <time datetime="2025-10-29">October 29, 2025</time></p>
        <p>This document (the "Privacy Policy") covers what data is collected by "us" (the website's representatives, also denoted by "we") and the purposes the data is used for.
            By using this website, "you" (the user) agree to the terms of the Privacy Policy.</p>
        <section>
            <h2>Personally Identifiable Information</h2>
            <p>We do not collect any personal identifiable information.
            The only data we collect from you uses browser cookies to remember page customization settings.
            More details about browser cookies and their purpose are outlined in the <a href="#cookies">cookies</a> section of this document.</p>
        </section>
        <section>
            <h2>Cookies</h2>
            <p>We currently only collect one cookie:</p>
            <ul>
                <li>The cookie is to remember the website's color mode. After you use the color toggle icon, the cookie remembers the last setting the toggle was set to for a year.</li>
            </ul>
        </section>
    </main>
    <?php require $root_path . "/includes/bottom.php"; ?>
</body>
</html>