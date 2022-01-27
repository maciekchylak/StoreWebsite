<?php
    $servername = 'ulsq0qqx999wqz84.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
    $username = 'rtwkas66jqm2k1z0';
    $password = 'prxh0h3bkdndj346';
    $dbname = 'y7snb0jclmyepnar';

    $conn = new mysqli($servername, $username, $password, $dbname);

    $first_name = "";
    $last_name = "";
    $email = "";
    $street = "";
    $city = "";
    $postcode = "";
    $local = "";
    $number = "";
    $items = "";

    if(isset($_POST['first_name'])){
        $first_name = $_POST['first_name'];
    }
    if(isset($_POST['last_name'])){
        $last_name = $_POST['last_name'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['street'])){
        $street = $_POST['street'];
    }
    if(isset($_POST['city'])){
        $city = $_POST['city'];
    }
    if(isset($_POST['postcode'])){
        $postcode= $_POST['postcode'];
    }
    if(isset($_POST['local'])){
        $local = $_POST['local'];
    }
    if(isset($_POST['number'])){
        $number = $_POST['number'];
    }
    
    $final_json = "[";
    $cookie_len = count($_COOKIE);
    
    foreach ($_COOKIE as $key => $value) {
        $final_json .= '{"product_name":"' . $key . '", "quantity":"' . $value . '"}, '; 
    }
    $final_json  = 	substr($final_json, 0, -2);
    $final_json .= "]"; 
    
    $sql = "INSERT INTO Orders(first_name, last_name, email, city, zip_code, street, building_number, flat_number, items) VALUES
    ('$first_name', '$last_name', '$email', '$city', '$postcode', '$street', '$number', '$local', '$final_json')";
    $result = $conn->query($sql);
   
    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time()-1000);
            setcookie($name, '', time()-1000, '/');
        }
    }

    $conn->close();
?>