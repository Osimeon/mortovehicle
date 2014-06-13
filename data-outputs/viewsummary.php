<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/mortocycles/images/dsw_logo_small.png" rel="SHORTCUT ICON" />
<link href="/mortocycles/css/summarytable.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mortocycle Summary</title>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/navigation/header.php'; ?>

<center><div class="wrapper" align="center">
<?php if (isset($results)): ?>
	<table cellspacing="0" id="statsTable" align="center">
		<caption>Mortocycle Summary</caption>
			<colgroup>
				<col id="RegNumber" />
				<col id="ViewSummary" />
				<col id="FuelCost" />
				<col id="FuelConsumed" />
				<col id="MaintenanceCost" />
				<col id="KilometersCovered" />
				<col id="KilometersPerLitre" />
				<col id="ShillingsPerLitre" />
				<col id="TotalCost" />
			</colgroup>
			<thead id="statsHead">
				<tr>
					<th id="statsHead" scope="col">Registration Number</th>
					<th scope="col">Analysis Period</th>
					<th scope="col">Maintenance Cost</th>
					<th scope="col">Fuel Cost</th>
					<th scope="col">Total Cost</th>
					<th scope="col">Kilometers Covered</th>
					<th scope="col">Fuel Consumed</th>
					<th scope="col">Kilometers Per Litre</th>
					<th scope="col">Shillings Per Litre</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($results as $resultssearch): ?>
					<tr class="odd">
						<td><?php echo $resultssearch['regNumber']; ?></td>
						<td><?php echo $resultssearch['analysis']; ?></td>
						<td><?php echo number_format($resultssearch ['MCost']); ?></td>
						<td><?php echo number_format($resultssearch ['FuCost']); ?></td>
						<td><?php echo number_format($resultssearch ['ToCost']); ?></td>
						<td><?php echo number_format($resultssearch ['KilCovered']); ?></td>
						<td><?php echo number_format($resultssearch['fuconsumed'],2); ?></td>
						<td><?php echo number_format($resultssearch ['kilPerLitre'],2); ?></td>
						<td><?php echo number_format($resultssearch ['shilperlitre'],2); ?></td>
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
