<!DOCTYPE html>
<html>
<head>
	<title>INDOFAUCETROTATOR - FaucetBOX</title>
	<style type="text/css">
	body {

	}
	#visit {
		border-radius: 5px;
    	background: #00bfff; 
    	color: white;
    	width: 65px;
    	padding: 5px;
	}
	a {
		text-decoration: none;
	}

	#isi{
		margin: auto;
		width: 900px;

	}
	table {
		text-align: center;
		font-family: arial;
	}
	th {
		padding: 10px 20px;
    	background-color: #00cca3;
    	color: white;
    	font-family: arial;
    	letter-spacing: 2px;

	}

	td.faucetboxtd {
		padding: 10px;
		border-bottom: 1px solid gray;
	}

	tr.faucetboxtr:hover {
		background: #f7f7f7;
	}
	#visit:hover{
		background: #00ff55;
	}
	.fbnamewarna {
	padding-top: 5px;
    border-radius: 5px;  
    width: 300px;
    height: 25px; 
	text-align: center;
	margin: 10px;
	font-family: arial;
	color: #FFFFFF;
	}
	.red {
	background: red; 
	}
	.green {
    background: green; 
	}
	.blue {
    background: blue; 
	}
	.yellow {
    background: yellow; 
	}
	.purple {
    background: purple; 
	}
	.magenta {
    background: magenta; 
	}
	.aqua {
    background: aqua; 
	}
	</style>
</head>
<body>
<?php  ?>
<?php 
$faucetbox = [
	[
	"faucetboxname" => "FaucetBOX.com",
	"reward" => "99<br/>-<br/>100",
	"payment" => "FaucetBOX BitCoin",
	"timeinterval" => "30 Minute",
	"warna" => "fbnamewarna aqua",
	"link" => "http://URL"
	]
	];

$i = 1;	?>
<div class="halaman">
	<?php foreach ($faucetbox as $fbname) :?>
	
	<table cellspacing="0" align="center">
		<tr>
			<th>#</th>
			<th>Faucet Name</th>
			<th>Reward</th>
			<th>Payment</th>
			<th>Time Interval</th>
			<th></th>
		</tr>
		<tr class="faucetboxtr">
			<td class="faucetboxtd"><?php echo $i; ?></td>
			<td class="faucetboxtd"><a href="<?php echo $fbname["link"]; ?>"><p class="<?php echo $fbname["warna"]; ?>"><?php echo $fbname["faucetboxname"]; ?></p></a></td>
			<td class="faucetboxtd"><?php echo $fbname["reward"]; ?></td>
			<td class="faucetboxtd"><?php echo $fbname["payment"]; ?></td>
			<td class="faucetboxtd"><?php echo $fbname["timeinterval"]; ?></td>
			<td class="faucetboxtd"><a href="<?php echo $fbname["link"]; ?>" target="_blank"><p id="visit">VISIT</p></a></td>
		</tr>

	</table><?php $i++; ?>
	<?php endforeach; ?>
</div>

</body>
</html>