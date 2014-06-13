<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/mortocycles/images/dsw_logo_small.png" rel="SHORTCUT ICON" />
<link href="/mortocycles/css/logging.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Logging Data</title>
</head>

<body>

<center>
<div class="wrapper">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/navigation/header.php'; ?>
<form id="newlog" action="/mortocycles/data-processors/newlog.php" method="post">
	<fieldset>
		<legend>Basic Details</legend>
			<div>
				<label for="author">Registration Number:</label>
				<input name="regNo" id="regNo" type="text" />
			</div>
			<div>
				<label for="email">Date (yyyy - mm - dd):</label>
				<input name="date" id="date" type="text" />
			</div>
	</fieldset>
	
	<fieldset>
		<legend>Log Data</legend>
			<div>
				<label for="author">Fuel Quantity (To Full Tank):</label>
				<input name="fquantity" id="fquantity" type="text" />
			</div>
			<div>
				<label for="email">Odometer Current Reading:</label>
				<input name="creading" id="creading" type="text" />
			</div>
			<div>
				<label for="email">
				<div align="justify">Odometer Previous Reading:</div>
				</label>
				<input name="preading" id="preading" type="text" />
			</div>
			<div>
				<label for="email">Kilometers Covered:</label>
				<input name="kmcovered" id="kmcovered" type="text" />
			</div>
			<div>
				<label for="email">Kilometers Per Litre:</label>
				<input name="kmperlitre" id="kmperlitre" type="text" />
			</div>
			<div>
				<label for="email">Fuel Cost (Kshs):</label>
				<input name="fcost" id="fcost" type="text" />
			</div>
			<div>
				<label for="email">Duration Week:</label>
				<input name="duweek" id="duweek" type="text" />
			</div>
			<br />
			<div class="buttons">
				<input type="hidden" name="action" value="oksave"/>
				<input type="submit" value="Save"/>
				<input type="submit" name="cancelaction" value="Cancel"/>
			</div>
	</fieldset>
</form>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/navigation/footer.php'; ?>
</div>
</center>

</body>
</html>
