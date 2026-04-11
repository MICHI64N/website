<?php
require $_SERVER['DOCUMENT_ROOT'] . "/webpage/webpage.php";
function style() { 
    ob_start(); ?><style>
        html {
            text-align: center;
        }
        .entry {
            width: fit-content;
            padding: min(1vw, 8px);
            margin: 0.5rem auto;
            background-color: var(--background-secondary);
            p, a {
                margin: 0;
            }
            small {
                display: block;
            }
            time {
                font-weight: bold;
                font-style: italic;
            }
        }
        main h2 {
            margin-bottom: 0.25em;
        }
    </style><?php return ob_get_clean();
}
function main() {
    ob_start(); ?>
    <main>
        <h1>Portfolio</h1>
        <article>
            <h2>Software Projects</h2>
            <section class="entry">
                <h3>This Website</h3>
                <small>Started <time datetime="2025-10-29">2025/10/29</time></small>
                <p>Samantha Bales (MICHI64N)'s Personal Website</p>
                <a href="https://github.com/MICHI64N/website">
                    https://github.com/MICHI64N/website</a>
            </section>
            <section class="entry">
                <h3>Listing Tracker</h3>
                <small>Started <time datetime="2025-08-03">2025/08/03</time></small>
                <small>Archived <time datetime="2026-01-02">2026/01/02</time></small>
                <p>Monitor E-Commerce Webpages/Listings</p>
                <a href="https://github.com/MICHI64N/listing_tracker">
                    https://github.com/MICHI64N/listing_tracker</a>
            </section>
            <section class="entry">
                <h3>SQLiTables</h3>
                <small>Started <time datetime="2026-02-17">2026/02/17</time></small>
                <p>Create and maintain SQLite databases more efficiently using object-oriented concepts</p>
                <a href="https://github.com/MICHI64N/sqlitables">
                    https://github.com/MICHI64N/sqlitables</a>
            </section>
        </article>
    </main>
    <?php return ob_get_clean();
}
webpage("MICHI64N's Portfolio", "Samantha Bales (MICHI64N)'s Portfolio from various areas!", style(), main());
?>