class Slash {
	constructor() {
        this.atTick = 0;
		let columnCount = 6;
		let rowCount = 1;
		let refreshDelay = 100;
		let loopColumn = true;
		let scale = 0.9;
		this.tiledImage = new TiledImage("../../sprites/slash.png", columnCount, rowCount,refreshDelay, loopColumn, scale, null);

		this.tiledImage.changeRow(0);
		this.tiledImage.changeMinMaxInterval(0,6);
		this.x = 100;
		this.y = 90;
        this.tiledImage.looped=false;
	}
	ctx = canvas.getContext("2d");
	
	tick () {
        if (this.tiledImage.imageCurrentCol == 5) {
            return false;
        }
		this.tiledImage.tick(this.x, this.y, ctx);
		return true;
	}
}