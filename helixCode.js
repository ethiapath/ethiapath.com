function drawShapes() {
	var shapes = document.getElementById("myShapes");
	var contextShapes = shapes.getContext("2d");
	//red square
	contextShapes.fillStyle = "red";
	contextShapes.fillRect(0, 0, 150, 100);
	//blue circle
	contextShapes.beginPath();
	contextShapes.arc(200, 50, 50, 0, Math.PI*2, true);
	contextShapes.closePath();
	contextShapes.fillStyle = "blue";
	contextShapes.fill();
	//stroked portion of circle
	contextShapes.beginPath();
	contextShapes.arc(300, 50, 50, 0, Math.PI*1, false);
	contextShapes.closePath();
	contextShapes.lineWidth = 3;
	contextShapes.stroke();
}