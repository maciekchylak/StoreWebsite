function plusClick(){
	document.getElementById('input').value = Number(document.getElementById('input').value)+1;
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