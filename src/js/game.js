
let cardsHand = [];
let enemies = [];

let cardSelected;

let cardList = [];
let spriteList = [];
let ctx = null;

const MaxCard = 8;

window.addEventListener("load", () => {
    ctx = document.getElementById("canvas").getContext("2d");
    
    createCardList();
    initiateGame();
    displayCards(cardsHand);

    enemies.push(new enemy(5,0,2));
    enemies.push(new enemy(5,1,2));
    joueur = new player(70,5,10);
    
    setTimeout(state, 1000);
});

const initiateGame = () => {
    for (let i = 0; i < 4; i++) {
        var rand = Math.floor(Math.random() * cardList.length);
        var randomCard = cardList.find(x => x.id === rand);
        cardsHand.push(randomCard); 
    }
}

const drawCard = () => {
    if (cardsHand.length <= MaxCard) {
        var rand = Math.floor(Math.random() * cardList.length);
        var randomCard = cardList.find(x => x.id === rand);
        cardsHand.push(randomCard); 
        displayCards(cardsHand);
    }
}

const tick = () => {
    ctx.fillStyle = 'rgba(0, 0, 0, 0.0)';
    ctx.clearRect(0, 0, canvas.width, canvas.height); // clear canvas
	ctx.fillRect(0, 0, canvas.width, canvas.height);
	for (let i = 0; i < spriteList.length; i++) {
		let alive = spriteList[i].tick();
        if (!alive) {
            spriteList.splice(i, 1);
            i--;
        }
	}
	window.requestAnimationFrame(tick);
}

const newLevel = () => {
    
    joueur.hp +=5;
    var rand = Math.ceil(Math.random() * 4);
    console.log(rand);
    for (let i = 0; i < rand; i++) {
        enemies.push(new enemy(Math.ceil(Math.random() * 5),Math.floor(Math.random() * 5),Math.ceil(Math.random() * 3)));   
    }
}

const state = () => {
    if(joueur.hp <= 0){
        isDead();
    }
    else{
        
        drawPlayer();
        drawEnemy(enemies);
        document.getElementById("playerHealth").innerText = joueur.hp;
        document.getElementById("playerMana").innerText = joueur.mana;
        for (let i = 0; i < enemies.length; i++) {
            if (enemies[i].hp <= 0) {
                enemies.shift();
            }
        }
        if (enemies.length === 0) {
            newLevel();
        }
        setTimeout(state, 1000);
    }
  
}

const cardClick = (uid) => {
    var card = cardsHand.find(x => x.id === uid)
    cardSelected = card;
}

const drawPlayer = () => {
    document.getElementById("game-board").innerHTML = "";
    let div = document.createElement("div");
    div.className = "player";
    div.id = "player";
    document.getElementById("game-board").append(div);
}

const drawEnemy = (enemy) => {
    for (let i = 0; i < enemy.length; i++) {
        let div = document.createElement("div");
        div.className = "enemy";
        div.id = "enemy"+i;
        div.style.backgroundImage ="url('../sprites/worm.png')";
        document.getElementById("game-board").append(div);

        let hp = document.createElement("p");
        hp.className = "enemyHP";
        hp.innerText = enemies[i].hp;
        document.getElementById("enemy"+i).append(hp);

        let def = document.createElement("p");
        def.className = "enemyShield";
        def.innerText = enemies[i].shield;
        document.getElementById("enemy"+i).append(def);

        div.onclick = () =>{
            if (cardSelected != undefined) {
                var sucess = joueur.attackPlayer(cardSelected, enemies[i]);	
            }    
            if (sucess === true) {
                spriteList.push(new Slash());
                tick();
                var removeIndex = cardsHand.map(function(item) { return item.id; }).indexOf(cardSelected.id);
                cardsHand.splice(removeIndex,1);
                cardSelected = undefined;
                displayCards(cardsHand);
            }
        }
    }
}

const endTurn = () => {

    if (joueur.mana <= 12) {
        joueur.maxMana++;  
    }
    joueur.mana=joueur.maxMana;
    for(let i = 0; i < enemies.length; i++){
        enemies[i].attackEnemy(joueur);
    }    
    drawCard();
}

const isDead = () => {
    let div = document.createElement("div");
    div.className = "death";
    console.log('dead');
    document.querySelector("html").append(div);
    let img = document.createElement("img");
    img.src = "../sprites/Dead_Adventurer.jpg";
    img.style.width = "450px"
    img.style.height = "250px"
    document.querySelector(".death").append(img);
    let txt = document.createElement("span");
    txt.className = "deathMessage";
    txt.innerText = "Un autre aventurier vous a trouvé inconscient allongé au sol."+
    "\n Vous allez être ramené en lieu sur.";
    document.querySelector(".death").append(txt);
    let btn = document.createElement("button");
    btn.innerText = "D'accord";
    btn.onclick = () => {
        location.href = "home.php";
    }
    document.querySelector(".death").append(btn);
}

const createCardList = () => {
    //name,damage,mana(cost),uid,effect(optional)
    cardList.push(new cards("Mosquito bite",1,1,0));
    cardList.push(new cards("Mosquito bite",1,1,1));
    cardList.push(new cards("Mosquito bite",1,1,2));
    cardList.push(new cards("Mosquito bite",1,1,3));
    cardList.push(new cards("attack2",3,2,4));
    cardList.push(new cards("attack3",5,6,5));
    cardList.push(new cards("attack4",3,3,6));
    cardList.push(new cards("attack5",4,3,7));
    cardList.push(new cards("attack6",3,3,8));
    cardList.push(new cards("attack7",4,4,9));
    cardList.push(new cards("attack7",4,4,10));
    cardList.push(new cards("attack7",4,4,11));
    cardList.push(new cards("attack3",5,6,12));
    cardList.push(new cards("attack4",3,3,13));
    cardList.push(new cards("attack5",4,3,14));
    cardList.push(new cards("attack8",4,5,15));
    cardList.push(new cards("attack8",4,5,16));
    cardList.push(new cards("attack9",5,5,17));
    cardList.push(new cards("attack9",5,5,18));
    cardList.push(new cards("attack10",6,6,19));
    cardList.push(new cards("attack11",7,6,20));
}

