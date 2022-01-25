function plusClick(filename){
	if (Number(document.getElementById('input').value)+1 <= readAvailable(filename)){
		document.getElementById('input').value = Number(document.getElementById('input').value)+1;
	}else{
		document.getElementById('input').value = readAvailable(filename);
	}
};

function minusClick(){
	if (Number(document.getElementById('input').value)>0){
		document.getElementById('input').value = Number(document.getElementById('input').value)-1;
	}else{
		document.getElementById('input').value = 0;
	}
};

function dodaj(){
	document.getElementById('input').value = 0;
}

function readPrice(filename){
	price = 4;
	document.getElementById('price').innerText = price;
}

function readUnit(name){
	unit = name;
	document.getElementById('unit').innerText = unit;
}

function readAvailable(filename){
	available = 5;
	return available;
}