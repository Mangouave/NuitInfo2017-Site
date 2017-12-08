class controller {
	
	constructor(vue) {
	    this.vue = new View(this);
	    this.idle = true;
	    this.mustClick = false;
	    this.startDate = null;
	    this.task = null;
  	}

  	panelClicked(){
  		if(this.idle){
  			this.beginRound();
  		} else if (this.mustClick) {
  			this.win();
  		} else {
  			this.loose();
  		}
  	}

  	beginRound(){
  		this.idle = false;
  		this.vue.beginRound();
  		var randomCooldown = Math.floor((Math.random() * 5000) + 2000);

  		var that = this;
  		this.task = setTimeout(function(){
  			that.startDate = new Date();
  			that.setToBeClicked();
  			that.mustClick = true;
  		}, randomCooldown);
  	}

  	setToBeClicked(){
  		this.vue.setToBeClicked();
  	}

  	win(){
  		this.mustClick = false;
  		this.idle = true;
  		var endDate = new Date();
  		this.vue.win(endDate - this.startDate);
  	}

  	loose(){
  		this.mustClick = false;
  		this.idle = true;
  		clearTimeout(this.task);
  		this.vue.loose();
  	}

}