<?php
    include("../../assets/Header/Header.php");
?>

<html>

    <head>
        <script src="secret.js"></script>
        <link rel="stylesheet" type="text/css" href="secret.css">
    </head>

    <body>
        <div id="game_window">
            <div id="stats" class="window">
                <h2>Stats</h2>
                <h3>Manual Click Upgrades</h3>
                <p><span id="manual_click_upgrades"></span> Upgrades :: <span id="clicks_per_click"></span> Clicks per Click</p>
                <h3>Auto Click Upgrades</h3>
                <p><span id="auto_click_upgrades"></span> Upgrades :: <span id="clicks_per_second"></span> Clicks per Second</p>
            </div>
            <div id="play_area" class="window">
                <h1 id="Counter">0</h1>
                <button onclick="increment()" type="button">Click Me</button>
            </div>
            <div id="upgrades" class="window">
                <h2>Upgrade Clicks Per Click</h2>
                <button onclick="upgradeClick()" type="button" id="clickUpgrade">Upgrade Cost: 10</button>
                <h2>Upgrade Clicks Per Second</h2>
                <button onclick="upgradeAuto()" type="button" id="autoUpgrade">Upgrade Cost: 10</button>
            </div>
        </div>
    </body>

</html>