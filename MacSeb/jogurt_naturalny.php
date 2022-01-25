<!DOCTYPE html>

<head>
    <title>MacSeb</title>
    <script src="functions.js"></script>
    <link rel="stylesheet" href="lab_style.css" type="text/css">
    <link rel="shortcut icon" type="image/jpg" href="logo.svg"/>
</head>

<body>
    <div id="main" a href>
        <div id="header">
                        <img src="logo.svg" width=64px align=left>
                        <img src="logo.svg" width=64px align=right>
                <a href="index.php"><h1>MacSeb</h1></a>
                        <hr>
            <h2>jogurt_naturalny</h2>
        </div>
        <br>
                <div id="layout">
        <div id="left">

            <br>
                        <a href="pieczywo.php">
            <div id="category">
                <h2>Pieczywo</h2>
            </div>
                        </a>
            <br>
                        <a href="owoce.php">
            <div id="category">

                <h2>Owoce i warzywa</h2>

            </div>
                        </a>
            <br>
                        <a href="nabial.php">
            <div id="category">

                <h2>Nabiał</h2>

            </div>
            </a>
                        <br>
                        <a href="mieso.php">
            <div id="category">

                <h2>Mięso i wędliny</h2>

            </div>
                        </a>
            <br>
                        <a href="napoje.php">
                        <div id="category">

                <h2>Napoje</h2>

            </div>
                        </a>
            <br>
        </div>
                <div id="right">
				<table id="produkty">
			<col style="width:40%">
			<col style="width:40%">
			<col style="width:20%">
			<tr>
				<th>Zdjęcie</th>
				<th>Zmień ilość</th>
				<th>Cena/jednostka</th>
			</tr>
			<tr>
				<td rowspan="3"><img src="images/jogurt_naturalny.jpg" width=400px></td>
				<td>
				<button id="minus" onclick="minusClick()">−</button>
				<input type="number" value="0" min="0" max=<?php
                            $servername = 'ulsq0qqx999wqz84.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
                            $username = 'rtwkas66jqm2k1z0';
                            $password = 'prxh0h3bkdndj346';
                            $dbname = 'y7snb0jclmyepnar';

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            $sql = "SELECT quantity FROM Products WHERE product_name = 'jogurt_naturalny'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo $row["quantity"];
                            }
                            } else {
                            echo 0;
                            }
                            $conn->close();
                    ?> id="input"/>
				<button id="plus" onclick="plusClick()">+</button>
				</td> 
				<td><h2>
                    
                    <?php
                            $servername = 'ulsq0qqx999wqz84.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
                            $username = 'rtwkas66jqm2k1z0';
                            $password = 'prxh0h3bkdndj346';
                            $dbname = 'y7snb0jclmyepnar';

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            $sql = "SELECT price FROM Products WHERE product_name = 'jogurt_naturalny'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo $row["price"];
                            }
                            } else {
                            echo 0;
                            }
                            $conn->close();
                    ?>zł/<?php
                            $servername = 'ulsq0qqx999wqz84.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
                            $username = 'rtwkas66jqm2k1z0';
                            $password = 'prxh0h3bkdndj346';
                            $dbname = 'y7snb0jclmyepnar';

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            $sql = "SELECT unit FROM Products WHERE product_name = 'jogurt_naturalny'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo $row["unit"];
                            }
                            } else {
                            echo 0;
                            }
                            $conn->close();
                    ?>
                </h2></td>
			</tr>
			<tr>
				<td colspan="2">
				<button type="button" onclick="dodaj()">Dodaj</button>
				</td>
			</tr>
		</table>
                </div>
                </div>
        <br>
                        <div id="koszyk">
                                <a href="koszyk.php"><p2>Przejdź do Twojego koszyka</p2></a>
                        </div>
                
        <div id="foot">
                        <p1>
            <b>MacSeb Sp. z o.o.</b><br>
            Sebastian Deręgowski & Maciej Chylak<br>
            Wydział Matematyki i Nauk Informacyjnych Politechniki Warszawskiej<br>
            ul. Koszykowa 75<br>
            00-662 Warszawa
                        </p1>
        </div>
        <br>

    </div>
</body>