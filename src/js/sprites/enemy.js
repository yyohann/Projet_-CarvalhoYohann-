class enemy{

    constructor(hp, shield,damage){
        this.hp = hp;
        this.shield = shield;
        this.damage = damage;
    }

    attackEnemy(target) {
        target.hp -= this.damage;
    }
    
    getHealth(){
        return this.hp;
    }


}