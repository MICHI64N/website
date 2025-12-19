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
        <?php
            $root_path = $_SERVER['DOCUMENT_ROOT'];
            require $root_path . "/includes/nav.php";
        ?>
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
    <?php require $root_path . "/includes/nav.php"; ?>
</nav>
<script src="scripts/toggle.js"></script>