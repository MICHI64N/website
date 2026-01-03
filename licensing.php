<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/template/webpage.php";
    function style() { 
        ob_start(); ?>
        <style>
            iframe {
                all: inherit;
                width: 100%;
                html {
                    all: inherit;
                }
            }
        </style>
        <?php return ob_get_clean();
    }
    function main() {
        ob_start(); ?>
        <h1>MICHI64N Website Licenses</h1>
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/LICENSE.md";
        return ob_get_clean();
    }
    webpage("Website Licenses", "The licensing information for the contents of this website.", style(), main())
?>