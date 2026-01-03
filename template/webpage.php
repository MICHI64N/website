<?php
function webpage($title, $description, $head_ex, $main) {
    // Nav: Exists Twice
    function nav() {
        ob_start(); ?>
        <a href="about.php">About</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="privacy-policy.php">Privacy Policy</a>
        <a href="licensing.php">Licenses</a>
        <?php return ob_get_clean();
    } ?>
    <!-- Document -->
    <!DOCTYPE html>
    <html lang="en" <?php
        if (isset($_COOKIE["color-mode"])) {
            if ($_COOKIE["color-mode"] == "dark") {
                print 'class="dark"';
            }
        }?>>
    <!-- Head -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php print $title; ?></title>
        <meta name="description" content=<?php print $description; ?>>
        <link rel="stylesheet" href="style.css">
        <?php print $head_ex; ?>
    </head>
    <!-- Body -->
    <body>
        <header id="banner">
            <button id="nav-toggle" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" role="img" alt="View Navigation Menu" viewBox="0,0 32,24">
                    <title>View Navigation Menu</title>
                    <g stroke-width="4" stroke-linecap="round" stroke="var(--text)">
                        <line x1="2" y1="2" x2="30" y2="2"></line>
                        <line x1="2" y1="12" x2="30" y2="12"></line>
                        <line x1="2" y1="22" x2="30" y2="22"></line>
                    </g>
                </svg>
            </button>
            <a id="logo" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" role="img" alt="MICHI64N" viewBox="0,0 72,20">
                    <title>Go to the Homepage</title>
                    <text y="16" stroke="var(--text)">MICHI64N</text>
                </svg>
            </a>
            <nav class="main-nav horizontal">
                <?php print nav(); ?>
            </nav>
            <button id="color-toggle" type="button"
            <?php if (isset($_COOKIE["color-mode"])) {
                if ($_COOKIE["color-mode"] == "dark") {
                    print 'data-toggle="light"';
                } else {
                    print 'data-toggle="dark"';
                }
            } else {
                print 'data-toggle="dark"';
            }
            ?>>
                <svg xmlns="http://www.w3.org/2000/svg" role="img" data-toggle="dark" alt="Toggle Colors to Dark Mode" viewBox="0,0 32,32">
                    <title>Toggle Colors to Dark Mode</title>
                    <circle cx="16" cy="16" r="16" fill="var(--color-toggle-outline)"/>
                    <circle cx="16" cy="16" r="12" fill="var(--color-toggle)"/>
                    <circle cx="22" cy="16" r="8" fill="var(--color-toggle-outline)"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" role="img" data-toggle="light" alt="Toggle Colors to Light Mode" viewBox="0,0 32,32">
                    <title>Toggle Colors to Light Mode</title>
                    <circle cx="16" cy="16" r="16" fill="var(--color-toggle-outline)"/>
                    <circle cx="16" cy="16" r="12" fill="var(--color-toggle)"/>
                </svg>
            </button>
        </header>
        <nav class="main-nav vertical">
            <?php print nav(); ?>
        </nav>
        <script src="scripts/toggle.js"></script>
        <main>
            <?php print $main; ?>
        </main>
        <footer>
            <p class="copyright">&copy;<?php print date("Y") ?> Samantha Bales (MICHI64N)</p>
            <div>
                <section>
                    <small>
                        <h2>Site Links</h2>
                        <nav class="footer-nav">
                            <a href="licensing.php">Licenses</a>
                            <a href="privacy-policy.php">Privacy Policy</a>
                        </nav>
                    </small>
                </section>
                <section>
                    <small>
                        <h2>Contact</h2>
                        <nav class="footer-nav">
                            <a class="email" href="mailto:samanthabales2006@gmail.com">
                                samanthabales2006@gmail.com
                            </a>
                            <a href="https://github.com/MICHI64N">GitHub</a>
                            <a href="https://www.linkedin.com/in/samantha-bales/">LinkedIn</a>
                        </nav>
                    </small>
                </section>
            </div>
        </footer>
    </body>
<?php }
?>