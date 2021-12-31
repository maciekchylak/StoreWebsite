function plusClick(){
  if (Number(document.getElementById('input').value) < document.getElementById("input").max){
    document.getElementById('input').value = Number(document.getElementById('input').value)+1;
  }
  else{
    document.getElementById("input").max - 1;
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
