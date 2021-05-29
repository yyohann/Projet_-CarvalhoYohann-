<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="js/sprites/player.js"></script>
    <script defer src="js/playingCards.js"></script>
    <script defer src="js/TiledImage.js"></script>
    <script defer src="js/sprites/enemy.js"></script>
    <script defer src="js/sprites/cards.js"></script>
    <script defer src="js/sprites/slash.js"></script>
    <script defer src="js/game.js"></script>
    <link rel="stylesheet" href="css/game.css">
</head>
<body>
    <div class = "info-head">
        <div class= "playerStats">
            <div id="playerMana"></div>
            <div id="playerHealth"></div>
        </div>
    </div>
    <div id = "game-board">
        <div id="player"></div>
       
        <!--<img src="sprites/Worm.png" alt="enemy" id="enemy">-->
    </div>
    <div id = "container"></div>
    <template id="card-template">	
            <div class='image'></div>
            <h2></h2>
            <div class="stats">
                <div class='dmgCard'></div>
                <div class='manaCard'></div> 
            </div> 
			
	</template>
    <div id="end-turn">
        <button class="end_turn" onclick='endTurn()'></button>
    </div>	
    <canvas id="canvas"></canvas>
    
</body>
</html>