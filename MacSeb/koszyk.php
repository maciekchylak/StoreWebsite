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
            <h2>Twój koszyk</h2>
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
            <table id="produkty" style="width:95%">
                <thead>
                    <tr>
                        <th width=20%>Zdjęcie</th>
                        <th width=40%>Nazwa produktu</th>
                        <th width=30%>Ilość</th>
                        <th width=10%>Usuń</th>
                    </tr>
                </thead>
                    <tbody id="tableData"></tbody>
                </table>
                <script type="text/javascript">
                    var cart = generate_cart("jablko=10; gruszka=4");
                    var k = '<tbody>'
                    for(i = 0;i < cart.length; i++){
                        k+= '<tr>';
                        k+= '<td>' + '<img src="images/'+ cart[i][0] + '.jpg" width=100px>' + '</td>';
                        k+= '<td>' + cart[i][0] + '</td>';
                        k+= '<td>' + cart[i][1] + '</td>';
                        k+='<td><input type="image" src="images/bin.png" onClick="reload()" width=32px></td>'
                        k+= '</tr>';
                    }
                    k+='<tr><td colspan="4" style="background-color:rgb(4,170,109)"><h3><a href="formularz.php" style="color:white">Podaj dane</a></h3></td></tr>';
                    k+='</tbody>';
                    document.getElementById('tableData').innerHTML = k;
                    </script>
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
