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
            <h2>Składanie zamówienia</h2>
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
            <form id="form" width=100px action="insert_data.php", method="POST">
                <legend>Podaj dane do zamówienia</legend>
                <table>
                    <tr>
                        <td><label for="first_name">Imię</label></td>
                        <td><input type="text" name="first_name" id="first_name" oninput="validateFirstName()"/></td>
                    </tr>
                    <tr>
                        <td><label for="last_name">Nazwisko</label></td>
                        <td><input type="text" name="last_name" id="last_name" oninput="validateLastName()"/></td>
                    </tr>
                    <tr>
                        <td><label for="email">e-mail</label></td>
                        <td><input type="text" name="email" id="email" oninput="validateEmail()"/></td>
                    </tr>
                    <tr>
                        <td><label for="street">Ulica</label></td>
                        <td><input type="text" name="street" id="street"/></td>
                    </tr>
                    <tr>
                        <td><label for="number">Numer domu</label></td>
                        <td><input type="text" name="number" id="number" oninput="validateNumber()"/></td>
                    </tr>
                    <tr>
                        <td><label for="local">Numer lokalu</label></td>
                        <td><input type="text" name="local" id="local" oninput="validateLocal()"/></td>
                    </tr>
                    <tr>
                        <td><label for="postcode">Kod pocztowy</label></td>
                        <td><input type="text" name="postcode" id="postcode" oninput="validateCode()"/></td>
                    </tr>
                    <tr>
                        <td><label for="city">Miasto</label></td>
                        <td><input type="text" name="city" id="city" oninput="validateCity()"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <input type="submit" id="order_button" value="Złóż zamówienie">
                        </td>
                    </tr>
                </table>
                
        </form>
		</div>
            
		</div>
        <br>
		


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