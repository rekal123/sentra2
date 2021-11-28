<!DOCTYPE html>
<html>
<head>

 <meta charset="utf-8">
	<meta charset="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web Warung Rekal</title>
    <link rel="stylesheet" href="reckl.css">
    <link rel="shortcut icon" type="images/x-icon" href="/favicon.ico">
    <link rel="icon" type="images/favicon.ico" href="image/x-icon">
	
    <link rel="shortcut" type="images/x-icon" href="/favicon.ico">
    <link rel="icon" type="images/favicon.ico" href="image/x-icon">
</head>
<body>
    <div class="wrapper">
    	<header>
            <h1>Warung Rekal</h1>
            <nav>
                <ul>
                    <li><a href="home.php">Beranda</a></li>
                    <li><a href="daftar_masakan.php">Daftar Masakan</a></li>
                    <li><a href="cetring.php">ketring</a></li>
                    <li><a href="tentang.php">Tentang</a></li>
                    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
                </ul>
            </nav>
        </header>
	<title></title>
	<style>
		.container{
			width:650px;
			margin: auto;
			border: 1px dotted #blue;
			padding: 10px;
			background: grey;
			color:#fff;
		}

		h2{
			text-align: center;
			text-decoration: underline;


		}

		table{
			background: DeepPink;
			margin:auto;

		}

		td{
			padding: 10px
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Form Pemesanan buku</h2>
		<table border="1">
			<tr>
				<th>No </th>
				<th>Judul buku</th>
				<th>harga</th>
				<th>jumlah</th>
			</tr>

			<tr>
				<th>1</th>
				<th>mie goreng</th>
				<th>@<input type="text" name="harga" id="algoritma" size="7" value="12500" readonly></th>
				<th>@<input type="number" name="jumlah_algoritma" id="harga_algoritma" size="7" value="0" onchange="total()"></th>
			</tr>

			<tr>
				<th>2</th>
				<th>nasi goreng</th>
				<th>@<input type="text" name="harga" id="javascript" size="7" value="10000" readonly></th>
				<th>@<input type="number" name="jumlah_javascript" id="harga_javascript" size="7" value="0" onchange="total()"></th>
			</tr>

			<tr>
				<th>3</th>
				<th>bakso</th>
				<th>@<input type="text" name="harga" id="php" size="7" value="9000" readonly></th>
				<th>@<input type="number" name="jumlah_php" id="harga_php" size="7" value="0" onchange="total()"></th>
			</tr>

            <tr>
				<th>4</th>
				<th>chiken teriyaki</th>
				<th>@<input type="text" name="harga" id="algoritma" size="7" value="15000" readonly></th>
				<th>@<input type="number" name="jumlah_algoritma" id="harga_algoritma" size="7" value="0" onchange="total()"></th>
			</tr>

			<tr>
				<th>5</th>
				<th>kentang goreng</th>
				<th>@<input type="text" name="harga" id="javascript" size="7" value="8000" readonly></th>
				<th>@<input type="number" name="jumlah_javascript" id="harga_javascript" size="7" value="0" onchange="total()"></th>
			</tr>

			<tr>
				<th>6</th>
				<th>tempe tahu goreng</th>
				<th>@<input type="text" name="harga" id="php" size="7" value="9000" readonly></th>
				<th>@<input type="number" name="jumlah_php" id="harga_php" size="7" value="0" onchange="total()"></th>
			</tr>

			<tr>
				
				<th colspan="3" style="text-align:right">jumlah total</th>
				<th>@<input type="text" name="total_jumlah" id="total" size="7" value="" readonly></th>
			</tr>
		</table>
		<br><br>
		<input type="button" onclick="window.print()" value="cetak">

		<script type="text/javascript">
		function total() {
		var valgoritma = 12500 * parseInt(document.getElementById('harga_algoritma').value);
		var vjavascript = 10000 * parseInt(document.getElementById('harga_javascript').value);
		var vphp = 9000 * parseInt(document.getElementById('harga_php').value);
        var valgoritma = 15000 * parseInt(document.getElementById('harga_algoritma').value);
		var vjavascript = 8000 * parseInt(document.getElementById('harga_javascript').value);
		var vphp = 9000 * parseInt(document.getElementById('harga_php').value);

		var jumlah_harga = valgoritma + vjavascript + vphp;

		document.getElementById('total').value = jumlah_harga;
		}
		
		</script>
	</div>
</body>
<link href="rekalll.css" rel="stylesheet">
</html>