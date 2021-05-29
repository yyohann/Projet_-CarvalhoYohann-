class player{

    constructor(hp, mana, shield){
        this.hp = hp;
        this.maxMana = mana;
        this.mana = this.maxMana;
        this.shield = shield;
    }

    attackPlayer(card, enemy) {
        if(card.mana <= this.mana){
            for (let i = 1; i <= card.damage; i++) {
                if (enemy.hp <= 0) {
                    return;
                }

                if (enemy.shield <= 0) {
                    enemy.hp --;
                }
                else{
                    enemy.shield --;
                }
               
            }
            this.mana -=card.mana;   
            return true;
        }
        return false;
    }
}