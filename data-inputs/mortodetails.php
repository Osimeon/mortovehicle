<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/mortocycles/images/dsw_logo_small.png" rel="SHORTCUT ICON" />
<link href="/mortocycles/css/logging.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mortocycle Details</title>
</head>

<body>
<center>
<div class="wrapper">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/navigation/header.php'; ?>
<form id="details" action="#" method="post">
	<fieldset>
		<legend>Basic Information </legend>
			<div>
				<label for="author">Registration Number:</label>
				<input name="regNo" id="regNo" type="text" />
			</div>
			<div>
				<label for="email">Department:</label>
				<input name="dept" id="dept" type="text" />
			</div>
			<div>
				<label for="email">Office/Base Location:</label>
				<input name="location" id="location" type="text" />
			</div>
			<div>
				<label for="email">Mortocycle Description:</label>
				<input name="desc" id="desc" type="text" />
			</div>
			<div>
				<label for="email">Purchase Date:</label>
				<input name="purchdate" id="purchdate" type="text" />
			</div>
			<div>
				<label for="email">Fuel Card Number:</label>
				<input name="cardNumber" id="cardNumber" type="text" />
			</div>
	</fieldset>
	
	<fieldset>
		<legend>Logistic Information </legend>
			<div>
				<label for="author">Staff1 Incharge:</label>
				<input name="staff1" id="staff1" type="text" />
			</div>
			<div>
				<label for="email">Staff2 Incharge:</label>
				<input name="staff2" id="staff2" type="text" />
			</div>
			<div>
				<label for="email">
				<div align="justify">Staff3 Incharge:</div>
				</label>
				<input name="staff3" id="staff3" type="text" />
			</div>
			<div>
				<label for="email">Engine Number:</label>
				<input name="engNumber" id="engNumber" type="text" />
			</div>
			<div>
				<label for="email">Frame Number:</label>
				<input name="frameNumber" id="frameNumber" type="text" />
			</div>
			<div>
				<label for="email">Log Book Number:</label>
				<input name="logbkNumber" id="logbkNumber" type="text" />
			</div>
			<div>
				<label for="email">Insurance Provider:</label>
				<input name="insurance" id="insurance" type="text" />
			</div>
			<div>
				<label for="email">Insurance Expiry Date:</label>
				<input name="expdate" id="expdate" type="text" />
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
