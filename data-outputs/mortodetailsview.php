<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/mortocycles/images/dsw_logo_small.png" rel="SHORTCUT ICON" />
<link href="/mortocycles/css/details.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mortocycle Details</title>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/navigation/header.php'; ?>
<center><div class="wrapper" align="center">
<?php if (isset($mortodetails)): ?>
	<table cellspacing="0" id="statsTable" align="center">
		<caption>Mortocycle Details Information</caption>
			<colgroup>
				<col id="RegNumber" />
				<col id="Dept" />
				<col id="Location" />
				<col id="Desc" />
				<col id="PurchDate" />
				<col id="PurchCost" />
				<col id="FuelCardNumber" />
				<col id="Staff1" />
				<col id="Staff2" />
				<col id="Staff3" />
				<col id="EngineNumber" />
				<col id="FrameNumber" />
				<col id="LogBookNumber" />
				<col id="InsuranceCompany" />
				<col id="ExpiryDate" />
			</colgroup>
			<thead id="statsHead">
				<tr>
					<th id="statsHead" scope="col">Registration Number</th>
					<th scope="col">Office</th>
					<th scope="col">Description</th>
					<th scope="col">Purchase Date</th>
					<th scope="col">Cost (Kshs)</th>
					<th scope="col">Fuel Card Number</th>
					<th scope="col">Staff1 Incharge</th>
					<th scope="col">Staff2 Incharge</th>
					<th scope="col">Staff3 Incharge</th>
					<th scope="col">Engine Number</th>
					<th scope="col">Frame Number</th>
					<th scope="col">Log Book Number</th>
					<th scope="col">Insurance Compnay</th>
					<th scope="col">Insurance Expiry Date</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($mortodetails as $resultssearch): ?>
					<tr class="odd">
						<td><?php echo $resultssearch['regNumber']; ?></td>
						<td><?php echo $resultssearch ['dept']; ?></td>
						<td><?php echo $resultssearch ['office']; ?></td>
						<td><?php echo $resultssearch ['desc']; ?></td>
						<td><?php echo $resultssearch ['purchdate']; ?></td>
						<td><?php echo $resultssearch['cardNumber']; ?></td>
						<td><?php echo $resultssearch ['staff1']; ?></td>
						<td><?php echo $resultssearch ['staff2']; ?></td>
						<td><?php echo $resultssearch ['staff3']; ?></td>
						<td><?php echo $resultssearch ['engNumber']; ?></td>
						<td><?php echo $resultssearch ['frameNumber']; ?></td>
						<td><?php echo $resultssearch ['logBookNumber']; ?></td>
						<td><?php echo $resultssearch ['insurance']; ?></td>
						<td><?php echo $resultssearch ['expdate']; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
<?php endif; ?>
<br />
<?php include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/navigation/footer.php'; ?>
</div></center>
</body>
</html>
