class cards{

    constructor(name,damage,mana, id,effect){
        this.name = name;
        this.id = id;
        this.damage = damage;
        this.mana = mana;
        if(effect == undefined){
            this.effect = "no effect";
        }
        else{
            this.effect= effect;
        }
    }
}