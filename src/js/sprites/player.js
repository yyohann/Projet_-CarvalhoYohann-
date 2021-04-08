class player{

    constructor(hp, mana, shield){
        this.hp = hp;
        this.mana = mana;
        this.shield = shield;
    }

    attack(card, enemy) {
        if(card.mana <= this.mana){
            enemy.hp -= card.damage;
        }
    }
}