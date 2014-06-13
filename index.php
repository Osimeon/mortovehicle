<?php include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/data-processors/mortocycledetails.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/data-processors/proccesummary.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/mortocycles/css/main.css" rel="stylesheet" type="text/css" />
<link href="/mortocycles/images/dsw_logo_small.png" rel="SHORTCUT ICON" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mortocycles</title>
</head>

<body>
	<div class="wrapper">
	  <div class="header">
			<h1><strong>DSW Mortocycle System</strong></h1>
			<br />
				<ul class="nav">
					<li><a href="/mortocycles/">Home</a></li>
					<li><a href="">Aggregates</a>
						<ul>
							<li><a href="/mortocycles/data-processors/fuelconsumed.php">Fuel Consumed</a></li>
							<li><a href="/mortocycles/data-processors/fuelcost.php">Fuel Cost</a></li>
							<li><a href="/mortocycles/data-processors/meintenancecost.php">Maintenance Cost</a></li>
							<li><a href="/mortocycles/data-processors/kilometerscovered.php">Kilometers Covered</a></li>
							<li><a href="/mortocycles/data-processors/kilometersperlitre.php">Kilometers Per Litre</a></li>
							<li><a href="/mortocycles/data-processors/shillingsperlitre.php">Shillings Per Litre</a></li>
							<li><a href="/mortocycles/data-processors/totalcost.php">Total Cost</a></li>
						</ul>
					</li>
					<li><a href="">Data Entry</a>
						<ul>
							<li><a href="/mortocycles/data-inputs/mortodetails.php">Mortocycle Details</a></li>
							<li><a href="/mortocycles/data-inputs/logging.php">Logging Data</a></li>
							<li><a href="/mortocycles/data-inputs/costs.php">Meintenance Data</a></li>
						</ul>
					</li>
					<li><a href="">View</a>
						<ul>
							<li><a href="/mortocycles/data-processors/mortodetails.php">Mortocycle Details</a></li>
							<li><a href="/mortocycles/data-processors/monthlyanalysis.php">Monthly Logging Analysis</a></li>
						</ul>
					</li>
					<li><a href="#">Help</a></li>
				</ul>
	  </div>
		
		<div class="content">
			<div class="primary">
				<?php if (isset($resultsummary)): ?>
					<table cellspacing="0" id="statsTable" align="center">
						<caption>Mortocycle Aggregates Summary</caption>
							<colgroup>
								<col id="RegNumber" />
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
								<?php foreach ($resultsummary as $resultsummaries): ?>
									<tr class="odd">
										<td><?php echo $resultsummaries['regNumber']; ?></td>
										<td><?php echo number_format($resultsummaries ['MCost']); ?></td>
										<td><?php echo number_format($resultsummaries ['FuCost']); ?></td>
										<td><?php echo number_format($resultsummaries ['ToCost']); ?></td>
										<td><?php echo number_format($resultsummaries ['KilCovered']); ?></td>
										<td><?php echo number_format($resultsummaries ['fuconsumed'],2); ?></td>
										<td><?php echo number_format($resultsummaries ['kilPerLitre'],2); ?></td>
										<td><?php echo number_format($resultsummaries ['shilperlitre'],2); ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
				<?php endif; ?>
			</div>
			<br />
			<div class="secondary">
				<?php if (isset($results)): ?>
					<table cellspacing="0" id="primaryTable" align="center">
						<caption>Click To View</caption>
						<colgroup>
							<col id="Registration" />
							<col id="View" />
						</colgroup>
						<thead id="statsHead">
							<tr>
								<th scope="col">Registration No </th>
								<th scope="col">View</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($results as $resultssearch): ?>
							<tr class="odd">
								<td><?php echo $resultssearch['regNumber']; ?></td>
								
								<td class="button">
									<form action="/mortocycles/data-processors/processview.php" method="post">
										<div>
											<input type="hidden" name="regID" value="<?php echo $resultssearch['regNumber']; ?>"/>
											<input type="submit" name="action" value="Details"/>
										</div>
									</form>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				<?php endif; ?>
				<br />
				<div class="promo">
				  <h6>DSW &copy;2012</h6>
			  </div>
			</div>
		</div>
		
		<div class="footer">
			<center><h4><font color="#003300">DSW</font> | <font color="#003300">&copy;IPA</font></h4></center>
		</div>
		
	</div>
</body>
</html>
