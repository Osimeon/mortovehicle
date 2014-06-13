<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/mortocycles/css/logging.css" rel="stylesheet" type="text/css" />
<link href="/mortocycles/images/dsw_logo_small.png" rel="SHORTCUT ICON" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Costs</title>
</head>

<body>
<center>
<div class="wrapper">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/navigation/header.php'; ?>
<form id="newlog" action="/mortocycles/data-processors/newcost.php" method="post">
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
		<legend>Usage Data</legend>
			<div>
				<label for="author">Oil/Lubricant Type:</label>
				<input name="oiltype" id="oiltype" type="text" />
			</div>
			<div>
				<label for="email">Oil/Lubricant Quantity:</label>
				<input name="oilquantity" id="oilquantity" type="text" />
			</div>
			<div>
				<label for="email">
				<div align="justify">Oil/Lubricant Total Cost:</div>
				</label>
				<input name="oilcost" id="oilcost" type="text" />
			</div>
			<div>
				<label for="email">Outsource Material:</label>
				<input name="outsourcmaterial" id="outsourcmaterial" type="text" />
			</div>
			<div>
				<label for="email">Outsource Material (Total Cost):</label>
				<input name="materialcost" id="materialcost" type="text" />
			</div>
			<div>
				<label for="email">Outsource Labour Cost:</label>
				<input name="labourcost" id="labourcost" type="text" />
			</div>
			<div>
				<label for="email">Description Of Work Done:</label>
				<input name="deswork" id="deswork" type="text" />
			</div>
			<div>
				<label for="email">Odometer Current Reading:</label>
				<input name="creading" id="creading" type="text" />
			</div>
			<div>
				<label for="email">Duration Week:</label>
				<input name="duweek" id="duweek" type="text" />
			</div>
			<br />
			<div class="buttons">
				<input type="hidden" name="action" value="oksave"/>
				<input name="save" type="submit" id="save" value="Save"/>
				<input name="cancel" type="submit" id="cancel" value="Cancel"/>
			</div>
	</fieldset>
</form>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/navigation/footer.php'; ?>
</div>
</center>

</body>
</html>
