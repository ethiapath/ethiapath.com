//canvasTest by:Hargobind
//2013
//
function drawStuff() {
	var theCanvas = document.getElementById("canvasTest");
	if (!theCanvas || !theCanvas.getContext) {
		return;
	}
	var context = theCanvas.getContext("2d");
	context.fillStyle = "#000000";
	//hello world message
	context.font = "20px Sans-Serif";
	context.textBaselie = "top";
	context.fillText ("Hello World!", 10, 100);
	
	var helloWorldImage = new Image();
	helloWorldImage.onLoad = function () {
		context.drawImage(helloWorldImage, 160, 130);
	}
	helloWorldImage.src = "helloWorld.gif";
	//line around image
	context.strokeStyle = "#ffffaa";
	context.strokeRect(5, 5, 490, 290);
}