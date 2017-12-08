class View {

	constructor(controler){
		this.controler = controler;
		var that = this;
		$("#mainPanel").click(function(){
			that.controler.panelClicked();
		});
	}

	beginRound(){
		$("#mainPanel").html("<p>En attente du vert...</p>");	
		$("#mainPanel").removeClass("btn-info").addClass("btn-danger");
	}

	setToBeClicked(){
		$("#mainPanel").html("<p>Clique !</p>");	
		$("#mainPanel").removeClass("btn-danger").addClass("btn-success");		
	}

	loose(){
		$("#mainPanel").html("<p>Vous avez cliqué trop tôt !</p>");			
	}

	win(ellapsedTime){
		$("#mainPanel").html("<p>Vous avec cliqué en " + ellapsedTime + " ms !</p>");		
	}
}