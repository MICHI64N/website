<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/template/webpage.php";
    function main() {
        ob_start(); ?>
        <h1>About</h1>
        <p>
            This website, created by Samantha Bales (MICHI64N), was created for multiple reasons:
            <ul>
                <li>to express their authentic self through web development, and</li>
                <li>to showcase their skills to potential employers in an online <a href="portfolio.php">portfolio</a>.</li>
            </ul>
        </p>
        <?php return ob_get_clean();
    }
    webpage("About MICHI64N", "About Samantha Bales (MICHI64N).", "", main())
?> 