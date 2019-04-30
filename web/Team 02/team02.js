function alertUs() {
	alert ("Clicked!");
}

function changeColor() {
	var textBox = document.getElementById("color");

	var divBox = document.getElementById("one");

	divBox.style.backgroundColor = textBox.value;
}