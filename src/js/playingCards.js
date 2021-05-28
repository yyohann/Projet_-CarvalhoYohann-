
console.log('loaded');
function displayCards (cardsHand) {
    document.getElementById("container").innerHTML = "";

	let templateHTML = document.querySelector("#card-template").innerHTML;

	for (let i = 0; i < cardsHand.length; i++) {
		let div = document.createElement("div");
	
		div.className = "card";
		div.innerHTML = templateHTML;
		div.querySelector("h2").innerText = cardsHand[i].name;
		div.querySelector(".dmgCard").innerText = cardsHand[i].damage;
		div.querySelector(".manaCard").innerText = cardsHand[i].mana;
		div.id = cardsHand[i].id;
		div.onclick = () =>{
			cardClick(cardsHand[i].id);
		}
		document.getElementById("container").append(div);
		
	}
}
