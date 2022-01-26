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

function validateCode(){
	var letter = /^[0-9][0-9]-[0-9][0-9][0-9]$/;
	if(letter.test(postcode.value)==true && postcode.value!=""){
		postcode.style.backgroundColor = 'white';
	}else{
		postcode.style.backgroundColor = 'red';
	}
   }

function validateName(atr){
	var letter = /^[\s\p{L}]+$/u;
	if(letter.test(atr.value)==true && atr.value!=""){
		atr.style.backgroundColor = 'white';
	}else{
		atr.style.backgroundColor = 'red';
	}
   }
function validateEmail(){
	var letter = /^[a-zA-Z0-9].*@[a-zA-Z0-9].*\.[a-zA-Z].*$/;
	if(letter.test(email.value)==true && email.value!=""){
		email.style.backgroundColor = 'white';
	}else{
		email.style.backgroundColor = 'red';
	}
   }

function validateNumber(){
	var letter = /^[0-9]+([a-zA-Z]?)$/;
	if(letter.test(number.value)==true && number.value!=""){
		number.style.backgroundColor = 'white';
	}else{
		number.style.backgroundColor = 'red';
	}
}

function validateLocal(){
	var letter = /^[0-9]+$/;
	if(letter.test(local.value)==true){
		local.style.backgroundColor = 'white';
	}else{
		local.style.backgroundColor = 'red';
	}
}

function zamow(){
	if(first_name.style.backgroundColor == 'white' && first_name.value!="" &&
	last_name.style.backgroundColor == 'white' && last_name.value!="" &&
	street.value!="" &&
	number.style.backgroundColor == 'white' && number.value!="" &&
	local.style.backgroundColor == 'white' &&
	postcode.style.backgroundColor == 'white' && postcode.value!="" &&
	city.style.backgroundColor == 'white' && city.value!=""){
		//coś się dzieje
	}else{
		//nic się nie dzieje
	}
}

function generate_cart(input_cookie){
	var list_of_products = input_cookie.split("; ");
	var dictionary = [];
	for(i=0;i<list_of_products.length;i++){
		list_of_products[i]=list_of_products[i].split("=");
		dictionary[i] = [[list_of_products[i][0]],list_of_products[i][1]];
	}
	return dictionary
}

