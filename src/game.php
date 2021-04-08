<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="js/sprites/player.js"></script>
    <script defer src="js/playingCards.js"></script>
    <script defer src="js/sprites/cards.js"></script>
    <script defer src="js/game.js"></script>
    <link rel="stylesheet" href="css/game.css">
</head>
<body>
    <img src="sprites/Ironclad.png" alt="player" id="player">
    <img src="sprites/Worm.png" alt="enemy" id="enemy">
    <div id = "container"></div>
    <template id="card-template">	
			<div class='dmgCard'></div>
			<div class='manaCard'></div>
            <div class='target'></div>
			<h2></h2>
	</template>
    <div id = "endturn">End Turn</div>
</body>
</html>