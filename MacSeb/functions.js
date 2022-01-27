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

function dodaj(product_name, quantity){
	document.cookie = product_name + "=" + quantity;
	document.getElementById('input').value = 0;
}

function reload(){
	//to do
	window.location.reload();
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
	if(letter.test(document.getElementById('postcode').value)==true && document.getElementById('postcode').value!=""){
		document.getElementById('postcode').style.backgroundColor = 'white';
	}else{
		document.getElementById('postcode').style.backgroundColor = 'red';
	}
   }

function validateFirstName(){
	var letter = /^[\s\p{L}]+$/u;
	if(letter.test(document.getElementById('first_name').value)==true && document.getElementById('first_name').value!=""){
		document.getElementById('first_name').style.backgroundColor = 'white';
	}else{
		document.getElementById('first_name').style.backgroundColor = 'red';
	}
   }

   function validateLastName(){
	var letter = /^[\s\p{L}]+$/u;
	if(letter.test(document.getElementById('last_name').value)==true && document.getElementById('last_name').value!=""){
		document.getElementById('last_name').style.backgroundColor = 'white';
	}else{
		document.getElementById('last_name').style.backgroundColor = 'red';
	}
   }
   
   function validateCity(){
	var letter = /^[\s\p{L}]+$/u;
	if(letter.test(document.getElementById('city').value)==true && document.getElementById('city').value!=""){
		document.getElementById('city').style.backgroundColor = 'white';
	}else{
		document.getElementById('city').style.backgroundColor = 'red';
	}
   }   

function validateEmail(){
	var letter = /^[a-zA-Z0-9].*@[a-zA-Z0-9].*\.[a-zA-Z].*$/;
	if(letter.test(document.getElementById('email').value)==true && document.getElementById('email').value!=""){
		document.getElementById('email').style.backgroundColor = 'white';
	}else{
		document.getElementById('email').style.backgroundColor = 'red';
	}
   }

function validateNumber(){
	var letter = /^[0-9]+([a-zA-Z]?)$/;
	if(letter.test(document.getElementById('number').value)==true && document.getElementById('number').value!=""){
		document.getElementById('number').style.backgroundColor = 'white';
	}else{
		document.getElementById('number').style.backgroundColor = 'red';
	}
}

function validateLocal(){
	var letter = /^[0-9]+$/;
	if(letter.test(document.getElementById('local').value)==true){
		document.getElementById('local').style.backgroundColor = 'white';
	}else{
		document.getElementById('local').style.backgroundColor = 'red';
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

