<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/template/webpage.php";
    function style() { 
        ob_start(); ?>
        <style>
            main {
                text-align: center;
            }
            #intro {
                display: grid;
                gap: min(2vw, 16px);
                font-weight: bold;
                max-width: fit-content;
                padding: min(2vw, 16px);
                margin: 0 auto;
                background-color: var(--background-secondary);
                h1 {
                    font-size: min(5vw, 2rem);
                    word-wrap: break-word;
                }
                p {
                    margin: 0;
                }
                img {
                    justify-self: center;
                    width: min(33vw, 6rem);
                    height: min(33vw, 6rem);
                    border-radius: 50%;
                    border: min(0.25rem, 4px) solid var(--border);
                    box-sizing: border-box;
                }
            }
            @media screen and (min-width: 50rem) {
                #intro {
                    grid-template-columns: 1fr min(33vw, 6rem);
                    align-items: center;
                }
            }
        </style>
        <?php return ob_get_clean();
    }
    function main() {
        ob_start(); ?>
        <header id="intro">
            <hgroup>
                <p>I am</p>
                <h1>Samantha Bales,</h1>
                <p>an aspiring webmaster.</p>
            </hgroup>
            <img src="images/NicoYazawa.BiBiPlushMascot.jpg" alt="">
        </header>
        <?php return ob_get_clean();
    }
    webpage("MICHI64N", "Samantha Bales (MICHI64N)'s Personal Website", style(), main())
?>