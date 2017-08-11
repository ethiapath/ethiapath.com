//html5 canvas
var canvas = document.getElementById('canvas');
context = canvas.getContext('2d');


var drawRandomRect = function () {
	var randomW = Math.random() * 100;
	var randomH = Math.random() * 100;
	var randomX = Math.random() * 100;
	var randomY = Math.random() * 100;
	context.strokeRect(randomX,randomY,randomW,randomH);
};

var main = function () {
	for (var i = 1; i < 100; i++){
		drawRandomRect();
	}
}
main();