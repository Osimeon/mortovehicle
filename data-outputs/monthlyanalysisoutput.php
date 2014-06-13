<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/mortocycles/images/dsw_logo_small.png" rel="SHORTCUT ICON" />
<link href="/mortocycles/css/summarytable.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Monthly Logging Analysis</title>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/navigation/header.php'; ?>

<center><div class="wrapper" align="center">
<?php if (isset($results)): ?>
	<table cellspacing="0" id="statsTable" align="center">
		<caption>Monthly Fuel Statistics</caption>
		<colgroup>
			<col id="Registration Number" />
			<col id="FuelCost" />
			<col id="FuelQuantity" />
			<col id="KilometersCovered" />
			<col id="Month" />
			<col id="Year" />
			<col id="Analysis Period" /><br />
		</colgroup>
		<thead id="statsHead">
			<tr>
				<th scope="col"><acronym title="Mortocycle Registration Number">Registration Number</acronym></th>
				<th scope="col"><acronym title="Fuel Cost In Kenyan Shillings">Fuel Cost(Kshs)</acronym></th>
				<th scope="col"><acronym title="Fuel Quantity">Fuel Quantity</acronym></th>
				<th scope="col"><acronym title="Kilometers Covered">Kilometers Covered</acronym></th>
				<th scope="col"><acronym title="Month Of The Year">Month</acronym></th>
				<th scope="col"><acronym title="Year Of Expenditure">Year</acronym></th>
				<th scope="col"><acronym title="Analysis Period">Analysis Period</acronym></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($results as $resultssearch): ?>
			<tr class="odd">
				<td><?php echo $resultssearch['regNo']; ?></td>
				<td><?php echo number_format($resultssearch['fuelCost']); ?></td>
				<td><?php echo number_format($resultssearch['fquantity'],2); ?></td>
				<td><?php echo number_format($resultssearch['kilocovered'],2); ?></td>
				<td><?php echo $resultssearch['monthNumber']; ?></td>
				<td><?php echo $resultssearch['yearNumber']; ?></td>
				<td><?php echo $resultssearch['analyze']; ?></td>
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
