
    cardsHand = [];
    cardsHand.push(new cards("slash",2,1,0));
    cardsHand.push(new cards("attack2",3,2,1));
    cardsHand.push(new cards("attack3",5,6,2));
    console.log(cardsHand);
    displayCards(cardsHand);
    let selectedCard = null;

    var setSelectedCard = function(element) {
        selectedCard = element;
    }

    var cardSelection = function() {
        var attribute = this.getAttribute("id");
        console.log(attribute);
        console.log(selectedCard);
        cardsHand.forEach(element => {
            if(element.id == attribute){
                return setSelectedCard(element);
            }
        });

    }

    var elements = document.getElementsByClassName("card");
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', cardSelection, false);
    }


    

	
